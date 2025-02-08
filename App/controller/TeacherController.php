<?php
namespace App\Controller;
use App\Model\Teacher;
use Exception;
if (isset($_SESSION['user_id'])) {
    echo "Data exists in session.";
} else {
    echo "No data in session.";
}
class TeacherController
{
    private $teacherModel;

    public function __construct()
    {
        $this->teacherModel = new Teacher(); 
    }

    public function showTeacherDashboard()
    {
        try {
            
            $idEnseignant = $_SESSION['user_id'];
            $nombreDeCours = $this->teacherModel->nombreDeCours($idEnseignant);
            $nombreEtudiants = $this->teacherModel->nombreEtudiantsInscrits($idEnseignant);

            
            $totalCours =  $nombreDeCours;
            $totalEtudiant =    $nombreEtudiants;
            require_once __DIR__. "/../view/teacher/Etudiant.php";
            
        } catch (Exception $e) {
            
            error_log("Erreur dans la récupération des données : " . $e->getMessage());
            return ["error" => "Impossible de récupérer les informations."];
        }
    }
}
