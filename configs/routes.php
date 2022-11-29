<?php
// Fichier contenant tous les points d'entrées du site (chaque route = une nouvelle page du site)


use Controllers\MainController;

$mainController = new MainController();

// Liste des routes avec leur contrôleur
switch(ROUTE){


    // Vos routes...
    case '/';
        $mainController->home();
    break;

    //Acces page d'ajout de véhicules
    case '/vehicles/ajouter-vehicule/';
        $mainController->newVehicle();
    break;



    // Si aucune des URL précédents ne match, c'est la page 404 qui sera appelée par défaut
    default:
        $mainController->page404();
    break;

}