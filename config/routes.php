<?php

// config/routes.php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use App\Controller\StudentController;
use App\Controller\HomePageController;

$routes = new RouteCollection();
//main page
$routes->add('home', new Route('/', [
    '_controller' => [HomePageController::class, 'index']
]));

$routes->add('student_list', new Route('/list', array(
    '_controller' => [StudentController::class, 'list']
)));
$routes->add('main', new Route('/student', [
    '_controller' => [StudentController::class, 'index']
]));


return $routes;
