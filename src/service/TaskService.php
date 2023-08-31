<?php

namespace Fgavi\TestPhpSisma\service;

use Fgavi\TestPhpSisma\helpers\JsonResponse;
use Fgavi\TestPhpSisma\models\Task;

class TaskService
{
    private $model;

    public function __construct(Task $model)
    {
        $this->model = $model;
    }

    public function getAllTasks()
    {
        return JsonResponse::send($this->model->getAllTasks());
    }

    public function insertTask($task, $done)
    {
        return JsonResponse::send($this->model->insertTask($task, $done));
    }

    public function getTaskById($taskId)
    {
        return JsonResponse::send($this->model->getTaskById($taskId));
    }

    public function updateTask($taskId, $newTask, $done)
    {
        return JsonResponse::send($this->model->updateTask($taskId, $newTask, $done));
    }

    public function deleteTask($taskId)
    {
        return JsonResponse::send($this->model->deleteTask($taskId));
    }
}
