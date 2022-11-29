<?php
// Fichier contenant les paramètres de configuration du site


// Création d'une constante contenant la route actuelle
define('ROUTE', request_path());

// Emplacement du dossier qui contient les vues du site
define('VIEWS_DIR', __DIR__ . '/../views');


// URL du dossier "public" (avec fichiers CSS, JS, images, etc...), servira pour construire les liens dans la partir frontend
define('PUBLIC_PATH', mb_substr($_SERVER['SCRIPT_NAME'], 0, -(mb_strlen(basename(__FILE__)))));


// Paramètres de connexion à la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'eval_php_mvc');
define('DB_USER', 'root');
define('DB_PASSWORD', '');




// ATTENTION
// Ne pas toucher ce code, il sert à vérifier que vous avez bien défini vos identifiants de connexion à la base de données du site !
if(DB_HOST == 'xxx' || DB_NAME == 'xxx' || DB_USER == 'xxx' || DB_PASSWORD == 'xxx'){
    die('<p style="color:red;font-size:2rem;">Attention : avant de continuer, pensez à modifier vos informations de connexion à votre base de données dans le fichier "configs/params.php" ! (adresse, nom de base de données, identifiant et mot de passe)</p>');
}