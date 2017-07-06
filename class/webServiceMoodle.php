<?php

require_once('curl.php');
require_once('config.php');

class webServiceMoodle extends config {

    public $curl;
    public $header;
    public $serverUrl;
    public $restFormat;

    public function __construct($methodName, $webserviceType) {
        parent::__construct();
        $config = new config();
        $token = $config->setToken($webserviceType);

        $this->header = header('Content-Type: text/plain'); // headers
        $this->serverUrl = $this->domainname . '/webservice/rest/server.php' . '?wstoken=' . $token . '&wsfunction=' . $methodName; // Url to call the service
        $this->restFormat = ($this->restformat == 'json') ? '&moodlewsrestformat=' . $this->restformat : ''; //change format, case not defined
        
    }

    public function callWebService($params) {
        $this->curl = new curl; // call curl.php
        
        $resp = $this->curl->post($this->serverUrl . $this->restFormat, $params); // post (serverUrl + Format + Params)
        $result = json_decode($resp); // decode json
        print_r($result); // print result, but not necessary, just to see the return
        if (($this->curl->error) && $this->curl->info['http_code'] != 200) { // error case, print
            echo '<h4 style="color:red">Error executing service</h4>';
            echo '<h5>Curl Info</h5>';
            var_dump($this->curl->info);
            echo '<h5>Curl Error</h5>';
            var_dump($this->curl->error);
        }
    }

}
