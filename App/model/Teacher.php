<?php 

namespace App\Model;
use App\Config\Database;

class Teacher
{
    public $connect;

    public function __construct()
    {
        $this->connect = Database::getInstance()->getConnection();
    }
}