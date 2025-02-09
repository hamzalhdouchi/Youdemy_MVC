<?php 

namespace App\Model;
use App\Config\Database;
use PDO;



class Tags
{
    private $connect;

    private $id;
    private $name;
    private $color;

    public function __construct($id = null, $name = null, $color = null)
    {
        $this->connect = Database::getInstance()->getConnection();
        $this->id = $id;
        $this->name = $name;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getTags()
    {
        $sql = "SELECT * FROM tag";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();

        $tags = [];
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ($row);
            $tags[] = new self($row['id_tag'], $row['nom_tag'], $row['color']);
        }

        return $tags;
    }

    public function deleteTag()
    {
        $sql = "DELETE FROM tag WHERE id_Tag = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function addTag($name, $color)
    {
        $sql = "INSERT INTO tag(nom_Tag, color) VALUES (:name, :color)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':color', $color, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function getTagById($id)
    {
        $sql = "SELECT * FROM tag WHERE id_tag = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return new self($result['id_tag'], $result['nom_tag'], $result['color']);
    }

    public function updateTag()
    {
        $sql = "UPDATE tag SET nom_Tag = :name, color = :color WHERE id_Tag = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindParam(':color', $this->color, PDO::PARAM_STR);
        $stmt->execute();
    }

    public static function getTagsByCours($id)
    {
        $connect = Database::getInstance()->getConnection();
        $sql = "SELECT * FROM tag as T
                JOIN courstag as CT ON CT.idTag = T.id_Tag  
                WHERE idCours = :id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        $tags = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tags[] = new self($row['id_Tag'], $row['nom_Tag'], $row['color']);
        }

        return $tags;
    }
}