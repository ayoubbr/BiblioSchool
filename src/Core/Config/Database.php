<?php

namespace MyApp\Core\Config;

use PDO;
use PDOException;

require_once 'C:\wamp64\www\BiblioSchool\BiblioSchool-repo\vendor\autoload.php';

class Database
{
    private $host = "localhost";
    private $db_name = "bibiloSchool";
    private $username = "root";
    private $password = "";

    public $pdo;

    public function __construct()
    {
        $this->pdo = null;
        try {

            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {

            echo "Connection error: " . $exception->getMessage();
        }

        return $this->pdo;
    }
}
