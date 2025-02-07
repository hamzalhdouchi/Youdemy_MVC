<?php 

namespace App\Model;
use App\Config\Database;
class UserAuth
{
    
    protected $id;
    protected $email;
    protected $password;
    protected $status;
    private $Action;
    protected $role;

    protected $name;
    protected $username;
    protected $image;
    protected $connect;

    public function __construct($id = null, $email = null, $password = null, $status = null, $Action = null, $name = null, $username = null, $image = null, $role = null)
    {
        $this->connect = Database::getInstance()->getConnection();
        $this->email = $email;
        $this->password = $password;
        $this->status = $status;
        $this->Action = $Action;
        $this->id = $id;
        $this->role = $role;
        $this->name = $name;
        $this->username = $username;
        $this->image = $image;
    }

    public function setEmail($email)
    {
        $this->email = htmlspecialchars($email);
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setAction($Action)
    {
        $this->Action = $Action;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getStatus(): mixed
    {
        return $this->status;
    }

    public function getAction()
    {
        return $this->Action;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getRole()
    {
        return $this->role;
    }

    public function setName($name)
    {
        $this->name = htmlspecialchars($name);
    }

    public function setUsername($username)
    {
        $this->username = htmlspecialchars($username);
    }

    public function setUserImage($image)
    {
        $this->image = $image;
    }

    public function getUserImage()
    {
        return $this->image;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUsername()
    {
        return $this->username;
    }


}