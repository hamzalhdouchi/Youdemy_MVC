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

    public function login($email, $password)
    {
        try {
            $user = $this->userAuthModel->loginUser($email, $password);

            $_SESSION["user_name"] = $user["nom"];
            $_SESSION["prenom"] = $user["prenom"];
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_profile"] = $user["Image"];

            if ($user["role_id"] == 2) {
                if ($user['Action'] == 1) {
                    echo "<script>alert('Le compte n\'est pas approuvé');</script>";
                } elseif ($user['Action'] == 0) {
                    header("Location: ../courses/instructor-course.php");
                }
            } elseif ($user["role_id"] == 3) {
                header("Location: ../admin/Users.php");
            } elseif ($user["role_id"] == 1) {
                header("Location: ../courses/HOME.php");
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

    public function Index()
    {
        return $this->userModel->readUser();
    }

    public function getEnseignants()
    {
        return $this->userModel->GetEnseignant();
    }

    public function aproveUser($id)
    {
        $this->userModel->setId($id);
        $this->userModel->Aprove();
        header("Location: ../admin/ActionAdmin.PHP");
        exit;
    }

    public function createUser($name, $username, $email, $password, $role, $image)
    {
        $this->userModel->setName($name);
        $this->userModel->setUsername($username);
        $this->userModel->setEmail($email);
        $this->userModel->setPassword($password);
        $this->userModel->setRole($role);

        try {
            $this->userModel->setUser($image);
            header("Location: ../views/success.php");
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