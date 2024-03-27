<?php

// Charge les fichiers des classes des contrôleurs.
// require __DIR__ . "/Controllers/StudentController.php";
require __DIR__ . "/Controllers/HomeController.php";
require __DIR__ . "/Controllers/UserController.php";
require __DIR__ . "/Controllers/FormController.php";
require __DIR__ . "/Controllers/ConnexionController.php";
require __DIR__ . "/Controllers/ModificationVolsController.php";
require __DIR__ . "/Controllers/PanierController.php";
require __DIR__ . "/Controllers/PanierController.php";


// Crée des instances des contrôleurs.
// $studentController = new StudentController();
$homeController = new HomeController();
$userController = new UserController();
$formController = new FormController();
$connexionController = new ConnexionController();
$modificationVolsController = new ModificationVolsController();
$panierController = new PanierController();

// Récupère l'URI de la requête actuelle pour déterminer la route demandée par l'utilisateur.
$route = $_SERVER['REQUEST_URI'];

// Utilise un switch pour diriger la requête vers le bon contrôleur en fonction de l'URI.
switch ($route) {
  case URL_HOMEPAGE: // Si l'URI correspond à la page d'accueil. | page d'accueil
    $homeController->index();
    break;
  case URL_USER: // Si l'URI correspond à la page des étudiants. | page de l'utilisateur
    $userController->index();
    break;
  case URL_FORM: // page du fomulaire d'inscription | 
    $formController->index();
    break;
  case URL_CONNEXION: //page du formulaire de connexion
    $connexionController->index();
    break;
  case URL_MODIFICATIONVOLS: //page de modification du vol
    $modificationVolsController->index();
    break;
  case URL_PANIER: //page de modification du vol
    $panierController->index();
    break;
  default: // Si aucune route correspondante n'est trouvée.
    $homeController->pageNotFound();
}
