<?php
/**
 * BoxBilling Automation for ISPConfig 3
 *
 * This source file is additional script for Boxbilling to
 * integrate automated create client and website for ISPConfig 3
 * It is also available through the world-wide-web at this URL:
 * https://bits.co.id/boxbilling-auto-ispconfig-3/
 *
 * @copyright Copyright (c) 2013-2015 Banten IT Solutions (https://bits.co.id)
 * @license   https://bits.co.id/LICENSE.txt
 * @version   1.0.1
 */
class Server_Manager_Ispconfig3 extends Server_Manager
{
    private $_session = null;
    private $_c = null;

    // Check Requirement This Script
    public function init()
    {
        if (!extension_loaded('soap')) {
            throw new Server_Exception('PHP Soap extension required for IspConfig Server Manager');
        }

        if (!extension_loaded('curl')) {
            throw new Server_Exception('PHP cURL extension is not enabled');
        }
    }

    public function __destruct()
    {
        if ($this->_c instanceof SoapClient && $this->_session) {
            $this->_request('logout');
            unset($this->_c, $this->_session);
        }
    }

    public static function getForm()
    {
        return array(
            'label'     =>  'ISPConfig 3', // Boxbilling Label Server Manager
        );
    }

    public function getLoginUrl()
    {
        $host     = $this->_config['host'];
        return 'https://'.$host.':7777'; // Change to your ISPConfig 3 Port
    }

    public function getResellerLoginUrl()
    {
        return $this->getLoginUrl();
    }

    // Check API Connection
    public function testConnection()
    {
        $this->_load();
        return true;
    }

    public function synchronizeAccount(Server_Account $a)
    {
        $this->getLog()->info('Synchronizing account with server '.$a->getUsername());
        return $a;
    }

    // Create Client Account
    public function createAccount(Server_Account $a)
    {
        $ci = $this->getClient($a);
        try {
            if (!$ci) {
                if ($a->getReseller()) {
                    $id = $this->createClient($a, 1);
                } else {
                    $id = $this->createClient($a, 0);
                }
            } else {
                $id = $ci['client_id'];
            }

            $client = $a->getClient();
            $client->setId($id);

            // Create Main Website This Account
            $this->createSite($a);
            // $this->dnsCreateZone($a); // Enable if create auto DNS Template
        } catch (Exception $e) {
            if (strpos(strtolower($e->getMessage()), strtolower('domain_error_unique')) === false) {
                throw new Server_Exception($e->getMessage());
            } else {
                return true;
            }
        }
        return true;
    }

    // Suspend Account
    public function suspendAccount(Server_Account $a)
    {
        $params = array(
            'primary_id' => $this->getSiteId($a)
        );
        $result = $this->_request('sites_web_domain_inactive', $params);
        return (bool) $result;
    }

    // Unsuspend Account
    public function unsuspendAccount(Server_Account $a)
    {
        $params = array(
            'primary_id' => $this->getSiteId($a)
        );
        $result = $this->_request('sites_web_domain_active', $params);
        return (bool) $result;
    }

    // Cancel Create Account
    public function cancelAccount(Server_Account $a)
    {
        $ci = $this->getClient($a);
        $params = array(
            'client_id' => $ci['client_id']
        );
        $result = $this->_request('client_delete', $params);
        $pa['origin'] = $a->getDomain().'.';
        $info = $this->_request('test', $pa);
        $this->_request('dns_zone_delete', $info);
        return (bool) $result;
    }

    // Change Account Information
    public function changeAccountPackage(Server_Account $a, Server_Package $p)
    {
        $client     = $a->getClient();
        $ci = $this->getClient($a);
        $params = array(
            'reseller_id' => 1,
            'client_id' => $ci['client_id'],
            'server_id'     => $this->getServerId(),
            'company_name'  => $client->getCompany(),
            'contact_name'  => $client->getFullName(),
            'username'      => $a->getUsername(),
            'password'      => $a->getPassword(),
            'language'      => 'id', // Force to Indonesian Language
            'usertheme'     => 'flatblue', // Force to Flatblue Theme
            'street'        => $client->getStreet(),
            'zip'           => $client->getZip(),
            'city'          => $client->getCity(),
            'state'         => $client->getState(),
            'country'       => $client->getCountry(),
            'telephone'     => $client->getTelephone(),
            'mobile'        => $client->getTelephone(),
            'fax'           => $client->getTelephone(),
            'email'         => $a->getEmail(),
            'internet'      => 'https://bits.co.id', // Force to my sites
            'icq'           => '',
            'notes'         => $a->getNote(),
        );
        $result = $this->_request('client_update', $params);
        return (bool) $result;
    }

