<?php

namespace App\Controller;

use App\Model\CoursDocument;
use App\Model\Cours;
use App\Model\Tags;
use App\Model\Categorie;
use App\Model\CoursVideo;
use App\Model\Inscription;

use Exception;

class CoursController
{
    private $coursModel;
    private $tagsModel;
    private $categorieModel;
    private $coursVideoModel;
    private $inscriptionModel;

    public function __construct()
    {
        $this->coursModel = new CoursDocument();
        $this->tagsModel = new Tags();
        $this->categorieModel = new Categorie();
        $this->coursVideoModel = new CoursVideo();
        $this->inscriptionModel = new Inscription();
    }

    // Afficher la page de création de cours
    public function createCour()
    {
        $categoreis = $this->categorieModel->getCategories();
        $tag = $this->tagsModel->getTags();
        require_once __DIR__ . "/../view/courses/create-course.php";
    }

    // Supprimer un cours
    public function supprimerCours()
    {
        $id = $_POST['id_cours'];
        $this->coursModel->setId($id);
        $this->coursModel->deletCours();
        header("Location: /afficherCours");
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
        $tags = $this->tagsModel->getTags();
        $categorei = $this->categorieModel->getCategories();

        $totalCours = Cours::countCours();
        $totalPages = ($totalCours > 0) ? ceil($totalCours / $itemsPerPage) : 1;

        require_once __DIR__ . "/../view/courses/HOME.php";
    }

    public function compterCours()
    {
        return CoursDocument::countCours();
    }

    public function afficherCoursParId($id)
    {
        try {
            $idE = $_SESSION["user_id"];
            $this->inscriptionModel->setIdCours($id);
            $this->inscriptionModel->setIdEtudiant($idE);
            $cours = $this->coursModel->AffecherCoursByCategorei($id);
            $result = $this->inscriptionModel->afficherInscription();
            var_dump($cours["Cours"]->getId());
            require_once __DIR__ ."/../view/courses/course-details.php";
        } catch (Exception $e) {
            echo "<script>alert('" . addslashes($e->getMessage()) . "');</script>";
            return null;
        }
    }

      public function Inscription($id)
    {
        try {
            $idE = $_SESSION["user_id"];
            $this->inscriptionModel->setIdCours($id);
            $this->inscriptionModel->setIdEtudiant($idE);
            $this->inscriptionModel->inscrire();
     } catch (Exception $e) {
        echo "not inscription" . $e->getMessage();
    }
}

    public function ajouterCours()
    {
        try {
            if ($_POST['Type'] == 'document') {
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

    public function afficherCours()
    {
        try {
            $id = $_SESSION['user_id'];
            $coursVide = $this->coursVideoModel->afficherCours($id);
            $couess = $this->coursModel->afficherCours($id);
            require_once __DIR__ . "/../view/courses/instructor-course.php";
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return [];
        }
    }


    public function modifierCoursVideo($id)
    {
        try {
            $idE = $_SESSION['user_id'];
            $title = htmlspecialchars($_POST['Title']);
                $slug = htmlspecialchars($_POST['Slug']);
                $Categorei = $_POST['Categorei'];
                ($_POST['Slug']);
                if (isset($_POST['Tags']) && is_array($_POST['Tags'])) {
                    $Tags = $_POST['Tags'];  // $Tags is now an array
                
                $About = htmlspecialchars($_POST['About']);
                $centenu = $_POST['centenu_video'];
                $image = $_FILES['image'];
                $this->coursVideoModel->setid($idE);
                $this->coursVideoModel->setTitre($title);
                $this->coursVideoModel->setSlgun($slug);
                $this->coursVideoModel->setDescription($About);
                $this->coursVideoModel->setVideo($centenu);
                $this->coursVideoModel->setCategorieId($Categorei);
                $this->coursVideoModel->setTagsId($Tags);
                $this->coursVideoModel->setimage($image);
                }
            $this->coursVideoModel->mettreAJourCours($id);
            header("Location: /afficherCours");
            exit;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function modifierCoursDocument($id)
    {
        try {
            $idE = $_SESSION['user_id'];
            $title = htmlspecialchars($_POST['Title']);
                $slug = htmlspecialchars($_POST['Slug']);
                $Categorei = $_POST['Categorei'];
                $Tags = $_POST['Tags'];
                $About = htmlspecialchars($_POST['About']);
                $centenu = $_POST['centenu_video'];
                $image = $_FILES['image'];
                $this->coursModel->setid($idE);
                $this->coursModel->setTitre($title);
                $this->coursModel->setSlgun($slug);
                $this->coursModel->setDescription($About);
                $this->coursModel->setDocument($centenu);
                $this->coursModel->setCategorieId($Categorei);
                $this->coursModel->setTagsId($Tags);
                $this->coursModel->setimage($image);
            $this->coursModel->Modifier($id);
            header("Location: /path/to/success/page");
            exit;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function afficherCoursParCategorie($id_categorie)
    {
        try {
            $result =  $this->coursVideoModel->afficherCoursParCategorie($id_categorie);
            
            if ($result == null) {
              header("Location: /Cours");
              exit;
            }
            require_once __DIR__. "/../view/courses/course_By_categorei.php";
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return [];
        }
    }

    public function afficherCoursSpecifique($id)
    {
        try {
            $idE = $_SESSION['user_id'];
            $tag = $this->tagsModel->getTags();
            $categoreis = $this->categorieModel->getCategories();
            $this->coursModel->setid($idE);
            $this->coursModel->setid($idE);
            $resultVideo = $this->coursVideoModel->modiferCours($id);
            $Document = $this->coursModel->modiferCours($id);

            require_once __DIR__."/../view/courses/coursEdite.php";
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }

    public function afficherCoursDashboard()
    {
        try {
            $result =  $this->coursVideoModel->afficherCoursDashboard();
           
            require_once __DIR__. "/../view/admin/aprovCours.php";
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return [];
        }
    }

    public function approuverCours()
    {
        try {
            $this->coursVideoModel->setid($_POST["id"]);
            
             $this->coursVideoModel->approuverCours();
             header("Location: /AproveCours");

            exit;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}