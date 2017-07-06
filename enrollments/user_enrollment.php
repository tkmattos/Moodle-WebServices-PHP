<?php
include_once '../class/webServiceMoodle.php';
$webserviceType = 'course';
$methodName = 'core_course_create_courses';

$enrolment = new stdClass();
$enrolment->roleid = 5; //TODO - Provide the role id - 5 - student
$enrolment->courseid = 5; //the course id
$enrolment->userid = 10; //TODO - provide user id

$params = array('enrolments' => array($enrolment));

$obj = new webServiceMoodle($methodName, $webserviceType);
$obj->callWebService($params);
 