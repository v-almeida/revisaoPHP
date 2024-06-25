<?php

class Database {
    private $driver;
    private $host;
    private $dbname;
    private $username;

    private $con;

    function ___construct() {
        $this->driver = "mysql";
        $this->dbaname = "test";
        $this->username = "root";
    }

    function getConexao(){
        try {
            $this->con = new PDO{
                "$this->driver: host=$this->host; dbname=$this->dbanme", 
                $this->username
            };

            $this->con->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_WARNING);
        
            return $this->con;
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
}