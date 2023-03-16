<?php

namespace Config;

use PDO;

class Conexao {

    private $host  = "mysql:dbname=orcamento;host=localhost";
    private $user  = "root";
    private $pass = "";

    public static $conexaoSingleton = null;

    public function __construct()
    {
        if(!self::$conexaoSingleton){
            self::$conexaoSingleton = new PDO($this->host,
                                              $this->user,
                                              $this->pass);
        }
    }

    public function exec(){
        return self::$conexaoSingleton;
    }
}