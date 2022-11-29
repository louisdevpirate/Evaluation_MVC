<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <!-- Inclusion du contenu du fichier header.php -->
    <?php include VIEWS_DIR . '/partials/header.php'; ?>

</head>
<body>
    <!--Inclusion du menu-->
    <?php include VIEWS_DIR . '/partials/menu.php'; ?>

    <div class="container">

        <!-- Titre H1 -->
        <div class="row my-5">

        <h1 class="col-12 text-center">Accueil</h1>

        </div>

        <!-- Contenu de la page -->
        <div class="row">

            <div class="col-12 justify-content-center home-vehicles">
                <h1>Infos</h1>
<br>
                <p>Vous avez actuellement véhicules enregistrés dans la base de données</p>
            </div>

        </div>

    </div>



    <?php include VIEWS_DIR . '/partials/footer.php'; ?>
</body>
</html>