<?php

use Fgavi\TestPhpSisma\config\Database;
use Fgavi\TestPhpSisma\controllers\TaskController;
use Fgavi\TestPhpSisma\models\Task;
use Fgavi\TestPhpSisma\service\TaskService;

require __DIR__ . "/../bootstrap/Container.php";
//require __DIR__ . "/../src/Router.php";

$container = new Container();

$container->bind('db', function () {
    return new Database();
});

$container->bind('taskModel', function ($container) {
    return new Task($container->get('db'));
});

$container->bind('taskService', function ($container) {
    return new TaskService($container->get('taskModel'));
});

$container->bind('taskController', function ($container) {
    return new TaskController($container->get('taskService'));
});
