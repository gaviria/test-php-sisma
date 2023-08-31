<?php

namespace Fgavi\TestPhpSisma\models;

use Fgavi\TestPhpSisma\config\Database;
use PDO;

class Task
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db->getConnection();
    }

    public function getAllTasks()
    {
        $stmt = $this->db->query("SELECT * FROM tasks");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTaskById($taskId)
    {
        $stmt = $this->db->prepare("SELECT * FROM tasks WHERE id = :id");
        $stmt->bindValue(':id', $taskId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insertTask($task, $done)
    {
        $stmt = $this->db->prepare("INSERT INTO tasks (tarea, completado) VALUES (:task, :done)");
        $stmt->bindValue(':task', $task, PDO::PARAM_STR);
        $stmt->bindValue(':done', $done, PDO::PARAM_BOOL);
        return $stmt->execute();
    }

    public function updateTask($taskId, $newTask, $done)
    {
        $stmt = $this->db->prepare("UPDATE tasks SET tarea = :task, completado = :done WHERE id = :id");
        $stmt->bindValue(':id', $taskId, PDO::PARAM_INT);
        $stmt->bindValue(':task', $newTask, PDO::PARAM_STR);
        $stmt->bindValue(':done', $done, PDO::PARAM_BOOL);
        return $stmt->execute();
    }

    public function deleteTask($taskId)
    {
        $stmt = $this->db->prepare("DELETE FROM tasks WHERE id = :id");
        $stmt->bindValue(':id', $taskId, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
