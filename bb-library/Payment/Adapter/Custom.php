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
class Payment_Adapter_Custom
{
    private $config = array();

    public function __construct($config)
    {
        $this->config = $config;
    }

    public static function getConfig()
    {
        return array(
            'supports_one_time_payments'   =>  true,
            'supports_subscriptions'       =>  true,
            'description'     =>  'Custom payment gateway allows you to give instructions how can your client pay invoice. All system, client, order and invoice details can be printed. HTML and JavaScript code is supported.',
            'form'  => array(
                'single' => array('textarea', array(
                            'label' => 'Enter your text for single payment information',
                    ),
                ),
                'recurrent' => array('textarea', array(
                            'label' => 'Enter your text for subscription information',
                    ),
                ),
            ),
        );
    }

    /**
     * Generate payment text
     * 
     * @param Api_Admin $api_admin
     * @param int $invoice_id
     * @param bool $subscription
     * 
     * @since BoxBilling v2.9.15
     * 
     * @return string - html form with auto submit javascript
     */
    public function getHtml($api_admin, $invoice_id, $subscription)
    {
        $invoice = $api_admin->invoice_get(array('id'=>$invoice_id));
        
        $vars = array(
            'client'    =>  $invoice['buyer'],
            'invoice'   =>  $invoice,
            '_tpl'      =>  ($subscription) ? $this->config['recurrent'] : $this->config['single'],
        );
        
        return $api_admin->system_string_render($vars);
    }

    /**
     * Process transaction received from payment gateway
     * 
     * @since BoxBilling v2.9.15
     * 
     * @param Api_Admin $api_admin
     * @param int $id - transaction id to process
     * @param array $ipn - post, get, server, http_raw_post_data
     * @param int $gateway_id - payment gateway id on BoxBilling
     * 
     * @return mixed
     */
    public function processTransaction($api_admin, $id, $data, $gateway_id)
    {
        //$tx = $api_admin->invoice_transaction_get(array('id'=>$id));
    }
}