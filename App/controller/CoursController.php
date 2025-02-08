<?php

namespace App\Controller;
use App\Model\CoursModel;

class CoursController
{
    private $coursModel;

    public function __construct()
    {
        $this->coursModel = new CoursModel();
    }

        
    public function ajouterCours($titre, $description, $slgan, $categorie_id, $Tags_id, $Type, $image, $action)
    {
        $this->coursModel->setTitre($titre);
        $this->coursModel->setDescription($description);
        $this->coursModel->setSlgun($slgan);
        $this->coursModel->setCategorieId($categorie_id);
        $this->coursModel->setTagsId($Tags_id);
        $this->coursModel->setType($Type);
        $this->coursModel->setImage($image);
        $this->coursModel->setAction($action);

        return $this->coursModel->ajouterCours();
    }

    // Supprimer un cours
    public function supprimerCours($id)
    {
        $this->coursModel->setId($id);
        $this->coursModel->deletCours();
        header("Location: ../admin/cours.php");
        exit;
    }

    // Afficher les statistiques des cours
    public function afficherStatistiquesCours()
    {
        return CoursModel::StatiqueCours();
    }

    // Afficher tous les cours avec pagination
    public function afficherTousLesCours($itemsPerPage, $offset)
    {
        return CoursModel::afficherTousLesCours($itemsPerPage, $offset);
    }

    // Compter le nombre total de cours
    public function compterCours()
    {
        return CoursModel::countCours();
    }
}