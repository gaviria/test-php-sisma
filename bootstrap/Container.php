<?php

use Fgavi\TestPhpSisma\controllers\TaskController;
use Fgavi\TestPhpSisma\models\Task;
use Fgavi\TestPhpSisma\service\TaskService;

require __DIR__ . '/../vendor/autoload.php';

class Container
{
    private $bindings = [];

    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

    public function get($key)
    {
        if (array_key_exists($key, $this->bindings)) {
            $resolver = $this->bindings[$key];
            return $resolver($this);
        }

        throw new Exception("No se encontró una instancia registrada para $key");
    }
}
