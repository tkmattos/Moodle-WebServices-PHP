<?php

include_once '../class/webServiceMoodle.php';
$methodName = 'core_user_create_users';
$webserviceType = 'users';


$user1 = new stdClass();
$user1->username = 'user_'.time();
$user1->password = 'testpasswordsasa1';
$user1->firstname = 'testfirstnamesasasa1';
$user1->lastname = 'testlastnameasasas1';
$user1->email = 'user_'.time().'@moodle.com';
$user1->auth = 'manual';
$user1->idnumber = 'user_'.time();
$user1->lang = 'en';
//$user1->theme = 'standard';
$user1->timezone = '-12.5';
$user1->mailformat = 0;
$user1->description = 'Hello World!';
$user1->city = 'testcity1';
$user1->country = 'au';
$preferencename1 = 'preference1';
$preferencename2 = 'preference2';
$user1->preferences = array(
    array('type' => $preferencename1, 'value' => 'preferencevalue1'),
    array('type' => $preferencename2, 'value' => 'preferencevalue2'));
$users = array($user1);
$params = array('users' => $users);


$obj = new webServiceMoodle($methodName, $webserviceType);

$obj->callWebService($params);

