<?php

include_once '../class/webServiceMoodle.php';
$webserviceType = 'courses';
$methodName = 'core_course_create_categories  ';


$category = new stdClass();
$category->name = 'Example_Category';
$category->parent = 0; // id for subcategory
$category->description = '<p>text</p>';
$category->descriptionformat = 1;

$modules = array($category);
$params = array('categories' => $modules);

$obj = new webServiceMoodle($methodName, $webserviceType);
$obj->callWebService($params);
