<?php 
namespace App\Model;

use App\Config\Database;
class inscription
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

}