<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?=ucfirst(htmlspecialchars($vehicle->getBrand()))?></title>
    <!-- Inclusion du contenu du fichier header.php -->
    <?php include VIEWS_DIR . '/partials/header.php'; ?>

</head>
<body>
    <!--Inclusion du menu-->
    <?php include VIEWS_DIR . '/partials/menu.php'; ?>

    <div class="container">

        <!-- Titre H1 -->
        <div class="row my-5">

        <h1 class="col-12 text-center"> <?=ucfirst(htmlspecialchars($vehicle->getBrand()))?></h1>

        </div>

        <!-- Contenu de la page -->
        <div class="row">

            <!-- Lien de retour à la liste des véhciules -->
            <div class="col-12 my-3 text-center">
                <a href="<?= PUBLIC_PATH ?>/vehicles/liste/">Revenir à la liste des véhicules</a>
            </div>

            <div class="col-12 text-center">


                <div class="my-4 text-center">
                    <a class="text-success me-3" href="<?= PUBLIC_PATH . '/vehicles/modifier/?id=' . htmlspecialchars($vehicle->getId()) ?>"><i class="fas fa-edit me-2"></i>Modifier le véhicule</a>
                    <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce véhicule ?')" class="text-danger" href="<?= PUBLIC_PATH . '/vehicles/supprimer/?id=' . htmlspecialchars($vehicle->getId()) ?>"><i class="fas fa-times me-2"></i>Supprimer le véhicule</a>
                </div>

            </div>

            
        </div>

            <!-- Affichage des infos du véhicule (avec htmlspecialchars pour se protéger des failles XSS) -->
            <div class="row">
                <div class="col-12">

                    <div class="card text-center">
                        <div class="card-body">

                        Marque : <b><?=ucfirst(htmlspecialchars($vehicle->getBrand()))?></b> | Modèle : <b><?=ucfirst(htmlspecialchars($vehicle->getModel()))?></b> | Couleur : <b><?=ucfirst(htmlspecialchars($vehicle->getColor()))?></b> | Immatriculation : <b><?= htmlspecialchars(($vehicle->getRegistration()))?></b>

                        </div>
                    </div>

                </div>
            </div>
            

        </div>

    </div>



    <?php include VIEWS_DIR . '/partials/footer.php'; ?>
</body>
</html>