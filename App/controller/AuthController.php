<?php
namespace App\Controller;
use App\Model\UserAuth;
use Exception;

class AuthController
{
    private $userAuthModel;

    public function __construct()
    {
        $this->userAuthModel = new UserAuth();
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
}