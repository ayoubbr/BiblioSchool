<?php

class Database
{
    private $host = "localhost";
    private $db_name = "bibiloSchool";
    private $username = "root";
    private $password = "";

    public $connect;

    public function __construct()
    {
        $this->connect = null;

        try {
        
            $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            echo "Connection working.";
        } catch (PDOException $exception) {
        
            echo "Connection error: " . $exception->getMessage();
        
        }

        return $this->connect;

    }
}
