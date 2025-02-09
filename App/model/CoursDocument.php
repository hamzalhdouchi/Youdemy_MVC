<?php
namespace App\Model;
use App\Model\Cours;
use PDO,PDOException,Exception;

class CoursDocument extends Cours
{

    public function __construct($id = null, $titre = null, $description = null, $slgan = null, $categorie_id = null, $Tags_id = null, $Type = 'document', $image = null, $action = null)
    {
        parent::__construct($id, $titre, $description, $slgan, $categorie_id, $Tags_id, $Type, $image,$action);
    }


    public function ajouterCours()
    {
        try {
            $imagePath = '';
            $documentPath = '';

            // Gestion de l'image
            if (isset($this->image) && $this->image['error'] === UPLOAD_ERR_OK) {
                $imageType = mime_content_type($this->image['tmp_name']);
                if (str_starts_with($imageType, 'image/')) {
                    $uploadDir = '../views/assets/img';
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }

                    $imageName = uniqid() . '-' . basename($this->image['name']);
                    $imagePath = $uploadDir . '/' . $imageName;

                    if (!move_uploaded_file($this->image['tmp_name'], $imagePath)) {
                        throw new Exception("Échec de l'upload de l'image.");
                    }
                } else {
                    throw new Exception("Type d'image non valide.");
                }
            }
                var_dump($this->action);
            // Gestion du document
            if (isset($this->action) && $this->action['error'] === UPLOAD_ERR_OK) {
                $fileType = mime_content_type($this->action['tmp_name']);
                if ($fileType === 'application/pdf') {
                    $uploadDir = './assets/documents';
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }

                    $fileName = uniqid() . '-' . basename($this->action['name']);
                    $documentPath = $uploadDir . '/' . $fileName;

                    if (!move_uploaded_file($this->action['tmp_name'], $documentPath)) {
                        throw new Exception("Échec de l'upload du document.");
                    }
                } else {
                    throw new Exception("Type de fichier non valide. Seuls les fichiers PDF sont autorisés.");
                }
            } else {
                throw new Exception("Aucun document valide fourni.");
            }

            // Insertion du cours dans la base de données
            $sql = "INSERT INTO cours (titre, description, Slgan, Type, Enseignant_id, contenu, image, categorie_id) 
                    VALUES (:titre, :description, :Slgan, 'document', :idE, :contenu, :image, :categorie)";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(':titre', $this->titre, PDO::PARAM_STR);
            $stmt->bindParam(':description', $this->description, PDO::PARAM_STR);
            $stmt->bindParam(':Slgan', $this->slgan, PDO::PARAM_STR);
            $stmt->bindParam(':idE', $this->id, PDO::PARAM_INT);
            $stmt->bindParam(':contenu', $documentPath, PDO::PARAM_STR);
            $stmt->bindParam(':image', $imagePath, PDO::PARAM_STR);
            $stmt->bindParam(':categorie', $this->categorie_id, PDO::PARAM_INT);

            if (!$stmt->execute()) {
                throw new Exception("Échec de l'insertion du cours.");
            }

            // Gestion des tags
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
            $sql = "SELECT 
            C.*, 
            U.nom AS enseignant_nom, 
            U.prenom AS enseignant_prenom,
            STRING_AGG(TG.nom_Tag, ', ') AS tags,
            STRING_AGG(TG.color, ', ') AS couleurs
        FROM cours AS C
        JOIN utilisateur AS U ON U.id = C.Enseignant_id
        LEFT JOIN courstag AS T ON T.idCours = C.id_cours
        LEFT JOIN tag AS TG ON TG.id_Tag = T.idTag
        WHERE U.id = :id AND C.type = 'document'
        GROUP BY C.id_cours, U.nom, U.prenom";
        

            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();

            $courses = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $courses[] = [
                    'Cours' => new CoursDocument(
                        $row['id_cours'],
                        $row['titre'],
                        $row['description'],
                        $row['Slgan'],
                        null,
                        null,
                        $row['Type'],
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
            throw new Exception("Erreur de base de données : " . $e->getMessage());
        }
    }

