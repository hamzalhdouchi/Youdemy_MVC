<?php 

namespace App\Model;
use App\Config\Database;
class Statistique
{
    public $connect;

    public function __construct()
    {
        $this->connect = Database::getInstance()->getConnection();
    }

}