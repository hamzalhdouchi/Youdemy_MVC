<?php

namespace App\Controller;
use App\Model\Inscription;
use Exception;

class InscriptionController
{

    public function inscrireEtudiant($idEtudiant, $idCours)
    {
        try {

            $inscription = new Inscription(null, $idEtudiant, $idCours);

            $inscription->inscrire();

            echo "L'étudiant a été inscrit avec succès au cours.";
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function afficherInscription($idEtudiant, $idCours)
    {
        try {
            
            $inscription = new Inscription(null, $idEtudiant, $idCours);

            $inscriptionDetails = $inscription->afficherInscription();

            if ($inscriptionDetails) {
                
                echo "Inscription trouvée : " . $inscriptionDetails->getDateInscription();
            } else {
                echo "Aucune inscription trouvée pour cet étudiant et ce cours.";
            }
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}