    // Change Password
    public function changeAccountPassword(Server_Account $a, $new)
    {
        $ci = $this->getClient($a);
        $params = array(
            'client_id' => $ci['client_id'],
            'password' => $new
        );
        $result = $this->_request('client_change_password', $params);
        return (bool) $result;
    }

    // Change Account Username
    public function changeAccountUsername(Server_Account $a, $new)
    {
        // Add additional script to enable this feature
        throw new Server_Exception('Server manager does not support username changes');
    }

    // Change Main Domain
    public function changeAccountDomain(Server_Account $a, $new)
    {
        // Add additional script to enable this feature
        throw new Server_Exception('Server manager does not support domain changes');
    }

    // Change IP Server
    public function changeAccountIp(Server_Account $a, $new)
    {
        // Add additional script to enable this feature
        throw new Server_Exception('Server manager does not support ip changes');
    }

    // Create Main Website
    private function createSite(Server_Account &$a)
    {
        if ($this->isSiteCreated($a)) {
            return true;
        }
        $client     = $a->getClient();
        $package    = $a->getPackage();
        $server     = $this->getServerInfo();

        $site_params['client_id']       = $client->getId();
        $site_params['sys_userid']     = 1; // Force to the admin
        $site_params['sys_groupid']    = 1; // Force added by the admin
        $site_params['server_id']       = $this->getServerId();
        $site_params['ip_address']      = '128.199.122.79'; // Change to your Server IP
        $site_params['domain']          = $a->getDomain();
        $site_params['type']            = 'vhost';  // Force to vhost
        $site_params['vhost_type']      = 'name';   // Force to vhost
        $site_params['document_root']    = $server['website_path'];
        $site_params['system_user']     = 'web'.$client->getid();
        $site_params['system_group']    = 'client'.$client->getid();
        $site_params['hd_quota']        = $package->getQuota();
        $site_params['traffic_quota']   = $package->getBandwidth();

        // $site_params['cgi']       = 'y'; // Enable if support CGI
        // $site_params['ssi']       = 'y'; // Enable if support SSI
        // $site_params['suexec']       = 'y'; // Enable if support SUEXEC
        // $site_params['subdomain']       = 'www'; // Enable if auto create subdomain

        $site_params['errordocs']       = 1; // Enable Error Log
        $site_params['php']             = 'php-fpm'; // Enable PHP Handler such suphp, php-fpm, mod-php, fast-cgi

        // $site_params['ruby']       = 'y'; // Enable if support ruby
        // $site_params['python']       = 'y'; // Enable if support python
        // $site_params['perl']       = 'y'; // Enable if support perl
        // $site_params['ssl']       = 'y'; // Enable if support SSL

        $site_params['allow_override']  = 'All';
        $site_params['php_fpm_use_socket'] = 'y';
        $site_params['pm'] = 'dynamic';
        $site_params['pm_max_children'] ='10';
        $site_params['pm_start_servers'] ='2';
        $site_params['pm_min_spare_servers'] ='1';
        $site_params['pm_max_spare_servers'] ='5';
        $site_params['pm_process_idle_timeout'] ='30';
        $site_params['pm_max_requests'] ='30';
        $site_params['php_open_basedir'] = $server['php_open_basedir'];
        $site_params['added_by']          = 'admin';
        $site_params['active']          = 'y';

        $result = $this->_request('sites_web_domain_add', $site_params);
        return $result;
    }

