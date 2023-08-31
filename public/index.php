<?php

use Fgavi\TestPhpSisma\config\Database;
use Fgavi\TestPhpSisma\controllers\TaskController;
use Fgavi\TestPhpSisma\models\Task;
use Fgavi\TestPhpSisma\service\TaskService;

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/../bootstrap/Bootstrap.php";
require __DIR__ . "/../src/Router.php";
require __DIR__ . "/../src/routes/routes.php";
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');
