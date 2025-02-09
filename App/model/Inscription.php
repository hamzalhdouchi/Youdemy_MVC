<?php
namespace App\Model;
use App\Config\Database;
use PDO,PDOException,Exception;


class Inscription
{
    private $id;
    private $idEtudiant;
    private $idCours;
    private $dateInscription;

    private $connect;

    public function __construct($id = null, $idEtudiant = null, $idCours = null, $dateInscription = null)
    {
        $this->id = $id;
        $this->idEtudiant = $idEtudiant;
        $this->idCours = $idCours;
        $this->dateInscription = $dateInscription;
        $this->connect = Database::getInstance()->getConnection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdEtudiant()
    {
        return $this->idEtudiant;
    }

    public function setIdEtudiant($idEtudiant)
    {
        $this->idEtudiant = $idEtudiant;
    }

    public function getIdCours()
    {
        return $this->idCours;
    }

    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;
    }

    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    public function setIdCours($idCours)
    {
        $this->idCours = $idCours;
    }

    public function afficherInscription()
    {
        $sql = "SELECT * FROM inscription WHERE idEtudiant = :idE AND idCours = :idCours";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(":idE", $this->idEtudiant, PDO::PARAM_INT);
        $stmt->bindParam(":idCours", $this->idCours, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return new Inscription(
                $result['id'],
                $result['idetudiant'],
                $result['idcours'],
                $result['dateinscription']
            );
        }
        return null;
    }


    public function inscrire()
    {
        try {
            $sql = "INSERT INTO inscription(idEtudiant, idCours) VALUES (:idE, :idCours)";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(":idE", $this->idEtudiant, PDO::PARAM_INT);
            $stmt->bindParam(":idCours", $this->idCours, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de l'inscription : " . $e->getMessage());
        }
    }
}