    private function dnsCreateZone(Server_Account &$a)
    {
        $client     = $a->getClient();


        // ---- Setting up the DNS ZONE
        $dns_domain_params['server_id'] = $this->getServerId();
        $dns_domain_params['client_id'] = $client->getid();
        $dns_domain_params['origin']    = $a->getDomain().'.';
        $dns_domain_params['ns']      = $a->getNs1();
        $dns_domain_params['zone'] = $client->getid();
        $dns_domain_params['name'] = $a->getDomain().'.'; //adding a final dot
        $dns_domain_params['type'] = 'A';
        $dns_domain_params['data'] = $a->getIp();
        $dns_domain_params['mbox']      = 'mail.'.$a->getDomain().'.';//@todo
        $dns_domain_params['refresh']   = '7200';
        $dns_domain_params['retry']     = '540';
        $dns_domain_params['expire']    = '604800';
        $dns_domain_params['minimum']   = '86400';
        $dns_domain_params['ttl'] = '3600';
        $dns_domain_params['active'] = 'Y';
        $this->_request('dns_zone_add', $dns_domain_params);

/*
        $pa['origin'] = $a->getDomain().'.';
        $info = $this->_request('test', $pa);

        //Adding the DNS record A
        $dns_a_params['server_id'] = $this->getServerId();
        $dns_a_params['client_id'] = $client->getid();
        $dns_a_params['zone'] = $info;
        $dns_a_params['name'] = $a->getDomain().'.'; //adding a final dot
        $dns_a_params['type'] = 'A';
        $dns_a_params['data'] = $a->getIp();
        $dns_a_params['ttl'] = '3600';
        $dns_a_params['active'] = 'Y';

        $this->_request('dns_a_add', $dns_a_params);

        //Adding the DNS record A
        $dns_a_params['server_id'] = $this->getServerId();
        $dns_a_params['client_id'] = $client->getid();
        $dns_a_params['zone'] = $info;
        $dns_a_params['name'] = 'www'; //adding a final dot
        $dns_a_params['type'] = 'A';
        $dns_a_params['data'] = $a->getIp();
        $dns_a_params['ttl'] = '3600';
        $dns_a_params['active'] = 'Y';

        $this->_request('dns_a_add', $dns_a_params);

        //Adding the DNS record A
        $dns_a_params['server_id'] = $this->getServerId();
        $dns_a_params['client_id'] = $client->getid();
        $dns_a_params['zone'] = $info;
        $dns_a_params['name'] = 'mail'; //adding a final dot
        $dns_a_params['type'] = 'A';
        $dns_a_params['data'] = $a->getIp();
        $dns_a_params['ttl'] = '3600';
        $dns_a_params['active'] = 'Y';

        $this->_request('dns_a_add', $dns_a_params);

        //Adding the DNS record NS1
        $dns_ns_add = array(
            'server_id' => $this->getServerId(),
            'zone' => $info,
            'name' => $a->getDomain().'.',
            'type' => 'ns',
            'data' => $a->getNs1().'.',
            'aux' => '0',
            'ttl' => '86400',
            'active' => 'Y',
            'stamp' => 'CURRENT_TIMESTAMP',
            'serial' => '1',
            'client_id' => $client->getId(),
            );

        $this->_request('dns_ns_add', $dns_ns_add);

        //Adding the DNS record NS2
        $dns_ns_add = array(
            'server_id' => $this->getServerId(),
            'zone' => $info,
            'name' => $a->getDomain().'.',
            'type' => 'ns',
            'data' => $a->getNs2().'.',
            'aux' => '0',
            'ttl' => '3600',
            'active' => 'Y',
            'stamp' => 'CURRENT_TIMESTAMP',
            'serial' => '1',
            'client_id' => $client->getId(),
            );

        $this->_request('dns_ns_add', $dns_ns_add);
*/
/*
        $dns_a_params['server_id'] = $this->getServerId();
        $dns_a_params['client_id'] = $client->getid();
        $dns_a_params['origin'] = $a->getDomain();
        $dns_a_params['ns']   = $a->getNs1();
        $dns_a_params['zone'] = '90';
        $dns_a_params['name'] = $a->getDomain().'.'; //adding a final dot
        $dns_a_params['type'] = 'A';
        $dns_a_params['data'] = $a->getIp();
        $dns_a_params['mbox']       = 'mail.'.$a->getDomain().'.';//@todo
        $dns_a_params['refresh']    = '28800';
        $dns_a_params['retry']  = '7200';
        $dns_a_params['expire'] = '86400';
        $dns_a_params['minimum']    = '86400';
        $dns_a_params['ttl'] = '86400';
        $dns_a_params['active'] = 'Y';

        $this->_request('dns_zone_add', $dns_a_params);
*/


/*
        // ---- Setting up the mail domain
        $mail_domain_params['client_id']    = $client->getId();
        $mail_domain_params['server_id']    = $this->getServerId();
        $mail_domain_params['domain']       = $a->getDomain();
        $mail_domain_params['active']       = 'y';

        $this->_request('mail_domain_add', $mail_domain_params);

*/
        return true;
    }

