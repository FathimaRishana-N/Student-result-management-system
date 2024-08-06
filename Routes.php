<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/','Admin::home');
$routes->get('/register','Admin::register');
$routes->post('/admindata','Admin::admindata');
$routes->post('/adminlogin','Admin::adminlogin');
$routes->get('/Admin', 'Admin::dashboard');
$routes->get('/studentform', 'Admin::studentform');
$routes->get('/classform', 'Admin::classform');
$routes->post('/classdata', 'Admin::classdata');
$routes->post('/studentdata', 'Admin::studentdata');
$routes->get('/viewclass', 'Admin::viewclass');
$routes->get('/viewstudents', 'Admin::viewstudents');
$routes->get('/editstudent/(:num)', 'Admin::editstudent/$1');
$routes->post('/studentupdate/(:num)', 'Admin::studentupdate/$1');
$routes->get('/studentdelete/(:num)', 'Admin::deletestudent/$1');
$routes->get('/subjectadd', 'Admin::subjectadd');
$routes->post('/subjectdata', 'Admin::subjectdata');
$routes->get('/viewsubject', 'Admin::viewsubject');
$routes->get('/addmarks', 'Admin::addmarks');
$routes->post('/marksadding', 'Admin::marksadding');
$routes->get('/viewmarks', 'Admin::viewmarks');
$routes->get('/deletesubject/(:num)', 'Admin::deletesubject/$1');

$routes->post('/studentlogin','Admin::studentlogin');




