    // Modifier un cours de type document
    public function Modifier($id)
    {
        try {
            $imagePath = '';
            $documentPath = '';

            // Gestion de l'image
            if (isset($this->image) && $this->image['error'] === UPLOAD_ERR_OK) {
                $imageType = mime_content_type($this->image['tmp_name']);
                if (str_starts_with($imageType, 'image/')) {
                    $uploadDir = '../coursContnu/assets/img';
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
                    $imageName = uniqid() . '-' . basename($this->image['name']);
                    $imagePath = $uploadDir . '/' . $imageName;

                    if (!move_uploaded_file($this->image['tmp_name'], $imagePath)) {
                        throw new Exception("Échec de l'upload de l'image.");
                    }
                } else {
                    throw new Exception("Type d'image non valide.");
                }
            }

            // Gestion du document
            if (isset($this->action) && $this->action['error'] === UPLOAD_ERR_OK) {
                $fileType = mime_content_type($this->action['tmp_name']);
                if ($fileType === 'application/pdf') {
                    $uploadDir = '../coursContnu/assets/documents';
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
                    $fileName = uniqid() . '-' . basename($this->action['name']);
                    $documentPath = $uploadDir . '/' . $fileName;

                    if (!move_uploaded_file($this->action['tmp_name'], $documentPath)) {
                        throw new Exception("Échec de l'upload du document.");
                    }
                } else {
                    throw new Exception("Type de fichier non valide. Seuls les fichiers PDF sont autorisés.");
                }
            }

            // Mise à jour du cours dans la base de données
            $sql = "UPDATE cours 
                    SET titre = :titre, 
                        description = :description, 
                        Slgan = :slgan, 
                        Type = 'document', 
                        Enseignant_id = :idEnseignant, 
                        contenu = :contenuDocument, 
                        categorie_id = :idCategorie, 
                        image = :image
                    WHERE id_cours = :id";

            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(':titre', $this->titre, PDO::PARAM_STR);
            $stmt->bindParam(':description', $this->description, PDO::PARAM_STR);
            $stmt->bindParam(':slgan', $this->slgan, PDO::PARAM_STR);
            $stmt->bindParam(':idEnseignant', $this->id, PDO::PARAM_INT);
            $stmt->bindParam(':contenuDocument', $documentPath, PDO::PARAM_STR);
            $stmt->bindParam(':image', $imagePath, PDO::PARAM_STR);
            $stmt->bindParam(':idCategorie', $this->categorie_id, PDO::PARAM_INT);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            if (!$stmt->execute()) {
                throw new Exception('Échec de la mise à jour du cours.');
            }

            // Suppression des anciens tags
            $deleteTagsSql = "DELETE FROM courstag WHERE idCours = :idCours";
            $deleteStmt = $this->connect->prepare($deleteTagsSql);
            $deleteStmt->bindParam(':idCours', $id, PDO::PARAM_INT);
            $deleteStmt->execute();

            // Ajout des nouveaux tags
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
        } catch (PDOException $e) {
            throw new Exception("Erreur de base de données : " . $e->getMessage());
        } catch (Exception $e) {
            throw new Exception("Erreur : " . $e->getMessage());
        }
    }

    // Afficher un cours par ID
    public function AffecherCoursByCategorei($cours_id)
    {
        try {
            $sql = "SELECT * FROM cours C
                    JOIN utilisateur U ON C.Enseignant_id = U.id
                    LEFT JOIN courstag AS T ON T.idCours = C.id_cours
                    LEFT JOIN tag AS TG ON TG.id_Tag = T.idTag
                    WHERE type = 'document' AND C.id_cours = :Cours_id";

            $Stmt = $this->connect->prepare($sql);
            $Stmt->bindParam(":Cours_id", $cours_id, PDO::PARAM_INT);
            $Stmt->execute();

            $resulte = $Stmt->fetch(PDO::FETCH_ASSOC);

            if ($resulte) {
                return [
                    'Cours' => new CoursDocument(
                        $resulte['id_cours'],
                        $resulte['titre'],
                        $resulte['description'],
                        $resulte['Slgan'],
                        null,
                        null,
                        $resulte['Type'],
                        $resulte['image'],
                        $resulte['contenu']
                    ),
                    'User' => new User(
                        $resulte['id'],
                        null,
                        null,
                        null,
                        null,
                        $resulte['nom'],
                        $resulte['prenom']
                    ),
                    'Tags' => new Tags($resulte['id_Tag'], $resulte['nom_Tag'])
                ];
            } else {
                return null;
            }
        } catch (PDOException $e) {
            throw new Exception("Erreur : Impossible de récupérer le cours. " . $e->getMessage());
        }
    }
}