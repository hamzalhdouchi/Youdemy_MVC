<?php

namespace App\Controller;
use App\Model\CoursDocument;
use App\Model\Tags;
use App\Model\UserAuth;
use App\Model\Etudiant;
use App\Model\Inscription;


class EtudiantController
{
    private $etudiantModel;

    public function __construct()
    {
        $this->etudiantModel = new Etudiant();
    }

    public function filter($tagId)
    {
        $filteredCourses = $this->etudiantModel->filter($tagId);
        
        // Vous pouvez formater ou manipuler les données ici si nécessaire.
        
        return $filteredCourses;
    }

    public function search($query)
    {
        $courses = $this->etudiantModel->search($query);
        

        return $courses;
    }

    public function myCours()
    {
        $id_Etudiant = $_SESSION['user_id'];
        $myCoursesData = $this->etudiantModel->myCours($id_Etudiant);

        $myCourses = [];
        foreach ($myCoursesData as $row) {
            $Cours = new CoursDocument(
                $row['id_cours'],
                $row['titre'],
                $row['description'],
                $row['Slgan'],
                null,
                null,
                null,
                $row['Image'],
                $row['contenu']
            );
            $User = new UserAuth(null, null, null, null, null, $row['enseignant_nom'], $row['enseignant_prenom'], $row['Image_User']);
            $Tags = new Tags(null, $row['tags']);
            $Inscription = new Inscription(null, $id_Etudiant, $row['id_cours'], $row['dateInscription']);

            $myCourses[] = [
                'Cours' => $Cours,
                'Tags' => $Tags,
                'Inscription' => $Inscription,
                'User' => $User,
            ];
        }

        $result = $myCourses;
        require_once __DIR__."/../view/Etudiant/MyCours.php";
    }
}
?>
