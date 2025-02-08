<?php

namespace App\Model;
use App\Config\Database;
use PDO,PDOException;

class Etudiant
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function filter($tagId)
    {
        try {
            $sql = "
                SELECT 
                    cours.*, 
                    STRING_AGG(tag.nom_Tag, ', ') AS tags
                FROM 
                    cours
                LEFT JOIN 
                    courstag ON cours.id_cours = courstag.idCours
                LEFT JOIN 
                    tag ON courstag.idTag = tag.id_Tag
                WHERE 
                    courstag.idTag = :tagId
                GROUP BY 
                    cours.id_cours;
            ";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':tagId', $tagId, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error in filter: " . $e->getMessage());
            return ["error" => "Filter failed."];
        }
    }

    public function search($query)
    {
        try {
            $sql = "
                SELECT 
                    cours.*, 
                    STRING_AGG(DISTINCT tag.nom_Tag, ', ') AS tags
                FROM 
                    cours
                LEFT JOIN 
                    courstag ON cours.id_cours = courstag.idCours
                LEFT JOIN 
                    tag ON courstag.idTag = tag.id_Tag
                WHERE 
                    cours.titre LIKE :query OR cours.description LIKE :query
                GROUP BY 
                    cours.id_cours;
            ";

            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':query', '%' . $query . '%', PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error in search: " . $e->getMessage());
            return ["error" => "Search failed."];
        }
    }

    public function myCours($id_Etudiant)
    {
        try {
            $sql = "
  SELECT 
    C.id_cours, 
    C.titre, 
    C.description, 
    C.Slgan, 
    C.contenu,
    C.Image,
    U.nom AS enseignant_nom, 
    U.prenom AS enseignant_prenom, 
    U.Image AS Image_User,
    STRING_AGG(DISTINCT TG.nom_Tag, ', ') AS tags,
    I.dateInscription
FROM 
    cours C
JOIN 
    utilisateur U ON C.Enseignant_id = U.id
LEFT JOIN 
    courstag T ON T.idCours = C.id_cours
LEFT JOIN 
    tag TG ON TG.id_Tag = T.idTag
LEFT JOIN 
    inscription I ON I.idCours = C.id_cours
WHERE 
    C.enseignant_id = :id -- Replace with the actual value or parameter
GROUP BY 
    C.id_cours, 
    C.titre, 
    C.description, 
    C.Slgan, 
    C.contenu, 
    C.Image, 
    U.nom, 
    U.prenom, 
    U.Image, 
    I.dateInscription;

            ";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":id", $id_Etudiant, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error in myCours: " . $e->getMessage());
            return ["error" => "Unable to retrieve courses for this student."];
        }
    }
}
?>
