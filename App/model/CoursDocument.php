<?php 

namespace App\Model;
use app\Model\Cours;
use Config\Database;

class CoursDocument extends Cours
{
    private $contenu_document;

    public function __construct($id = null, $titre = null, $description = null, $slogan = null, $categorie_id = null, $Tags_id = null, $Type = 'video', $image = null, $contenu_document = null)
    {

        parent::__construct($id, $titre, $description, $slogan, $categorie_id, $Tags_id, $Type, $image);

        $this->contenu_document = $contenu_document;
    }

    public function getDocument()
    {
        return $this->contenu_document;
    }

    public function setDocument($contenu_document)
    {
        $this->contenu_document = $contenu_document;
    }

    public function ajouterCours()
    {
        
    }
    public function afficherCours()
    {
        
    }
}