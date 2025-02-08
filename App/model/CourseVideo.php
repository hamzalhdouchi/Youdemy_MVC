<?php
namespace App\Model;
use App\Model\Cours;
use PDO,PDOException,Exception;

class CoursVideoModel extends Cours
{
    private $contenu_video;

    public function __construct($id = null, $titre = null, $description = null, $slgan = null, $categorie_id = null, $Tags_id = null, $Type = null, $image = null, $contenu_video = null, $action = null)
    {
        parent::__construct($id, $titre, $description, $slgan, $categorie_id, $Tags_id, $Type, $image, $action);
        $this->contenu_video = $contenu_video;
    }

    public function getVideo()
    {
        return $this->contenu_video;
    }

    public function setVideo($contenu_video)
    {
        $this->contenu_video = $contenu_video;
    }

    public function ajouterCours()
    {
        try {
            if (isset($this->image['tmp_name']) && $this->image['tmp_name'] != '') {
                $uploadDir = '../views/assets/img/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $imageName = uniqid() . '_' . basename($this->image['name']);
                $uploadPath = $uploadDir . $imageName;

                if (!move_uploaded_file($this->image['tmp_name'], $uploadPath)) {
                    throw new Exception("Échec de l'upload de l'image.");
                }
            } else {
                throw new Exception("Aucune image valide fournie.");
            }

            $sql = "INSERT INTO cours (titre, description, Slgan, Type, Enseignant_id, contenu, categorie_id, image) 
                    VALUES (:titre, :description, :Slgan, 'video', :idE, :contenu, :categorie, :image)";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(':titre', $this->titre, PDO::PARAM_STR);
            $stmt->bindParam(':description', $this->description, PDO::PARAM_STR);
            $stmt->bindParam(':Slgan', $this->slgan, PDO::PARAM_STR);
            $stmt->bindParam(':idE', $this->id, PDO::PARAM_INT);
            $stmt->bindParam(':contenu', $this->contenu_video, PDO::PARAM_STR);
            $stmt->bindParam(':categorie', $this->categorie_id, PDO::PARAM_INT);
            $stmt->bindParam(':image', $uploadPath, PDO::PARAM_STR);

            if (!$stmt->execute()) {
                throw new Exception("Échec de l'insertion du cours.");
            }

            $coursID = $this->connect->lastInsertId();
            if (!$coursID) {
                throw new Exception("Impossible de récupérer l'ID du dernier cours inséré.");
            }

            if (is_array($this->Tags_id)) {
                foreach ($this->Tags_id as $tag) {
                    $sql = "INSERT INTO courstag (idCours, idTag) VALUES (:idCours, :idTag)";
                    $stmt = $this->connect->prepare($sql);
                    $stmt->bindParam(':idCours', $coursID, PDO::PARAM_INT);
                    $stmt->bindParam(':idTag', $tag, PDO::PARAM_INT);

                    if (!$stmt->execute()) {
                        throw new Exception("Échec de l'association du tag {$tag} au cours {$coursID}.");
                    }
                }
            } else {
                throw new Exception("Les tags doivent être un tableau.");
            }

            return true;
        } catch (PDOException $e) {
            throw new Exception("Erreur de base de données : " . $e->getMessage());
        } catch (Exception $e) {
            throw new Exception("Erreur : " . $e->getMessage());
        }
    }

    public function afficherCours()
    {
        try {
            $coursObjects = [];
            $sql = "SELECT 
                    C.*, 
                    U.nom AS enseignant_nom, 
                    U.prenom AS enseignant_prenom, 
                    GROUP_CONCAT(TG.nom_Tag SEPARATOR ', ') AS tags,
                    GROUP_CONCAT(TG.color SEPARATOR ', ') AS couleurs
                FROM cours AS C
                JOIN utilisateur AS U ON U.id = C.Enseignant_id
                LEFT JOIN courstag AS T ON T.idCours = C.id_cours
                LEFT JOIN tag AS TG ON TG.id_Tag = T.idTag";

            if ($this->id) {
                $sql .= " WHERE U.id = :id AND C.type = 'Video'";
            }

            $sql .= " GROUP BY C.id_cours";

            $stmt = $this->connect->prepare($sql);

            if ($this->id) {
                $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            }

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur de base de données : " . $e->getMessage());
        }
    }

    public function supprimerCours()
    {
        try {
            $sql = "DELETE FROM cours WHERE id_cours = :id";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception("Erreur de base de données : " . $e->getMessage());
        }
    }

