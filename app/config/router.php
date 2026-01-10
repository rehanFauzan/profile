<?php

$router = $di->getRouter();

// Define your routes here
use Phalcon\Mvc\Router;

$router = new Router();

// buat route untuk halaman about
$router->add('/about', [
    'controller' => 'about',
    'action' => 'index'
]);

$router->add('/resume', [
    'controller' => 'resume',
    'action' => 'index'
]);

$router->add('/services', [
    'controller' => 'services',
    'action' => 'index'
]);

$router->add('/portfolio', [
    'controller' => 'portfolio',
    'action' => 'index'
]);

$router->add('/contact', [
    'controller' => 'contact',
    'action' => 'index'
]);

$router->handle($_SERVER['REQUEST_URI']);
