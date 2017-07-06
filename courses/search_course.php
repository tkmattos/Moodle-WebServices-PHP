<?php

include_once '../class/webServiceMoodle.php';
$webserviceType = 'courses';
$methodName = 'core_course_get_courses';

$courseids = array(10); // array with id course for search
$params = array( 'options' => array('idnumber' => $courseids ) );

$obj = new webServiceMoodle($methodName, $webserviceType);
$obj->callWebService($params);
