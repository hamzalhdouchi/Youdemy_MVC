<?php

require __DIR__."/../../controllers/Etudiant.php";

if (isset($_GET['query']) && !empty($_GET['query'])) {
    $query = htmlspecialchars($_GET['query']);  
    

    $search = new Etudiant();
    $result = $search->search($query);
    
    echo json_encode($result); 
} else {
    echo json_encode([]);  
}
?>