<?php

use App\Controller\CategorieController;
use App\Controller\tagController;
use App\Controller\AuthController;
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




$router->run(); 