    // Create Client Login ISPConfig 3
    private function createClient(Server_Account &$a, $type)
    {
        $client     = $a->getClient();
        $p          = $a->getPackage();
        $params = array(
            'client_id' => $client->getId(),
            'server_id' => $this->getServerId(),
            'company_name' => $client->getCompany(),
            'contact_name' => $client->getFullName(),
            'username' => $a->getUsername(),
            'password' => $a->getPassword(),
            'language'      => 'id', // Force to Indonesian Language
            'usertheme'     => 'flatblue', // Force to Flatblue Theme
            'street' => $client->getStreet(),
            'zip' => $client->getZip(),
            'city' => $client->getCity(),
            'state' => $client->getState(),
            'country' => 'ID', // Force to Indonesia
            'telephone' => $client->getTelephone(),
            'mobile' => $client->getTelephone(),
            'fax' => $client->getTelephone(),
            'email' => $client->getEmail(),
            'internet' => 'https://bits.co.id', // Force to my sites
            'icq' => '',
            'notes' =>$a->getNote(),

            'template_master' => '0',
            'template_additional' => '',

            'default_mailserver' => '1',
            'limit_maildomain' => $p->getMaxPop(),
            'limit_mailbox' => '-1',
            'limit_mailalias' => '-1',
            'limit_mailforward' => '-1',
            'limit_mailcatchall' => '-1',
            'limit_mailrouting' => '-1',
            'limit_mailfilter' => '-1',
            'limit_fetchmail' => '-1',
            'limit_mailquota' => '-1',
            'limit_spamfilter_wblist' => '-1',
            'limit_spamfilter_user' => '-1',
            'limit_spamfilter_policy' => '-1',

            'default_webserver' => '1',
            'limit_web_domain' => $p->getMaxDomains(),
            'limit_web_quota' => $p->getQuota(),
            'web_php_options' => "php-fpm", // Enable PHP Handler such suphp, php-fpm, mod-php, fast-cgi
            'limit_web_subdomain' => '-1',
            'limit_web_aliasdomain' => '-1',
            'limit_ftp_user' => $p->getMaxFtp(),
            'limit_shell_user' => '-1',
            'ssh_chroot' => 'no',
            'limit_aps' => '-1',

            'default_dnsserver' => '1',
            'limit_dns_zone' => '-1',
            'default_slave_dnsserver' => '1',
            'limit_dns_slave_zone' => '1',
            'limit_dns_record' => '-1',
            'default_dbserver' => '1',
            'limit_database' => $p->getMaxSql(),
            'limit_cron' => '0',
            'limit_cron_type' => '',
            'limit_cron_frequency' => '-1',
            'limit_traffic_quota' => $p->getBandwidth(),
            'limit_client' => $type,

            'added_by' => 'admin',
        );
        $action = 'client_add';
        $result = $this->_request($action, $params);
        return $result;
    }

    private function getClient(Server_Account $a)
    {
        $params['username'] = $a->getUsername();
        $result = $this->_request('client_get_by_username', $params);
        return $result;
    }

    private function isSiteCreated(Server_Account $a)
    {
        $sites = $this->getClientSites($a);
        if (is_array($sites)) {
            foreach ($sites as $key => $domain) {
                if ($a->getDomain() == $domain['domain']) {
                    $my_domain = $domain;
                    return true;
                }
            }
        }
        return false;
    }

    private function getClientSites(Server_Account $a)
    {
        $user_info = $this->getClient($a);
        $site_params['sys_userid']  = $user_info['userid'];
        $site_params['groups']      = $user_info['groups'];
        $site_info = $this->_request('client_get_sites_by_user', $site_params);
        return $site_info;
    }

    private function getSiteId(Server_Account $a)
    {
        $sites = $this->getClientSites($a);
        if (is_array($sites)) {
            foreach ($sites as $key => $domain) {
                if ($a->getDomain() == $domain['domain']) {
                    return $domain['domain_id'];
                }
            }
        }
        return false;
    }

    private function getSiteInfo(Server_Account $a)
    {
        $server_params['server_id']     = $this->getServerId();
        $server_params['section']       = $section;
        return $this->_request('server_get', $server_params);
    }

