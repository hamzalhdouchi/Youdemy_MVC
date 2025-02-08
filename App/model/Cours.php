<?php

namespace App\Model;
use App\Config\Database;
use PDOException,PDO;

abstract class CoursModel
{
    protected $id;
    protected $titre;
    protected $description;
    protected $slgan;
    protected $categorie_id;
    protected $Tags_id;
    protected $Type = null;
    protected $connect;
    protected $image;
    protected $action;

    public function __construct($id = null, $titre = null, $description = null, $slgan = null, $categorie_id = null, $Tags_id = null, $Type = null, $image = null, $action = null)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->slgan = $slgan;
        $this->categorie_id = $categorie_id;
        $this->Tags_id = $Tags_id;
        $this->Type = $Type;
        $this->image = $image;
        $this->action = $action;
        $this->connect = Database::getInstance()->getConnection();
    }

    // Getters
    public function getTitre()
    {
        return $this->titre;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getSlgun()
    {
        return $this->slgan;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->Type;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getAction()
    {
        return $this->action;
    }

    // Setters
    public function setAction($action)
    {
        $this->action = $action;
    }

    public function setCategorieId($categorie_id)
    {
        $this->categorie_id = $categorie_id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTagsId($Tags_id)
    {
        $this->Tags_id = $Tags_id;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setSlgun($slgan)
    {
        $this->slgan = $slgan;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setType($Type)
    {
        $this->Type = $Type;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    // Méthodes abstraites
    abstract public function ajouterCours();

    abstract public function afficherCours();

    // Méthodes concrètes
    public function deletCours()
    {
        $sql = "DELETE FROM cours WHERE id_cours = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function StatiqueCours()
    {
        try {
            $db = Database::getInstance()->getConnection();
            $sql = "SELECT categorie_id, COUNT(*) AS total FROM cours GROUP BY categorie_id";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erreur dans StatiqueCours : " . $e->getMessage());
            return [];
        }
    }

    public static function afficherTousLesCours($itemsPerPage, $offset)
    {
        try {
            $db = Database::getInstance()->getConnection();
            $sql = "
                SELECT * FROM cours C
                JOIN utilisateur U ON C.Enseignant_id = U.id
                LEFT JOIN courstag AS T ON T.idCours = C.id_cours
                LEFT JOIN tag AS TG ON TG.id_Tag = T.idTag
                WHERE C.action = 1
                LIMIT :limit OFFSET :offset
            ";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':limit', $itemsPerPage, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erreur dans afficherTousLesCours : " . $e->getMessage());
            return ["error" => "Impossible de récupérer les cours pour le moment."];
        }
    }

    public static function countCours()
    {
        try {
            $db = Database::getInstance()->getConnection();
            $sql = "SELECT COUNT(*) as total FROM cours";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['total'];
        } catch (PDOException $e) {
            error_log("Erreur dans countCours : " . $e->getMessage());
            return 0;
        }
    }
}