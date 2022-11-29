<?php

namespace Controllers;



class MainController{


    // Vos contrôleurs de page...


    /**
     * Controlleur de la page d'accueil
     */
    public function home(): void
    {
        //Charge la vue "home.php" dans "views"
        include VIEWS_DIR . '/home.php';
    }


    public function newVehicle(): void
    {
          
        //Appels des variables

        if(
            isset($_POST['brand']) &&
            isset($_POST['model']) &&
            isset($_POST['color']) &&
            isset($_POST['registration'])

        ){

            if (mb_strlen($_POST['brand']) < 2 || mb_strlen($_POST['brand']) > 50) {
                $errors[] = 'Nom invalide (entre 2 et 50 caractères)';
            }

            if (mb_strlen($_POST['model']) < 2 || mb_strlen($_POST['model']) > 50) {
                $errors[] = 'Modèle invalide (entre 2 et 50 caractères)';
            }

            if (mb_strlen($_POST['color']) < 2 || mb_strlen($_POST['color']) > 50) {
                $errors[] = 'Couleur invalide (entre 2 et 50 caractères)';
            }

            if (mb_strlen($_POST['registration']) < 2 || mb_strlen($_POST['registration']) > 20) {
                $errors[] = 'Immatriculation invalide (entre 2 et 20 caractères)';
            }


            if(!isset($errors)){

                $newVehicle = new Vehicle();

                $newVehicle
                    ->setBrand( $_POST['brand'])
                    ->setModel( $_POST['model'])
                    ->setColor( $_POST['color'])
                    ->setRegistration( $_POST['registration'])
                ;

                $fruitManager = new FruitManager();

                $fruitManager->save( $newFruit );

                $success = 'Le fruit à bien été ajouté!';
                
            }



        }

        //Charge la vue "add-vehicles.php" dans "views"

        include VIEWS_DIR . '/add_vehicles.php';

    }


    /**
     * Contrôleur de la page 404
     */
    public function page404(): void
    {

        // Modifie le code HTTP pour qu'il soit bien 404 et non 200
        header("HTTP/1.1 404 Not Found");

        // Charge la vue 404.php dans le dossier "views"
        include VIEWS_DIR . '/404.php';

    }

}