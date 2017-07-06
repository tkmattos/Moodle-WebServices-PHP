<?php

include_once '../class/webServiceMoodle.php'; // include class webServiceMoodle
$webserviceType = 'course'; // type webservice, see file config.php 
$methodName = 'core_enrol_get_enrolled_users'; // service method, see file config.php 

$param = array('courseid' => '7'); // number seven is a any variable. Indicates the course id for search

$obj = new webServiceMoodle($methodName, $webserviceType); // instance a object 
$obj->callWebService($param); // call o method 
 
 
 

