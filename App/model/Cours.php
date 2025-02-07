<?php 

namespace App\Model;

use App\Config\Database;

abstract class Cours 
{
    protected $id;
    protected $titre;
    protected $description;
    protected $slogan;
    protected $categorie_id;
    protected $Tags_id;
    protected $Type = null;
    protected $connect;
    protected $image;

    protected $action;

    public function __construct($id = null, $titre = null, $description = null, $slogan = null, $categorie_id = null, $Tags_id = null, $Type = null, $image = null, $action = null)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->slogan = $slogan;
        $this->categorie_id = $categorie_id;
        $this->Tags_id = $Tags_id;
        $this->Type = $Type;
        $this->image = $image;
        $this->action = $action;
        $this->connect = Database::getInstance()->getConnection();
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getSlgun()
    {
        return $this->slogan;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->Type;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function getAction()
    {
        return $this->action;
    }

    public function setaction($action)
    {
        $this->action = $action;
    }
    public function setcategorie_id($categorie_id)
    {
        $this->categorie_id = $categorie_id;
    }

    public function setid($id)
    {
        $this->id = $id;
    }

    public function setTags_id($Tags_id)
    {
        $this->Tags_id = $Tags_id;
    }


    public function setTitre($titre)
    {
        $this->titre = $titre;
    }


    public function setSlgun($slogan)
    {
        $this->slogan = $slogan;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setType($Type)
    {
        $this->Type = $Type;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }

    abstract public function ajouterCours();

    abstract public function afficherCours();
}