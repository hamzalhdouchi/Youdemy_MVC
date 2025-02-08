<?php
namespace App\Model;
use App\Config\Database;
use PDO;

class Teacher
{
    public $connect;

    public function __construct()
    {
        $this->connect = Database::getInstance()->getConnection();
    }

    public function nombreDeCours($idEnseignant)
    {
        $sql = "SELECT COUNT(*) AS nombreDeCours
                FROM cours
                WHERE Enseignant_id = :idEnseignant";

        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':idEnseignant', $idEnseignant, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['nombreDeCours'];
    }

    public function nombreEtudiantsInscrits($idEnseignant)
    {
        $sql = "SELECT COUNT(I.idEtudiant) AS nombreEtudiants
                FROM cours C
                JOIN inscription I ON I.idCours = C.id_cours
                WHERE C.Enseignant_id = :idEnseignant";

        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':idEnseignant', $idEnseignant, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['nombreEtudiants'];
    }
}
