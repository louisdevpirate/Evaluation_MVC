<!-- Menu principal du site -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark main-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-lemon main-logo me-2"></i>Wikifruit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <!-- Bouton accueil-->
                <li class="nav-item">
                    <a class="nav-link<?= ROUTE == '/' ? ' active' : '' ?>" href="<?= PUBLIC_PATH ?>/">Accueil</a>
                </li>


                <!--Bouton d'ajout de véhicule-->
                <li class="nav-item">
                <a class="nav-link<?= ROUTE == '/vehicles/ajouter-vehicule/' ? ' active' : '' ?>" href="<?= PUBLIC_PATH ?>/vehicles/ajouter-vehicule/">Véhicules</a>
                </li>

            </ul>
        </div>
    </div>
</nav>