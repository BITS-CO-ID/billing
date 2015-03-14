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

/**
 * @see http://wiki.wmtransfer.com/wiki/show/Web+Merchant+Interface?q=merchant
 * @see http://www.wmtransfer.com/eng/merchants/automated.shtml 
 */
class Payment_Adapter_WebMoney
{
    private $config = array();
    
	const USD = 'Z';
	const RUB = 'R';
	const EUR = 'E';
	const UAH = 'U';
	const BYR = 'B';
	
	const REQUEST_TYPE_PREREQUEST = 'prerequest';
	const REQUEST_TYPE_NOTIFICATION = 'notification';
	const REQUEST_TYPE_CONFIRMATION = 'confirm';
	
	public function __construct($config)
    {
        $this->config = $config;
        
        if(!$this->config['purse']) {
            throw new Payment_Exception('Payment gateway "WebMoney" is not configured properly. Please update configuration parameter "Purse" at "Configuration -> Payment gateways > WebMoney".');
        }
    }

    public static function getConfig()
    {
        return array(
            'supports_one_time_payments'   =>  true,
            'supports_subscriptions'       =>  false,
            'description'     =>  'Configure WebMoney gateway. Do not forget enable option "Allow URLs transmitted in the form"',
            'form'  => array(
                'purse' => array('text', array(
                            'label' => 'WebMoney purse',
                    ),
                 ),
            ),
        );
    }
	
	public function getHtml($api_admin, $id) 
    {
        $invoice = $api_admin->invoice_get(array('id'=>$id));
        
		$data = array();
		$data['LMI_PAYEE_PURSE']    =	$this->config['purse'];
		$data['LMI_PAYMENT_AMOUNT']	=	$invoice['total'];
		$data['LMI_PAYMENT_NO']		=	$invoice['id'];
		$data['LMI_PAYMENT_DESC']	=	$invoice['title'];
		$data['LMI_RESULT_URL']		=	$this->config['notify_url'];
		$data['LMI_SUCCESS_URL']	=	$this->config['success_url'];
		$data['LMI_SUCCESS_METHOD']	=	1;											//The field may have values 0, 1 or 2 equal to values of the ‘Method of requesting Success URL’ – ‘GET’, ‘POST’ or ‘LINK’.
		$data['LMI_FAIL_URL']		=	$this->config['cancel_url'];
		$data['LMI_FAIL_METHOD']	=	1;											//The field may have the values 0, 1 or 2 equal to values of the ‘Method of requesting Fail URL’ – ‘GET’, ‘POST’ or ‘LINK’.
		$data['INVOICE_ID']			= 	$invoice['id'];
		
		if ($this->testMode) {
			$data['LMI_MODE']			=	1;
			$data['LMI_SIM_MODE']		=	($this->config['success']) ? 1 : 0; //0 or empty: All test payments will be successful; 1: All test payments will fail; 2: 80% of test payments will be successful, 20% of test payments will fail.
		}
		
		$data['HASH']					=	$this->_getHash($data);
		
        $url = 'https://merchant.wmtransfer.com/lmi/payment.asp';
		return $this->_generateForm($url, $data);
	}

    public function processTransaction($api_admin, $id, $data)
    {
        if(APPLICATION_ENV != 'testing' && !$this->isIpnValid($data)) {
            throw new Exception('WebMoney IPN is not valid');
        }
        
        $ipn = $data['post'];

        //$tx = $api_admin->invoice_transaction_get(array('id'=>$id));
        $invoice = $api_admin->invoice_get(array('id'=>$ipn['INVOICE_ID']));
        $client_id = $invoice['client']['id'];

        $currency = $this->getCurrency($ipn['LMI_PAYER_PURSE']);
        $tx_data = array(
            'id'            =>  $id,
            'invoice_id'    =>  $ipn['INVOICE_ID'],
            'txn_status'    =>  'complete',
            'txn_id'        =>  $ipn['LMI_SYS_TRANS_NO'],
            'amount'        =>  $ipn['LMI_PAYMENT_AMOUNT'],
            'currency'      =>  $currency,
            'type'          =>  'payment',
            'status'        =>  'complete',
        );
        $api_admin->invoice_transaction_update($tx_data);
        
        $bd = array(
            'id'            =>  $client_id,
            'amount'        =>  $ipn['LMI_PAYMENT_AMOUNT'],
            'description'   =>  'WebMoney sale: '.$ipn['LMI_SYS_TRANS_NO'],
            'type'          =>  'WebMoney',
            'rel_id'        =>  $ipn['LMI_SYS_TRANS_NO'],
        );
        $api_admin->client_balance_add_funds($bd);
        $api_admin->invoice_batch_pay_with_credits(array('client_id'=>$client_id));
    }

	private function isIpnValid($data)
    {
        $ipn = $data['post'];
        
		if (!$this->_verifyNotification($ipn)) {
			return false;
		}
		
		if (!$this->verifyRequest($ipn)) {
			return false;
		}
		
		return true;
	}
	
