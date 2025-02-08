<?php
namespace App\Model;
use App\Config\Database;
use PDO,Exception,PDOException;
use App\Model\UserAuth;



class Admin extends UserAuth
{
    protected $connect;

    public function __construct($id = null, $email = null, $password = null, $status = null, $Action = null, $name = null, $username = null, $image = null, $role = null)
    {
        parent::__construct($id, $email, $password, $status, $Action, $name, $username, $image, $role);
        $this->connect = Database::getInstance()->getConnection();
    }

    public function deletuser($id)
    {
        $query = "DELETE FROM utilisateur WHERE id = :id";
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "Utilisateur supprimé avec succès !";
        } else {
            throw new Exception("Erreur lors de la suppression de l'utilisateur.");
        }
    }

    public function totalStaff()
    {
        try {
            $sql = "SELECT COUNT(*) AS totalStaff FROM utilisateur WHERE role_id = 2";
            $stmt = $this->connect->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['totalStaff'] ?? 0;
        } catch (PDOException $e) {
            error_log("Error fetching total staff: " . $e->getMessage());
            return 0;
        }
    }

    public function totalEtudient()
    {
        try {
            $sql = "SELECT COUNT(*) AS totalEtudient FROM utilisateur WHERE role_id = 1";
            $stmt = $this->connect->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['totalEtudient'] ?? 0;
        } catch (PDOException $e) {
            error_log("Error fetching total students: " . $e->getMessage());
            return 0;
        }
    }

    public function totalUsers()
    {
        $query = "SELECT COUNT(*) FROM utilisateur WHERE role_id != 3";

        try {
            $stmt = $this->connect->prepare($query);
            $stmt->execute();
            return $stmt->fetchColumn();
        } catch (PDOException $e) {
            error_log("Error fetching total users: " . $e->getMessage());
            return 0;
        }
    }

    public function totalInactive()
    {
        try {
            $query = "SELECT COUNT(*) FROM utilisateur WHERE statut = 'suspendu'";
            $stmt = $this->connect->prepare($query);
            $stmt->execute();
            return $stmt->fetchColumn() ?? 0;
        } catch (PDOException $e) {
            error_log("Error in totalInactive(): " . $e->getMessage());
            return 0;
        }
    }

    public function Top3Techers()
    {
        $sql = "SELECT U.id AS id_enseignant, U.nom, U.prenom, COUNT(I.idEtudiant) AS total_etudiants
                FROM utilisateur U
                JOIN cours C ON U.id = C.Enseignant_id
                LEFT JOIN inscription I ON C.id_cours = I.idCours
                GROUP BY U.id
                ORDER BY total_etudiants DESC
                LIMIT 3;";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();

        $teachers = [];
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $teachers[] = new Admin($result['id_enseignant'], '', '', '', '', $result['nom'], $result['prenom'], '', $result['total_etudiants']);
        }

        return $teachers;
    }
}

class SuperAdmin extends Admin
{
    public function sayHello()
    {
        echo 'Bonjour';
    }
}