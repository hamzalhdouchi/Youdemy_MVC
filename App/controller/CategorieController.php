<?php

namespace App\Controller;

use App\Model\Categorie;
use PDOException;
use Exception;
class CategorieController
{
    private $categorie;

    public function __construct()
    {
        $this->categorie = new Categorie();
    }
    
    // public function index() {
    //     $categories = $this->categorie->getCategories();
    //     require_once __DIR__ . "/../view/categorie.php";
    // }


    public function index()
    {
        // if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        //     if (isset($_POST['supprimer']) && isset($_POST['supprimerV'])) {
        //         $id = intval($_POST['supprimerV']);
        //         $this->categorie->deleteCategory($id);
        //     }

        //     if (isset($_POST['submitcategorie']) && isset($_POST['id'])) {
        //         $cont = intval($_POST['id']);
        //         $this->categorie->ajoutCategorie($cont, $_POST);
        //     }
        // }

        $result = $this->categorie->getCategories();
        require_once __DIR__ . "/../view/admin/categorie.php";
    }

    public function ajouterCategorie()
    {
        try {
            $categorie = new Categorie();
            $idCont = intval($_POST['id']);
            $postdata = $_POST;
            $categorie->ajoutCategorie($idCont, $postdata);
            return "Catégorie ajoutée avec succès";
        } catch (PDOException $e) {
            error_log("Erreur lors de l'ajout de la catégorie : " . $e->getMessage());
            return "Erreur : " . $e->getMessage();
        }
    }

    public function deleteCategory($id)
    {

            
            $categorie = new Categorie();
            $id = intval($id);
            return $categorie->deleteCategory($id);
            header("location: /");
            exit();
        
    }

    public function getModifier($id)
    {
        // session_start();
        $categorie = new Categorie();
        $id = intval($id);
        $categoreiMO = $categorie->getModifier($id);

        

        require_once __DIR__ . '/../view/admin/formCtegorei.php';
    }

    public function updateCategory()
    { 
        
        try {
        
            if (!isset($_POST['id'], $_POST['categorie_name'], $_POST['categorie_slogan'])) {
                throw new Exception("Données manquantes !");
            }
    
            $categorie = new Categorie();
            $categorie->setIdC($_POST['id']); 
            $categorie->setNomCategorie($_POST['categorie_name']);
            $categorie->setSlogan($_POST['categorie_slogan']); 
    
            $result = $categorie->updateCategory();
            
            if ($result) {
                header("location: /");
                exit();
            }
            
        } catch (Exception $e) { 
            error_log("Erreur lors de la mise à jour : " . $e->getMessage());
            return false;
        }
       
    }
    
}