	/**
	 * 
	 * Generates hash
	 * @param array $data
	 * @return string
	 */
	private function _getHash($data) {
		$string = $data['LMI_PAYEE_PURSE'] . $data['LMI_PAYMENT_AMOUNT'] . $data['LMI_PAYMENT_NO'] . $data['INVOICE_ID'];
		if (isset($data['LMI_MODE']) && $data['LMI_MODE'] == 1) {
			$string .= 'test';
		}
		return MD5($string);
	}
	
	/**
	 * 
	 * Verifies request, echos result and stops execution
	 * @param array $data
	 * @return boolean
	 */
	private function verifyRequest($data) {
		if (isset($data['HASH']) && $data['HASH'] == $this->_getHash($data)) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * 
	 * Returns LMI hash
	 * @param array $data
	 * @see https://wiki.wmtransfer.com/wiki/show/Web_Merchant_Interface#validation
	 * @return string
	 */
	private function _getLmiHash($data) {
		$string = '';
		
		if (isset($data['LMI_PAYEE_PURSE'])) {
			$string = $data['LMI_PAYEE_PURSE'];
		}
		
		if (isset($data['LMI_PAYMENT_AMOUNT'])) {
			$string .= $data['LMI_PAYMENT_AMOUNT'];
		}
		
		if (isset($data['LMI_PAYMENT_NO'])) {
			$string .= $data['LMI_PAYMENT_NO'];
		}
		
		if (isset($data['LMI_MODE'])) {
			$string .= $data['LMI_MODE'];
		}
		
		if (isset($data['LMI_SYS_INVS_NO'])) {
			$string .= $data['LMI_SYS_INVS_NO'];
		}
		
		if (isset($data['LMI_SYS_TRANS_NO'])) {
			$string .= $data['LMI_SYS_TRANS_NO'];
		}
		
		if (isset($data['LMI_SYS_TRANS_DATE'])) {
			$string .= $data['LMI_SYS_TRANS_DATE'];
		}
		
		$string .= $this->config['secretWord'];
		
		if (isset($data['LMI_PAYER_PURSE'])) {
			$string .= $data['LMI_PAYER_PURSE'];
		}
		
		if (isset($data['LMI_PAYER_WM'])) {
			$string .= $data['LMI_PAYER_WM'];
		}
		
		return strtoupper(MD5($string));
	}
	
	/**
	 * returns transaction type
	 * @param array $request
	 * @return string
	 */
	private function getRequestType($request) {
		if (isset($request['LMI_PREREQUEST']) && $request['LMI_PREREQUEST'] == 1) {
			return self::REQUEST_TYPE_PREREQUEST;
		} else if (isset($request['act']) && ($request['act'] == 'success' || $request['act'] == 'fail')) {
			return self::REQUEST_TYPE_CONFIRMATION;
		}
		
		return self::REQUEST_TYPE_NOTIFICATION;
	}
	
	/**
	 * Gets currency code from purse
	 * @param string $purse
	 * @return string|boolean
	 */
	private function getCurrency($purse) {
		$firstLetter = substr($purse, 0, 1);
		$currencies = $this->getCurrencies();
		
		$currency = array_search($firstLetter, $currencies);
		if ($currency === false) {
			return false;
		}
		
		return $currency;
	}
	
	/**
	 * Checks if notification is valid
	 * @param array $data
	 * @return boolean
	 */
	private function _verifyNotification($data) {
		if (isset($data['LMI_HASH'])) {
			if($data['LMI_HASH'] == $this->_getLmiHash($data)) {
				return true;
			}
		}
		
		return false;
	}
    
	private function getCurrencies() {
		return array(
			'USD'	=>	self::USD,
			'RUB'	=>	self::RUB,
			'EUR'	=>	self::EUR,
			'UAH'	=>	self::UAH,
			'BYR'	=>	self::BYR,
		);
	}
    
    private function _generateForm($url, $data, $method = 'post')
    {
        $form  = '';
        $form .= '<form name="payment_form" action="'.$url.'" method="'.$method.'">' . PHP_EOL;
        foreach($data as $key => $value) {
            $form .= sprintf('<input type="hidden" name="%s" value="%s" />', $key, $value) . PHP_EOL;
        }
        $form .=  '<input class="bb-button bb-button-submit" type="submit" value="Please click here to continue if this page does not redirect automatically in 5 seconds" id="payment_button"/>'. PHP_EOL;
        $form .=  '</form>' . PHP_EOL . PHP_EOL;

        if(isset($this->config['auto_redirect']) && $this->config['auto_redirect']) {
            $form .=  "<script type='text/javascript'>$(document).ready(function(){    document.getElementById('payment_button').style.display = 'none';    document.forms['payment_form'].submit();});</script>";
        }

        return $form;
    }
}