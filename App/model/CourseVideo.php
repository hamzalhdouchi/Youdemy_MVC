<?php 

namespace App\Model;
use app\Model\Cours;
use Config\Database;

class CourseVideo extends cours
{
    private $contenu_video;


    public function __construct($id = null, $titre = null, $description = null, $slogan = null, $categorie_id = null, $Tags_id = null, $Type = null, $image = null, $contenu_video = null, $action = null)
    {

        parent::__construct($id, $titre, $description, $slogan, $categorie_id, $Tags_id, $Type, $image, $action);

        $this->contenu_video = $contenu_video;
    }

    public function getVideo()
    {
        return $this->contenu_video;
    }

    public function setVideo($contenu_video)
    {
        $this->contenu_video = $contenu_video;
    }

    public function ajouterCours(){

    }
    
    public function afficherCours()
    {
        
    }


}