<?php

namespace Database\Driver;

use Database\Db;
use Exception;
use PDO;

class mysql extends Db
{

    protected $conn;

    public function connect($servidor, $banco,$porta, $usuario, $senha)
    {
        try {

            if (!is_object($this->conn)) {
                $this->conn = new PDO("mysql:host=localhost" . $servidor . ";port=3306" . $porta. ";dbname=Fotolog " . $banco . " ;user=root " . $usuario . " ;password=aq1sw2DE# " . $senha);
            }

            return $this->conn;
            
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";

            var_dump( "mysql:host=localhost" . $servidor . ";port=3306;dbname=Fotolog" . $banco . " ;user=root " . $usuario . " ;password=aq1sw2DE#" . $senha); exit;
            
        }
    }

    public function getConnect()
    {
        return $this->conn;
    }
}