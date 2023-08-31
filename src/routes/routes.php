<?php
$taskController = $container->get('taskController');
$router = new Router();

$router->addRoute('GET', '/', [$taskController, 'getAllTasks']);
$router->addRoute('GET', '/api/tasks', [$taskController, 'getAllTasks']);
$router->addRoute('GET', '/api/tasks/(\d+)', [$taskController, 'getTaskById']);
$router->addRoute('POST', '/api/tasks', [$taskController, 'insertTask']);
$router->addRoute('PUT', '/api/tasks/(\d+)', [$taskController, 'updateTask']);
$router->addRoute('DELETE', '/api/tasks/(\d+)', [$taskController, 'deleteTask']);

$router->dispatch();
