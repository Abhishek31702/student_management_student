<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home page route
$routes->get('/', 'Home::index'); 

// Routes for Students
$routes->get('/students', 'Student::index'); // View list of students
$routes->get('/students/create', 'Student::create'); // Show form to create a student
$routes->post('/students', 'Student::store'); // Handle creating a student
$routes->get('/students/edit/(:num)', 'Student::edit/$1'); // Show form to edit a student
$routes->post('/students/update/(:num)', 'Student::update/$1'); // Handle updating a student
$routes->get('/students/delete/(:num)', 'Student::delete/$1'); // Delete a student

// Routes for Login
$routes->get('/login', 'LoginController::index'); // Login page
$routes->post('/login/verify', 'LoginController::verify'); // Login verification

// Student Insert and Add Routes
$routes->get('/student', 'Student::index'); // Route for viewing students
$routes->get('/student/add', 'Student::add'); // Route for adding students
$routes->post('/student/insert', 'Student::insert'); // Route for inserting a student
