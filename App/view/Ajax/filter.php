<?php
require __DIR__ . "/../../controllers/Etudiant.php";
require_once __DIR__ ."/../../controllers/CourseController.php";
if (isset($_GET['tag']) && !empty($_GET['tag'])) {
  
    $tagId = filter_var($_GET['tag'], FILTER_VALIDATE_INT);     
    if ($tagId === false) {
        echo json_encode(["error" => "Invalid tag ID"]);
        exit;
    }

    $filter = new Etudiant();
    $result = $filter->filter($tagId);

    echo json_encode($result);
} else {
    echo json_encode([]);  
}
