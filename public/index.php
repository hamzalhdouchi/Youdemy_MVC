<?php

use App\Controller\CategorieController;
use App\Controller\tagController;
use App\Controller\AuthController;
use App\Controller\CoursController;
use App\Controller\EtudiantController;
use App\Core\Router;

require_once __DIR__ . "/../vendor/autoload.php";

session_start();
$router = new Router();

$router->add('GET', '/', CategorieController::class, 'index');
$router->add('GET', '/edit-categorie', CategorieController::class, 'getModifier');
$router->add('GET', '/edit-categorie/{id}', CategorieController::class, 'getModifier');
$router->add('POST', '/setModification', CategorieController::class, 'updateCategory');
$router->add('POST', '/Delete/{id}', CategorieController::class, 'deleteCategory');
$router->add('POST', '/AjouterCategorie', CategorieController::class, 'ajouterCategorie');

$router->add('GET', '/Tags', tagController::class, 'index');
$router->add('POST', '/DeleteTag/{id}', tagController::class, 'deleteTag');
$router->add('POST', '/AddTag', tagController::class, 'addTag');
$router->add('POST', '/EditeTag/{id}', tagController::class, 'getTagById');
$router->add('POST', '/updateTag', tagController::class, 'updateTag');

$router->add('GET', '/inscription', AuthController::class, 'indexLogin');
$router->add('POST', '/SinUp', AuthController::class, 'createUser');
$router->add('POST', '/login', AuthController::class, 'login');
$router->add('GET', '/Admin', AuthController::class, 'Index');
$router->add('POST', '/aprove', AuthController::class, 'aproveUser');
$router->add('GET', '/Users', AuthController::class, 'getAllUser');
$router->add('POST', '/Status', AuthController::class, 'updateStatus');
$router->add('POST', '/supprime/{id}', AuthController::class, 'deleteUser');
$router->add('GET', '/Statistique', AuthController::class, 'AdminStatistique');

$router->add('GET', '/Cours', CoursController::class, 'afficherTousLesCours');
$router->add('POST', '/AjouterCours', CoursController::class, 'ajouterCours');

$router->add('GET', '/Etudiant', EtudiantController::class, 'myCours');






$router->run(); 
