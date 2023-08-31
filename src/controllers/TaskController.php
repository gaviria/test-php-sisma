<?php

namespace Fgavi\TestPhpSisma\controllers;

use Fgavi\TestPhpSisma\helpers\JsonResponse;
use Fgavi\TestPhpSisma\service\TaskService;

class TaskController
{
    private $service;

    public function __construct(TaskService $service)
    {
        $this->service = $service;
    }

    public function getAllTasks()
    {
        echo $this->service->getAllTasks();
    }

    public function getTaskById($taskId)
    {
        echo $this->service->getTaskById($taskId);
    }

    public function insertTask()
    {
        $requestData = json_decode(file_get_contents('php://input'), true);

        //var_dump($requestData);

        if (!$requestData) {
            JsonResponse::send(['error' => 'Invalid JSON data'], 400);
            return;
        }

        $task = $requestData['tarea'];
        $done = $requestData['completado'];

        echo $this->service->insertTask($task, $done);
    }

    public function updateTask($taskId)
    {
        $requestData = json_decode(file_get_contents('php://input'), true);

        //var_dump($requestData);

        if (!$requestData) {
            JsonResponse::send(['error' => 'Invalid JSON data'], 400);
            return;
        }

        $newTask = $requestData['tarea'];
        $done = $requestData['completado'];

        echo $this->service->updateTask($taskId, $newTask, $done);
    }

    public function deleteTask($taskId)
    {
        echo $this->service->deleteTask($taskId);
    }
}
