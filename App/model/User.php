<?php 

namespace App\Model;

use PDO,Exception;
use App\Model\UserAuth;

class User extends UserAuth
{
    protected $connect;

    public function __construct($id = null, $email = null, $password = null, $status = null, $Action = null, $name = null, $username = null, $image = null, $role = null)
    {
        parent::__construct($id, $email, $password, $status, $Action, $name, $username, $image, $role);
    }

    public function readUser()
    {
        $sql = "SELECT * FROM utilisateur 
                WHERE role_id != 3";

        $stmt = $this->connect->query($sql);
        $users = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $user = new User($row['id'], $row['email'], $row['motdepasse'], $row['statut'], $row['action'], $row['nom'], $row['prenom'], $row['image']);
            $users[] = $user;
        }

        return $users;
    }

    public function GetEnseignant()
    {
        $sql = "SELECT * FROM utilisateur 
                WHERE role_id = 2";

        $stmt = $this->connect->query($sql);
        $enseignants = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $enseignant = new User($row['id'], $row['email'], $row['motdepasse'], $row['statut'], $row['action'], $row['nom'], $row['prenom'], '', '');
            $enseignants[] = $enseignant;
        }

        return $enseignants;
    }

    public function Aprove()
    {
        $sql = "UPDATE utilisateur set Action = 0 WHERE id = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function setUser($image)
    {
        if (isset($image) && $image['error'] === 0) {
            $targetDir = "../views/assets/img/";
            $targetFile = $targetDir . basename($image["name"]);

            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }

            if (move_uploaded_file($image["tmp_name"], $targetFile)) {
                $uploadedimage = basename($image["name"]);
            } else {
                throw new Exception("Erreur lors du téléchargement du fichier.");
            }

            $this->setUserimage($uploadedimage);
            $this->setPassword(password_hash($this->password, PASSWORD_DEFAULT));

            $action = ($this->role == 2) ? 1 : null;
            $stmt = $this->connect->prepare(
                "INSERT INTO utilisateur (nom, prenom, email, motDePasse, role_id, image, Action) 
                VALUES (:nom, :username, :email, :password, :role_id, :image, :action)"
            );

            $stmt->bindParam(':nom', $this->name, PDO::PARAM_STR);
            $stmt->bindParam(':username', $this->username, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
            $stmt->bindParam(':role_id', $this->role, PDO::PARAM_INT);
            $stmt->bindParam(':image', $uploadedimage, PDO::PARAM_STR);
            $stmt->bindParam(':action', $action, PDO::PARAM_INT);

            if (!$stmt->execute()) {
                throw new Exception("Erreur lors de l'insertion dans la base de données.");
            }
        } else {
            throw new Exception("Fichier non valide ou non téléchargé.");
        }
    }

    public function status()
    {
        $sql = "UPDATE utilisateur SET statut = :status WHERE id = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':status', $this->status, PDO::PARAM_STR);
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);

        $stmt->execute();
    }

    public function suppriméUser()
    {
        $sql = "DELETE FROM utilisateur WHERE id = :id";

        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }
}