<?php

include_once '../class/webServiceMoodle.php';
$webserviceType = 'users';

$methodName = 'core_user_get_users';
$params = array('criteria' => array(0 => array('key' => 'id', 'value' => 49)));

$obj = new webServiceMoodle($methodName, $webserviceType);
$obj->callWebService($params);


