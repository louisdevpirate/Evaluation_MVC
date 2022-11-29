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

    
        <!-- Titre h1 -->
        <div class="row my-5">
            <h1 class="col-12 text-center">Liste des véhicules</h1>
        </div>

        <div class="row">


                <?php

            

                if(!empty($vehicles)){
                ?>
                    <table class="col-12 table table-bordered text-center table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Marque</th>
                            <th>Modèle</th>
                            <th>Couleur</th>
                            <th>Immatriculation</th>
                            <th>Fiche</th>
                        </tr>
                    </thead>

                    <?php

                    foreach($vehicles as $vehicle){

                        ?>

                        <!-- Table liste des véhicules -->
                        
                            <tbody>
                                <td><?= htmlspecialchars($vehicle->getId()) ?></td>
                                <td><?= ucfirst(htmlspecialchars($vehicle->getBrand())) ?></td>
                                <td><?= ucfirst(htmlspecialchars($vehicle->getModel())) ?></td>
                                <td><?= ucfirst(htmlspecialchars($vehicle->getColor())) ?></td>
                                <td><?= strtoupper(htmlspecialchars($vehicle->getRegistration()) )?></td>
                                <td><a href="<?= PUBLIC_PATH . '/vehicles/fiche/?id=' . htmlspecialchars($vehicle->getId())?>">Voir la fiche</a></td>

                            </tbody>

                        



                    <?php
                    }
                    ?>
                </table>    
                
            <?php        
            }
            ?>    
        </div>



    <?php include VIEWS_DIR . '/partials/footer.php'; ?>
</body>

</html>