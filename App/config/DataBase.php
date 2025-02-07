<?php 

namespace App\Config;
use PDO;
use PDOException;

class Database
{
    private $localHost = 'localhost'; 
    private $name = 'postgres'; 
    private $password = '37533753'; 
    private $dbname = 'udemy';
    private $connect;

    private static $instance = null;

    private function __construct()
    {
        try {
            $dsn = "pgsql:host={$this->localHost};dbname={$this->dbname}";
            $this->connect = new PDO($dsn, $this->name, $this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Connexion réussie à PostgreSQL';
        } catch (PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connect;
    }
}