    public function modifierCours($id)
    {
        try {
            $sql = "SELECT * FROM cours WHERE id_cours = :id AND Type = 'video'";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur de base de données : " . $e->getMessage());
        }
    }

    public function mettreAJourCours($id)
    {
        try {
            $uploadPath = null;
            if (isset($this->image['tmp_name']) && $this->image['tmp_name'] != '') {
                $uploadDir = '../coursContnu/assets/img/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $imageName = uniqid() . '_' . basename($this->image['name']);
                $uploadPath = $uploadDir . $imageName;

                if (!move_uploaded_file($this->image['tmp_name'], $uploadPath)) {
                    throw new Exception("Échec de l'upload de l'image.");
                }
            }

            $sql = "UPDATE cours 
                    SET titre = :titre, 
                        description = :description, 
                        Slgan = :Slgan, 
                        Type = 'Video', 
                        Enseignant_id = :idE, 
                        contenu = :contenu, 
                        categorie_id = :categorie, 
                        image = :image
                    WHERE id_cours = :id";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(':titre', $this->titre, PDO::PARAM_STR);
            $stmt->bindParam(':description', $this->description, PDO::PARAM_STR);
            $stmt->bindParam(':Slgan', $this->slgan, PDO::PARAM_STR);
            $stmt->bindParam(':idE', $this->id, PDO::PARAM_INT);
            $stmt->bindParam(':contenu', $this->contenu_video, PDO::PARAM_STR);
            $stmt->bindParam(':categorie', $this->categorie_id, PDO::PARAM_INT);
            $stmt->bindParam(':image', $uploadPath, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            if (!$stmt->execute()) {
                throw new Exception("Échec de la mise à jour du cours.");
            }

            $deleteTagsSql = "DELETE FROM courstag WHERE idCours = :idCours";
            $deleteStmt = $this->connect->prepare($deleteTagsSql);
            $deleteStmt->bindParam(':idCours', $id, PDO::PARAM_INT);
            $deleteStmt->execute();

            if (is_array($this->Tags_id)) {
                $insertTagSql = "INSERT INTO courstag (idCours, idTag) VALUES (:idCours, :idTag)";
                $tagStmt = $this->connect->prepare($insertTagSql);

                foreach ($this->Tags_id as $tag) {
                    $tagStmt->bindParam(':idCours', $id, PDO::PARAM_INT);
                    $tagStmt->bindParam(':idTag', $tag, PDO::PARAM_INT);

                    if (!$tagStmt->execute()) {
                        throw new Exception("Échec de l'association du tag {$tag} au cours {$id}.");
                    }
                }
            } else {
                throw new Exception("Les tags doivent être un tableau.");
            }

            return true;
        } catch (Exception $e) {
            throw new Exception("Erreur : " . $e->getMessage());
        }
    }

    public function afficherCoursParCategorie($id_Categorei)
    {
        try {
            $sql = "SELECT * FROM cours C
                    JOIN utilisateur U ON C.Enseignant_id = U.id
                    LEFT JOIN courstag AS T ON T.idCours = C.id_cours
                    LEFT JOIN tag AS TG ON TG.id_Tag = T.idTag
                    WHERE categorie_id = :categorie_id";

            $Stmt = $this->connect->prepare($sql);
            $Stmt->bindParam(":categorie_id", $id_Categorei, PDO::PARAM_INT);
            $Stmt->execute();
            return $Stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur de base de données : " . $e->getMessage());
        }
    }

    public function afficherCoursSpecifique()
    {
        try {
            $sql = "SELECT * FROM cours C
                    JOIN utilisateur U ON C.Enseignant_id = U.id
                    LEFT JOIN courstag AS T ON T.idCours = C.id_cours
                    LEFT JOIN tag AS TG ON TG.id_Tag = T.idTag
                    WHERE type = 'video' AND C.id_cours = :Cours_id HAVING C.action = 1";

            $Stmt = $this->connect->prepare($sql);
            $Stmt->bindParam(":Cours_id", $this->id, PDO::PARAM_INT);
            $Stmt->execute();
            return $Stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur de base de données : " . $e->getMessage());
        }
    }

    public function afficherCoursDashboard()
    {
        try {
            $sql = "SELECT * FROM cours";
            $stmt = $this->connect->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur de base de données : " . $e->getMessage());
        }
    }

    public function approuverCours()
    {
        try {
            $sql = "UPDATE cours SET action = 1 WHERE id_cours = :id";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception("Erreur de base de données : " . $e->getMessage());
        }
    }
}