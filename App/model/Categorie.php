<?php

namespace App\Model;

use App\Config\Database;
use PDO;
use PDOException, Exception;

class Categorie
{
    private $id;
    private $nomCategorie;
    private $slogan;
    private $connect;

    public function __construct($id = null, $nomCategorie = null, $slogan = null)
    {
        $this->id = $id ?? 0;
        $this->nomCategorie = $nomCategorie ?? "";
        $this->slogan = $slogan ?? "";
        $this->connect = Database::getInstance()->getConnection();
    }

    public function getIdC()
    {
        return $this->id;
    }

    public function setIdC(int $id)
    {
        $this->id = $id;
    }

    public function getNomCategorie()
    {
        return $this->nomCategorie;
    }

    public function setNomCategorie($nomCategorie)
    {
        $this->nomCategorie = htmlspecialchars($nomCategorie);
    }

    public function getSlogan()
    {
        return $this->slogan;
    }

    public function setSlogan($slogan)
    {
        $this->slogan = htmlspecialchars($slogan);
    }

    public function getCategories()
    {
        $sql = "
            SELECT 
    categorie.id_categorei, 
    categorie.nom_categorie, 
    categorie.slogan, 
    COUNT(cours.id_cours) AS nombre_cours
    FROM categorie
    LEFT JOIN cours ON categorie.id_categorei = cours.categorie_id
    GROUP BY categorie.id_categorei;
        ";

        $stmt = $this->connect->query($sql);
        $categoriesListe = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $categorie = new Categorie($row['id_categorei'], $row['nom_categorie'], $row['slogan']);
            $categoriesListe[] = $categorie;
        }
        return $categoriesListe;
    }

    public function ajoutCategorie($idCont, $postdata)
    {
        
        try {
            $sql = "INSERT INTO categorie (nom_categorie, slogan) VALUES (:name, :slogan)";
            $stmt = $this->connect->prepare($sql);
    
            if (!$stmt) {
                throw new Exception("Échec de la préparation de la requête SQL.");
            }
    
            for ($i = 0; $i <= $idCont; $i++) {
                
                    $name = htmlspecialchars($postdata["categorie_name_$i"]);
                    $slogan = htmlspecialchars($postdata["categorie_slogan_$i"]);
                    var_dump($name);
                    var_dump($slogan);
                    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                    $stmt->bindParam(':slogan', $slogan, PDO::PARAM_STR);
                    $stmt->execute();
                    if (!$stmt->execute()) {
                        throw new Exception("Erreur lors de l'exécution de la requête pour la catégorie $i.");
                    }
                
            }
    
            return true;
        } catch (PDOException $e) {
            error_log("Erreur PDO lors de l'ajout de catégorie : " . $e->getMessage());
            return "❌ Erreur PDO : " . $e->getMessage();
        } catch (Exception $e) {
            error_log("Erreur générale lors de l'ajout de catégorie : " . $e->getMessage());
            return "❌ Erreur : " . $e->getMessage();
        }
    }
    

    public function deleteCategory(int $id)
    {
        $sql = "DELETE FROM categorie WHERE id_categorei = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function getModifier($id)
    {
        $sql = "SELECT * FROM categorie WHERE id_categorei = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return new Categorie($result['id_categorei'], $result['nom_categorie'], $result['slogan']);
        }
        return null;
    }

    public function updateCategory()
    {
        $sql = "UPDATE categorie SET nom_categorie = :nomCategorie, slogan = :slogan WHERE id_categorei = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindParam(':nomCategorie', $this->nomCategorie, PDO::PARAM_STR);
        $stmt->bindParam(':slogan', $this->slogan, PDO::PARAM_STR);
        if ($stmt->execute()) {
            echo 'fkfkfkfkkfkfkfkfkfkffkfkfkfkfkf';
        }
        return $stmt->execute();
    }
}
