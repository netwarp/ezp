<?php

$router = $di->getRouter();

// Define your routes here
$router->addGet('/', 'Front::index');

$router->addGet('/watch/{id}', 'Front::watch');

$router->addGet('/tag/{tag}', 'Front::tag');

$router->handle($_SERVER['REQUEST_URI']);
