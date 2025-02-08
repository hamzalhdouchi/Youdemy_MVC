<?php

namespace App\Model;
use App\Config\Database;
use PDOException,PDO;

abstract class Cours
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

    public function getimage()
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

    public function setimage($image)
    {
        $this->image = $image;
    }

    
    abstract public function ajouterCours();

    abstract public function afficherCours();

    
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
           $sql = "SELECT 
            C.*, 
            U.nom AS enseignant_nom, 
            U.prenom AS enseignant_prenom,
            STRING_AGG(TG.nom_Tag, ', ') AS tags,
            STRING_AGG(TG.color, ', ') AS couleurs
        FROM cours AS C
        JOIN utilisateur AS U ON C.Enseignant_id = U.id
        LEFT JOIN courstag AS T ON T.idCours = C.id_cours
        LEFT JOIN tag AS TG ON TG.id_Tag = T.idTag
        WHERE C.action = TRUE
        GROUP BY C.id_cours, U.nom, U.prenom
        LIMIT :limit OFFSET :offset";
    
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':limit', $itemsPerPage, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
    
            $courses = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $courses[] = [
                    'Cours' => new CoursDocument(
                        $row['id_cours'],
                        $row['titre'],
                        $row['description'],
                        $row['slgan'],
                        null,
                        null,
                        $row['type'],
                        $row['image'],
                        $row['contenu']
                    ),
                    'User' => new User(
                        null,
                        null,
                        null,
                        null,
                        null,
                        $row['enseignant_nom'],
                        $row['enseignant_prenom']
                    ),
                    'Tags' => new Tags(
                        null,
                        $row['tags'],
                        $row['couleurs']
                    )
                ];
            }
    
            return $courses;
        } catch (PDOException $e) {
            echo("Erreur dans afficherTousLesCours : " . $e->getMessage());
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