    private function getServerInfo($section = 'web')
    {
        $server_params['server_id']     = $this->getServerId();
        $server_params['section']       = $section;
        return $this->_request('server_get', $server_params);
    }

    private function getServerId()
    {
        return 1;
        // return $this->_config['server_id'];
    }

    private function _load()
    {
        $usessl   = $this->_config['secure'];
        $host     = $this->_config['host'];
        $username = $this->_config['username'];
        $password = $this->_config['password'];
        $host = ($usessl) ? 'https://'.$host : 'http://'.$host;

        $soap_location = $host.':7777/remote/index.php';
        $soap_uri = $host.':7777/remote/';

        if (!$this->_c instanceof SoapClient) {
            // Create the SOAP Client
            $this->_c = new SoapClient(null, array('location' => $soap_location,
                                                    'uri'      => $soap_uri,
                                                    'trace' => 1,
                                                    'exceptions' => 1));
        }

        // Login to the remote server
        if ($this->_session === null) {
            try {
                $this->_session = $this->_c->login($username, $password);
            } catch (Exception $e) {
                throw new Server_Exception($e->getMessage(), $e->getCode());
            }
        }

        if (!$this->_c instanceof SoapClient) {
            throw new Server_Exception('Could not load Soap client');
        }

        if (!$this->_session) {
            throw new Server_Exception('Could not retrieve session');
        }

        return $this;
    }

