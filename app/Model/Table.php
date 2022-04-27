<?php

namespace app\Model;

use Database\Connection;
use Database\Driver\mysql;

class Table
{

    #objeto de conexao com banco
    private $conn;

    public function __construct()
    {
        $conn = new Connection(HOST, BANCO, PORTA, USER, PASSWORD);
        $this->setConexao($conn->connect(new mysql()));
    }

    public function getConexao()
    {
        return $this->conn;
    }

    public function setConexao($conn)
    {
        return $this->conn = $conn;
    }
}
