<?php

namespace App\Controller;

use App\Model\UserAuth;
use App\Model\User;
use App\Model\Admin;
use Exception;

class AuthController
{
    private $userAuthModel;
    private $userModel;
    private $adminModel;

    public function __construct()
    {
        $this->userAuthModel = new UserAuth();
        $this->userModel = new User();
        $this->adminModel = new Admin();
    }

    public function indexLogin()
    {
        require_once __DIR__ . "/../view/auth/login.php";
    }
    
    public function login()
    {
        try {
            $user = $this->userAuthModel->loginUser($_POST['Email'], $_POST['Password']);

            $_SESSION["user_name"] = $user["nom"];
            $_SESSION["prenom"] = $user["prenom"];
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_profile"] = $user["image"];

            // var_dump($user["role_id"]);
            if ($user["role_id"] === 2) { 
                if ($user['action'] === 1) {
                    echo "<script>alert('Le compte n\'est pas approuvé');</script>";
                } elseif ($user['action'] === 0) {
                    header("Location: ../view/courses/instructor-course.php");
                    exit;
                }
            } elseif ($user["role_id"] === 3) {
                header("Location: /Admin");
                exit;
            } elseif ($user["role_id"] === 1) {
                header("Location: ../view/courses/HOME.php");
                exit;
            }
            exit;
        } catch (Exception $e) {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur de connexion',
                    text: '" . addslashes($e->getMessage()) . "',
                    showConfirmButton: true
                });
            </script>";
        }
    }

    public function getAllUser()
    {
        $ $this->userModel->readUser();
        
    }

    public function Index()
    {
        $result = $this->userModel->GetEnseignant();
        require_once __DIR__. "/../view/admin/ActionAdmin.PHP";
    }

    public function aproveUser()
    {
        $this->userModel->setId($_POST['id']);
        $this->userModel->Aprove();
        header("Location: /Admin");
        exit;
    }

    public function createUser()
    {
        if ($_POST['password'] == $_POST['RePassword']) {

            $this->userModel->setName($_POST['FirstName']);
            $this->userModel->setUsername($_POST['lastName']);
            $this->userModel->setEmail($_POST['email']);
            $this->userModel->setPassword($_POST['password']);
            $this->userModel->setRole($_POST['role']);

            try {
                $this->userModel->setUser($_FILES['Image_Profile']);
                header("Location: /inscription");
                exit;
            } catch (Exception $e) {
                echo "<script>Swal.fire({
                title: 'Erreur!',
                text: '" . addslashes($e->getMessage()) . "',
                icon: 'error',
                confirmButtonText: 'OK'
            });</script>";
            }
        }
    }

    public function updateStatus($id, $status)
    {
        $this->userModel->setId($id);
        $this->userModel->setStatus($status);
        $this->userModel->status();
        header("Location: ../admin/Users.PHP");
        exit;
    }


    public function deleteUser($id)
    {
        try {
            $this->userModel->setId($id);
            $message = $this->adminModel->deletuser($id);
            echo "<script>alert('$message');</script>";
            header("Location: ../admin/Users.PHP");
            exit;
        } catch (Exception $e) {
            echo "<script>alert('" . addslashes($e->getMessage()) . "');</script>";
        }
    }

    public function getTotalStaff()
    {
        return $this->adminModel->totalStaff();
    }

    public function getTotalEtudient()
    {
        return $this->adminModel->totalEtudient();
    }

    public function getTotalUsers()
    {
        return $this->adminModel->totalUsers();
    }

    public function getTotalInactive()
    {
        return $this->adminModel->totalInactive();
    }

    public function getTop3Teachers()
    {
        return $this->adminModel->Top3Techers();
    }
}
