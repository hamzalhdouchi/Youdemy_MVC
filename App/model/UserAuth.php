<?php 

namespace App\Model;
use App\Config\Database;
use PDO,Exception;
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

    public function setUserimage($image)
    {
        $this->image = $image;
    }

    public function getUserimage()
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

    public function loginUser($email, $password)
    {
        $this->setEmail($email);

        $stmt = $this->connect->prepare("SELECT * FROM utilisateur WHERE email = :email");
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($user);
        if ($user) {
            $this->setId($user['id']);
            $this->setEmail($user['email']);
            $this->setPassword($user['motdepasse']);
            $this->setStatus($user['statut']);
            $this->setAction($user['action']);
            $this->setName($user['nom']);
            $this->setUsername($user['prenom']);
            $this->setUserimage($user['image']);
            $this->setRole($user['role_id']);

            if (password_verify($password, $user['motdepasse'])) {
                return $user;
            } else {
                throw new Exception("Email ou mot de passe invalide.");
            }
        } else {
            throw new Exception("Aucun utilisateur trouvé.");
        }
    }
}
