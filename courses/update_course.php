<?php
include_once '../class/webServiceMoodle.php';
$webserviceType = 'courses';
$methodName = 'core_course_update_courses';

$param = array('id' => '154', 'fullname'=>'NEW NAME COURSE', 'idnumber' => time()); // id is param for search update, next elements are modified
$params['courses'] = array($param);

$obj = new webServiceMoodle($methodName, $webserviceType);
$obj->callWebService($params);
