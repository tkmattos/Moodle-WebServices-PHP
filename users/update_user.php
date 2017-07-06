<?php

include_once '../class/webServiceMoodle.php';
$webserviceType = 'users';
$methodName = 'core_user_update_users';
 

$user = new stdClass();
$user->id = 554;
$user->username = time();
$user->idnumber = time();

$params = array('users' => array($user));

$obj = new webServiceMoodle($methodName, $webserviceType);
$obj->callWebService($params);
