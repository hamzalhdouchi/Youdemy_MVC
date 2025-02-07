<?php
namespace App\Controller;
use App\Model\tags;

class tagController
{
    private $tagsModel;

    public function __construct()
    {
        $this->tagsModel = new Tags();
    }

    public function index()
    {
        $tags = $this->tagsModel->getTags();
        require_once __DIR__."/../view/admin/Tags.PHP";
    }

    public function deleteTag($id)
    {
        $this->tagsModel->setId($id);
        $this->tagsModel->deleteTag();
        header("Location: /Tags");
        exit;
    }

    public function addTag()
    {
        $idCont = htmlspecialchars($_POST['id']);
        $postdata = $_POST;
        for ($i = 0; $i <= $idCont; $i++) {
            $name = trim($postdata["tag_name_$i"]);
            $color = $postdata["tag_color_$i"];
            $this->tagsModel->addTag($name, $color);
        }
        header("Location: /Tags");
        exit;
    }

    public function getTagById($id)
    {
        $id = intval($id);
        $tagDetails = $this->tagsModel->getTagById($id);

        require_once __DIR__."/../view/admin/formTag.php";
    }

    public function updateTag()
    {
        $this->tagsModel->setId($_POST['id']);
        $this->tagsModel->setName($_POST['tag_name']);
        $this->tagsModel->setColor($_POST['tag_color']);
        $this->tagsModel->updateTag();
        header("Location: /Tags");
        exit;
    }

    public static function getTagsByCours($id)
    {
        return Tags::getTagsByCours($id);
    }
}

