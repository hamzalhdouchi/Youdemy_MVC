<?php

namespace App\Controller;

use App\Model\CoursDocument;
use App\Model\Cours;
use App\Model\Tags;
use App\Model\Categorie;
use App\Model\CoursVideo;
use Exception;

class CoursController
{
    private $coursModel;
    private $tagsModel;
    private $categorieModel;
    private $coursVideoModel;

    public function __construct()
    {
        $this->coursModel = new CoursDocument();
        $this->tagsModel = new Tags();
        $this->categorieModel = new Categorie();
        $this->coursVideoModel = new CoursVideo();
    }

    // Afficher la page de création de cours
    public function createCour()
    {
        $categoreis = $this->categorieModel->getCategories();
        $tag = $this->tagsModel->getTags();

        require_once __DIR__ . "/../view/courses/create-course.php";
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
        return CoursDocument::StatiqueCours();
    }

    // Afficher tous les cours avec pagination
    public function afficherTousLesCours()
    {
        $itemsPerPage = 9;
        $currentPage = isset($_GET['page']) ? filter_var($_GET['page'], FILTER_VALIDATE_INT) : 1;
        if ($currentPage < 1) $currentPage = 1;

        $offset = ($currentPage - 1) * $itemsPerPage;
        $courses = Cours::afficherTousLesCours($itemsPerPage, $offset);
        $tags = $this->tagsModel->getTags();
        $categories = $this->categorieModel->getCategories();

        $totalCours = Cours::countCours();
        $totalPages = ($totalCours > 0) ? ceil($totalCours / $itemsPerPage) : 1;

        require_once __DIR__ . "/../view/courses/HOME.php";
    }

    // Compter le nombre total de cours
    public function compterCours()
    {
        return CoursDocument::countCours();
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

    // Modifier un cours de type document
    public function modifierCoursDocument($id, $titre, $description, $slgan, $categorie_id, $tags_id, $image, $contenu_document)
    {
        try {
            $this->coursModel->setTitre($titre);
            $this->coursModel->setDescription($description);
            $this->coursModel->setSlgun($slgan);
            $this->coursModel->setCategorieId($categorie_id);
            $this->coursModel->setTagsId($tags_id);
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

    // Ajouter un cours (document ou vidéo)
    public function ajouterCours()
    {
        try {
            if ($_POST['Type'] == 'document') {

                // Configuration des données pour un cours de type document
                $idE = $_SESSION['user_id'];
                $this->coursModel->setid($idE);
                $this->coursModel->setTitre($_POST['Title']);
                $this->coursModel->setDescription($_POST['About']);
                $this->coursModel->setSlgun($_POST['Slug']);
                $this->coursModel->setCategorieId($_POST['Categorei']);
                $this->coursModel->setTagsId($_POST['Tags']);
                $this->coursModel->setImage($_FILES['image']);
                $this->coursModel->setDocument($_FILES['centenu_pdf']);

                if ($this->coursModel->ajouterCours()) {
                    header("Location: /Create");
                    exit;
                } else {
                    throw new Exception("Erreur lors de l'ajout du cours document.");
                }
            } elseif(($_POST['Type'] == 'video')) {
                
                $idE = $_SESSION['user_id'];
                $this->coursVideoModel->setid($idE);
                $this->coursVideoModel->setTitre($_POST['Title']);
                $this->coursVideoModel->setTitre($_POST['Title']);
                $this->coursVideoModel->setDescription($_POST['About']);
                $this->coursVideoModel->setSlgun($_POST['Slug']);
                $this->coursVideoModel->setCategorieId($_POST['Categorei']);
                $this->coursVideoModel->setTagsId($_POST['Tags']);
                $this->coursVideoModel->setType('video');
                $this->coursVideoModel->setImage($_FILES['image']);
                $this->coursVideoModel->setVideo($_POST['centenu_video']);

                if ($this->coursVideoModel->ajouterCours($idE)) {
                    header("Location: /Create");
                    exit;
                } else {
                    throw new Exception("Erreur lors de l'ajout du cours vidéo.");
                }
            }
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function afficherCoursVideo($id = null)
    {
        try {
            return $this->coursVideoModel->afficherCours($id);
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return [];
        }
    }

    public function supprimerCoursVideo($id)
    {
        try {
            $this->coursVideoModel->supprimerCours($id);
            header("Location: /path/to/success/page");
            exit;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function modifierCoursVideo($id, $data)
    {
        try {
            $this->coursVideoModel->mettreAJourCours($id, $data);
            header("Location: /path/to/success/page");
            exit;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function afficherCoursParCategorie($id_categorie)
    {
        try {
            return $this->coursVideoModel->afficherCoursParCategorie($id_categorie);
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return [];
        }
    }

    public function afficherCoursSpecifiqueVideo($id)
    {
        try {
            return $this->coursVideoModel->afficherCoursSpecifique($id);
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }

    public function afficherCoursDashboard()
    {
        try {
            return $this->coursVideoModel->afficherCoursDashboard();
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return [];
        }
    }

    public function approuverCours($id)
    {
        try {
            $this->coursVideoModel->approuverCours($id);
            header("Location: /path/to/success/page");
            exit;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}