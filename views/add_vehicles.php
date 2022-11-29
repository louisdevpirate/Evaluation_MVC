<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Accueil-Véhicules</title>
    <!-- Inclusion du contenu du fichier header.php -->
    <?php include VIEWS_DIR . '/partials/header.php'; ?>

</head>

<body>
    <!--Inclusion du menu-->
    <?php include VIEWS_DIR . '/partials/menu.php'; ?>

    <div class="container">

        <!-- Titre H1 -->
        <div class="row my-5">

            <h1 class="col-12 text-center">Ajouter un véhicule</h1>

        </div>

        <!-- Contenu de la page -->
        <div class="row">


            <?php

            // Si l success existe, on l'affiche
            if (isset($success)) {

                echo '<div class="alert alert-success text-center">' . $success . '</div>';
            } else {

            ?>

                <!-- Formulaire d'ajout de véhicule -->
                <form class="col-12 col-md-6 mx-auto" action="<?= PUBLIC_PATH ?>/vehicles/ajouter-vehicule/" method="POST">

                    <?php

                    // Si il y a des erreurs à afficher
                    if (isset($errors)) {

                        foreach ($errors as $error) {
                            echo '<div class="alert alert-danger">' . $error . '</div>';
                        }
                    }

                    ?>

                    <div class="mb-3">
                        <label for="brand" class="form-label">Marque</label>
                        <input name="brand" id="brand" class="form-control" type="text">
                    </div>

                    <div class="mb-3">
                        <label for="model" class="form-label">Modèle</label>
                        <input name="model" id="model" class="form-control" type="text">
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">Couleur</label>
                        <input name="color" id="color" class="form-control" type="text">
                    </div>

                    <div class="mb-3">
                        <label for="registration" class="form-label">Immatriculation</label>
                        <input name="registration" id="registration" class="form-control" type="text">
                    </div>

                    <div class="mb-3">
                        <input type="submit" class="col-12 btn btn-success">
                    </div>

                </form>

            <?php
            }
            ?>
        </div>

    </div>



    <?php include VIEWS_DIR . '/partials/footer.php'; ?>
</body>

</html>