<?php

namespace App\Controller;
use App\Model\CoursDocument;
use App\Model\Cours;
use App\Model\Tags;
use App\Model\Categorie;
USE Exception;


class CoursController
{
    private $coursModel;
    private $TagsModel;
    private $CategorieModel;

    public function __construct()
    {
        $this->coursModel = new CoursDocument();
        $this->TagsModel = new Tags();
        $this->CategorieModel = new Categorie();
    }


    // public function ajouterCours()
    // {
    //     $this->coursModel->setTitre($titre);
    //     $this->coursModel->setDescription($description);
    //     $this->coursModel->setSlgun($slgan);
    //     $this->coursModel->setCategorieId($categorie_id);
    //     $this->coursModel->setTagsId($Tags_id);
    //     $this->coursModel->setType($Type);
    //     $this->coursModel->setimage($image);
    //     $this->coursModel->setAction($action);

    //     return $this->coursModel->ajouterCours();
    // }

    
    public function supprimerCours($id)
    {
        $this->coursModel->setId($id);
        $this->coursModel->deletCours();
        header("Location: ../admin/cours.php");
        exit;
    }

    
    public function afficherStatistiquesCours()
    {
        return CoursDocument::StatiqueCours();
    }

    public function afficherTousLesCours()
    {
        $itemsPerPage = 9;

    $currentPage = isset($_GET['page']) ? filter_var($_GET['page'], FILTER_VALIDATE_INT) : 1;
    if ($currentPage < 1) $currentPage = 1;

    $offset = ($currentPage - 1) * $itemsPerPage;
    $courses = Cours::afficherTousLesCours($itemsPerPage, $offset);
    $tag = $this->TagsModel->getTags();
    $categorei = $this->CategorieModel->getCategories();
        
    $totalCours = Cours::countCours();
    $totalPages = ($totalCours > 0) ? ceil($totalCours / $itemsPerPage) : 1;
        require_once __DIR__. "/../view/courses/HOME.php";
    }

    
    public function compterCours()
    {
        return CoursDocument::countCours();
    }

    public function afficherCours($id)
    {
        try {
            $this->coursModel->setId($id);
            return $this->coursModel->afficherCours();
        } catch (Exception $e) {
            echo "<script>alert('" . addslashes($e->getMessage()) . "');</script>";
            return [];
        }
    }

    // Modifier un cours de type document
    public function modifierCours($id, $titre, $description, $slgan, $categorie_id, $Tags_id, $image, $contenu_document)
    {
        try {
            $this->coursModel->setTitre($titre);
            $this->coursModel->setDescription($description);
            $this->coursModel->setSlgun($slgan);
            $this->coursModel->setCategorieId($categorie_id);
            $this->coursModel->setTagsId($Tags_id);
            $this->coursModel->setImage($image);
            $this->coursModel->setDocument($contenu_document);

            if ($this->coursModel->Modifier($id)) {
                echo "<script>alert('Cours modifié avec succès !');</script>";
                header("Location: ../views/cours.php");
                exit;
            } else {
                throw new Exception("Erreur lors de la modification du cours.");
            }
        } catch (Exception $e) {
            echo "<script>alert('" . addslashes($e->getMessage()) . "');</script>";
        }
    }

    // Afficher un cours par ID
    public function afficherCoursParId($cours_id)
    {
        try {
            return $this->coursModel->AffecherCoursByCategorei($cours_id);
        } catch (Exception $e) {
            echo "<script>alert('" . addslashes($e->getMessage()) . "');</script>";
            return null;
        }
    }
}