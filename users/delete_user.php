<?php

include_once '../class/webServiceMoodle.php';
$webserviceType = 'users';
$methodName = 'core_user_delete_users';
 
$userids = array(594,486);
$params = array( 'userids' => $userids );


$obj = new webServiceMoodle($methodName, $webserviceType);
$obj->callWebService($params);
