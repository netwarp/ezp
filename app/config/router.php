<?php

$router = $di->getRouter();

// Define your routes here
$router->addGet('/', 'Front::index');

$router->handle($_SERVER['REQUEST_URI']);
