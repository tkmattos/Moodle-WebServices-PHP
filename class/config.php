<?php

class config {

    public $token, $domainname, $restformat;

    public function __construct() {
        $this->domainname = 'YOUR_DOMAIN.COM'; // alter for your domain
        $this->restformat = 'json'; // format(xml/json...)( I'm using json)
    }

    public function setToken($tipoWebservice) {

        // through the defined service type, I choose which token will be used.
        // separated the services in users and courses (the two I use at the moment), but can be all services in a single token.
        // for organization and maintenance issues, each new functionality group I will create a new token and a new user for this webservice

        switch ($tipoWebservice) {
            case 'courses':
                $this->token = 'YOUR_TOKEN_FOR_COURSE_WEBSERVICE';
                break;
            case 'users':
                $this->token = 'YOUR_TOKEN_FOR_USER_WEBSERVICE';
                break;
        }
        return $this->token;
    }

} 
