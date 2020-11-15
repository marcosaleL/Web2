<?php

class PadreModel{

    public $db;

    public function __construct() {
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'mi_ranchito'; //db_covid o db_huellas

        // 1. abro la conexión con MySQL 
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);            
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exception $e) {
            var_dump($e);
        }
    }

}