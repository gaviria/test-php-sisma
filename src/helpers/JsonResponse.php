<?php

namespace Fgavi\TestPhpSisma\helpers;

use Exception;

class JsonResponse
{
    public static function send($data)
    {
        try {
            header("Access-Control-Allow-Origin: *");
            header("Content-Type: application/json; charset=UTF-8");
            //var_dump(json_encode($data));
            return json_encode($data);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
