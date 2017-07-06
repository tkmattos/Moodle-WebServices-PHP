<?php
include_once '../class/webServiceMoodle.php';
$webserviceType = 'courses';
$methodName = 'core_course_create_courses';


$curse = new stdClass();
$curse->fullname = 'Course Example'. mt_rand(100, 900); // concat for generate unique names
$curse->shortname = 'course_example_'.mt_rand(100, 900). time(); //concat for generate unique names. Is unique and required
$curse->idnumber = time(); // consecutive
$curse->visible = 0; //1 or 0
$curse->categoryid = 3; // id category. 

$modules = array($curse);

$params = array('courses' => $modules);

$obj = new webServiceMoodle($methodName, $webserviceType);
$obj->callWebService($params);
 

