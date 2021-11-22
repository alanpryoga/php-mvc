<?php

use Bramus\Router\Router as RouterEngine;

/**
 * PHP MVC
 * 
 * @author Ade Syahlan Prayoga <imalanpryoga@gmail.com>
 */

// Require composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Create router engine instance
$router = new RouterEngine();

// Define routes
$router->setNamespace('\App\Controllers');
require __DIR__ . '/../config/routes.php';

// Run router engine
$router->run();