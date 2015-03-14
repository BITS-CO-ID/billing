<?php
/**
 * BoxBilling
 *
 * LICENSE
 *
 * This source file is subject to the license that is bundled
 * with this package in the file LICENSE.txt
 * It is also available through the world-wide-web at this URL:
 * http://www.boxbilling.com/LICENSE.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@boxbilling.com so we can send you a copy immediately.
 *
 * @copyright Copyright (c) 2010-2012 BoxBilling (http://www.boxbilling.com)
 * @license   http://www.boxbilling.com/LICENSE.txt
 * @version   $Id$
 */
class Payment_Adapter_Payza extends Payment_AdapterAbstract
{
    public function init()
    {
        if(!$this->getParam('email')) {
            throw new Payment_Exception('Payment gateway "Payza" is not configured properly. Please update configuration parameter "Payza Email address" at "Configuration -> Payments".');
        }
        
        if (!$this->getParam('securityCode')) {
        	throw new Payment_Exception('Payment gateway "Payza" is not configured properly. Please update configuration parameter "IPN Security Code" at "Configuration -> Payments".');
        }
    }
    
    public static function getConfig()
    {
        return array(
            'supports_one_time_payments'   =>  true,
            'supports_subscriptions'     =>  false,
            'description'     =>  'Clients will be redirected to payza.com to make payment. Note that Payza supports credit card payments.<br />' .
        						  'In your alertpay account go to <i>Business Tools &gt; IPN Setup</i> and enable: IPN Status',
            'form'  => array(
                'email' => array('text', array(
                            'label' => 'Payza Email address', 
                            'description' => 'Your business account email at Payza',
                            'validators'=>array('EmailAddress'),
                    ),
                 ),
                 'securityCode' => array('password', array(
                 			'label' => 'IPN Security Code',
                 			'description' => 'To setup your "IPN Security Code" login to Payza account. Go to "Business Tools" ->  "IPN setup". Enter your PIN and click on "Access". Copy "IPN Security Code" and paste it to this field.',
                 			'validators' => array('notempty'),
                 	),
                 ),
            ),
        );
    }
    
    /**
     * Return payment gateway type
     * @return string
     */
    public function getType()
    {
        return Payment_AdapterAbstract::TYPE_FORM;
    }
    
    /**
     * Return payment gateway type
     * @return string
     */
    public function getServiceUrl()
    {
        if($this->testMode) {
            return 'https://sandbox.payza.com/sandbox/payprocess.aspx';
        }
		return 'https://www.payza.com/PayProcess.aspx';
    }

    public function getInvoiceId($data)
    {
        $id = parent::getInvoiceId($data);
        if(!is_null($id)) {
            return $id;
        }
        
        return isset($data['post']['apc_1']) ? (int)$data['post']['apc_1'] : NULL;
    }

	public function singlePayment(Payment_Invoice $invoice) 
	{
		$c = $invoice->getBuyer();
		$params = array(
			'ap_merchant'		=>	$this->getParam('email'),
			'ap_purchasetype'	=>	'service',
			'ap_currency'		=>	$invoice->getCurrency(),
			'ap_alerturl'		=>	$this->getParam('notify_url'),
			'ap_returnurl'		=>	$this->getParam('return_url'),
			'ap_cancelurl'		=>	$this->getParam('cancel_url'),
			'ap_fname'			=>	$c->getFirstName(),
			'ap_lname'			=>	$c->getLastName(),
			'ap_contactemail'	=>	$c->getEmail(),
			'ap_contactphone'	=>	$c->getPhone(),
			'ap_addressline1'	=>	$c->getAddress(),
			'ap_city'			=>	$c->getCity(),
			'ap_stateprovince'	=>	$c->getState(),
			'ap_zippostalcode'	=>	$c->getZip(),
			'ap_country'		=>	$c->getCountry(),
			'apc_1'				=>	$invoice->getId(),
			'apc_2'				=>	$invoice->getNumber(),
		);
		
		$i = 1;
		foreach ($invoice->getItems() as $item) {
			$params['ap_itemcode_' . $i]	= $item->getId();
			$params['ap_itemname_' . $i] 	= $item->getTitle();
			$params['ap_description_' . $i]	= $item->getDescription();
			$params['ap_amount_' . $i]		= $item->getTotalWithTax();
			$params['ap_quantity_' . $i] 	= 1;
			$i++;
		}
		
		return $params;
	}

	public function recurrentPayment(Payment_Invoice $invoice) 
	{
		throw new Payment_Exception('Not implemented yet');	
	}

    /**
     * @see https://dev.payza.com/resources/references/ipn-variables
     * @param type $data
     * @param Payment_Invoice $invoice
     * @return Payment_Transaction 
     */
	public function getTransaction($data, Payment_Invoice $invoice) 
	{
		$ipn = $data['post'];

		$tx = new Payment_Transaction();
        $tx->setId($ipn['ap_referencenumber']);
		$tx->setAmount($ipn['ap_totalamount']);
		$tx->setCurrency($ipn['ap_currency']);
        
        if($ipn['ap_purchasetype'] == 'subscription') {
            switch ($ipn['ap_status']) {
                case 'Subscription-Canceled':
                case 'Subscription-Expired':
                    $tx->setType(Payment_Transaction::TXTYPE_SUBSCR_CANCEL);
                    $tx->setStatus(Payment_Transaction::STATUS_COMPLETE);
                break;
            
                case 'Subscription-Payment-Success':
                    $tx->setType(Payment_Transaction::TXTYPE_SUBSCR_CREATE);
                    $tx->setStatus(Payment_Transaction::STATUS_COMPLETE);
                    $tx->setSubscriptionId($ipn['ap_subscriptionreferencenumber']);
                break;

                case 'Subscription-Payment-Failed':
                case 'Subscription-Payment-Rescheduled':
                default:
                    
                break;
            }
        } else {
            $tx->setType(Payment_Transaction::TXTYPE_PAYMENT);
            if($ipn['ap_status'] == 'Success') {
                $tx->setStatus(Payment_Transaction::STATUS_COMPLETE);
            }
        }
		return $tx;
	}

    public function isIpnValid($data, Payment_Invoice $invoice)
    {
        $ipn = $data['post'];
        
        if($ipn['ap_merchant'] != $this->getParam('email')) {
            error_log('Payza email merchant does not match');
            return false;
        }
        
        if($ipn['ap_securitycode'] != $this->getParam('securityCode')) {
            error_log('Payza security code does not match');
            return false;
        }
        
		return true;
    }
}