<?php

namespace Fgavi\TestPhpSisma\config;

use PDO;
use PDOException;

class Database
{
    private $host = 'localhost'; // Cambiar al host de la base de datos
    private $db = 'task_app';    // Cambiar al nombre de la base de datos
    private $user = 'root';  // Cambiar al usuario de la base de datos
    private $password = ''; // Cambiar a la contraseña de la base de datos
    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            die();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
