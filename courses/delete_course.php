<?php

include_once '../class/webServiceMoodle.php';
$webserviceType = 'courses';
$methodName = 'core_course_delete_courses';

$course_ids = array('307','308'); // array with ids course or only id

foreach ($course_ids as $id) { // foreach for delete course
    $params = array('courseids' => array($id));

    $obj = new webServiceMoodle($methodName, $webserviceType);
    $obj->callWebService($params);
}
 
