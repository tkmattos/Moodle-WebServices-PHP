<?php

include_once '../class/webServiceMoodle.php';
$webserviceType = 'courses';
$methodName = 'core_course_get_categories ';

$params = array('criteria' => array(array('key' => 'id', 'value' => '8')));

$obj = new webServiceMoodle($methodName, $webserviceType);
$obj->callWebService($params);