    private function _request($action, $params = array())
    {
        $this->getLog()->debug(sprintf('ISP Config 3 action "%s" called with params: "%s" ', $action, print_r($params, 1)));
        $this->_load();
        $soap_client = $this->_c;

        try {
            switch($action) {
                case 'client_add':
                    $reseller_id = 1;
                    $soap_result = $soap_client->client_add($this->_session, $reseller_id, $params);
                    break;
                case 'client_get':
                    $soap_result = $soap_client->client_get($this->_session, $params['client_id']);
                    break;
                case 'client_get_by_username':
                    $soap_result = $soap_client->client_get_by_username($this->_session, $params['username']);
                    break;
                case 'client_get_sites_by_user':
                    $soap_result = $soap_client->client_get_sites_by_user($this->_session, $params['sys_userid'], $params['groups']);
                    break;
                case 'client_delete':
                    $soap_result = $soap_client->client_delete($this->_session, $params['client_id']);
                    break;
                case 'client_update':
                    $soap_result = $soap_client->client_update($this->_session, $params['client_id'], $params['reseller_id'], $params);
                    break;
                case 'client_change_password':
                    $soap_result = $soap_client->client_change_password($this->_session, $params['client_id'], $params['password']);
                    break;
                case 'sites_cron_add':
                    $soap_result = $soap_client->sites_cron_add($this->_session, $reseller_id, $site);
                    break;
                case 'sites_web_domain_update':
                    $client_id      = $params['client_id']; // client id
                    $primary_id     = $params['primary_id']; // site id
                    $params['client_id'] = $params['primary_id'] = null;
                    $soap_result = $soap_client->sites_web_domain_update($this->_session, $client_id, $primary_id, $params);
                    break;
                case 'sites_web_domain_active':
                    $primary_id     = $params['primary_id']; // site id
                    $soap_result    = $soap_client->sites_web_domain_set_status($this->_session, $primary_id, 'active');
                    break;
                case 'sites_web_domain_inactive':
                    $primary_id     = $params['primary_id']; // site id
                    $soap_result  = $soap_client->sites_web_domain_set_status($this->_session, $primary_id, 'inactive');
                    break;
                case 'sites_web_domain_add':
                    $client_id = $params['client_id'];
                    $params['client_id'] = null;
                    $soap_result    = $soap_client->sites_web_domain_add($this->_session, $client_id, $params);
                    break;
                case 'sites_web_domain_update':
                    $client_id = $params['client_id'];
                    $params['client_id'] = null;
                    $soap_result    = $soap_client->sites_web_domain_update($this->_session, $client_id, $params);
                    break;
                case 'sites_web_subdomain_add':
                    $client_id = $params['client_id'];
                    $params['client_id'] = null;
                    $soap_result    = $soap_client->sites_web_subdomain_add($this->_session, $client_id, $params);
                    break;
                // Get domain info
                case 'sites_web_domain_get':
                    $soap_result    = $soap_client->sites_web_domain_get($this->_session, $params['primary_id']);
                    break;
                // Get server info
                case 'server_get':
                    $soap_result = $soap_client->server_get($this->_session, $params['server_id'], $params['section']);
                    break;
                // Adds a DNS zone
                case 'dns_zone_add':
                    $client_id      = $params['client_id']; // client id
                    $params['client_id'] = null;
                    $soap_result    = $soap_client->dns_zone_add($this->_session, $client_id, $params);
                    break;
                case 'dns_zone_get':
                    $soap_result    = $soap_client->dns_zone_get($this->_session, $client_id, $params);
                    break;
                case 'dns_zone_get_by_user':
                    $client_id      = $params['client_id']; // client id
                    $soap_result    = $soap_client->dns_zone_get_by_user($this->_session, $client_id, $params);
                    break;
                case 'dns_zone_update':
                    $client_id        = $params['client_id']; // client id
                    $primary_id     = $params['primary_id']; // client id
                    $params['client_id'] = null;
                    $params['primary_id'] = null;
                    $soap_result    = $soap_client->dns_zone_update($this->_session, $client_id, $primary_id, $params);
                    break;
                case 'dns_zone_inactive':
                    $primary_id     = $params['primary_id']; // client id
                    $soap_result    = $soap_client->dns_zone_set_status($this->_session, $primary_id, 'inactive');
                    break;
                case 'dns_zone_active':
                    $primary_id     = $params['primary_id']; // client id
                    $soap_result    = $soap_client->dns_zone_set_status($this->_session, $primary_id, 'active');
                    break;
                case 'dns_a_add':
                    $client_id      = $params['client_id']; // client id
                    $soap_result    = $soap_client->dns_a_add($this->_session, $client_id, $params);
                    break;
                case 'mail_domain_add':
                    $client_id      = $params['client_id']; // client id
                    $params['client_id'] = null;
                    $soap_result    = $soap_client->mail_domain_add($this->_session, $client_id, $params);
                    break;
                // Add an email domain
                case 'mail_domain_update':
                    $client_id      = $params['client_id']; // client id
                    $params['client_id'] = null;
                    $soap_result    = $soap_client->mail_domain_update($this->_session, $client_id, $params);
                    break;
                // Change domain status
                case 'mail_domain_active':
                    $primary_id         = $params['primary_id'];
                    $soap_result    = $soap_client->mail_domain_set_status($this->_session, $primary_id, 'active');
                    break;
                // Change domain status
                case 'mail_domain_inactive':
                    $primary_id         = $params['primary_id'];
                    $soap_result    = $soap_client->mail_domain_set_status($this->_session, $primary_id, 'inactive');
                    break;
                case 'mail_domain_get_by_domain':
                    $domain     = $params['domain'];
                    $soap_result    = $soap_client->mail_domain_get_by_domain($this->_session, $domain);
                    break;
                // Creates a mySQL database
                case 'sites_database_add':
                    $client_id      = $params['client_id']; // client id
                    $params['client_id'] = null;
                    $soap_result    = $soap_client->sites_database_add($this->_session, $client_id, $params);
                    break;
                case 'sites_database_get':
                    $client_id      = $params['client_id']; // client id
                    $params['client_id'] = null;
                    $soap_result    = $soap_client->sites_database_get($this->_session, $client_id, $params);
                    break;
                case 'sites_database_get_all_by_user':
                    $client_id      = $params['client_id']; // client id
                    $params['client_id'] = null;
                    $soap_result   = $soap_client->sites_database_get_all_by_user($this->_session, $client_id, $params);
                    break;
                case 'client_templates_get_all':
                    $soap_result    = $soap_client->client_templates_get_all($this->_session);
                    break;
                case 'test':
                    $soap_result    = $soap_client->dns_zone_get_id($this->_session, $params['origin']);
                    break;
                case 'dns_ns_add':
                    $soap_result    = $soap_client->dns_ns_add($this->_session, $params['client_id'], $params);
                    break;
                case 'dns_zone_delete':
                    $soap_result    = $soap_client->dns_zone_delete($this->_session, $params);
                    break;
                case 'logout':
                    $soap_result    = $soap_client->logout($this->_session);
                    break;

                default:
                    break;
            }
        } catch (SoapFault $e) {
            throw new Server_Exception($e->getMessage(), $e->getCode(), $e);
        }

        return $soap_result;
    }
}

