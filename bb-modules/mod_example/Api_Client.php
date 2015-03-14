<?php
/**
 * Example BoxBilling module
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
 * All public methods in this class are exposed to client using API.
 * Always think what kind of information you are exposing. 
 */
class Box_Mod_Example_Api_Client extends Api_Abstract
{
    /**
     * From client API you can call any other module API
     * 
     * This method will collect data from all APIs and merge
     * into one result.
     * 
     * Be careful not to expose sensitive data from Admin API.
     */
    public function get_info($data)
    {
        $api_guest = $this->getApiGuest();
        $api_client = $this->getApiClient();
        $api_admin = $this->getApiAdmin();

        // call custom event hook. All active modules will be notified
        $api_admin->hook_call(array('event'=>'onAfterClientCalledExampleModule', 'params'=>array('key'=>'value')));
        
        // Log message to history
        $api_admin->activity_log(array('m'=>'Use activity module to log messages to history'));
        
        return array(
            'version'   =>  $api_guest->system_version(),
            'profile'   =>  $api_client->client_get(),
            'messages'   =>  $api_admin->system_messages(),
        );
    }
}