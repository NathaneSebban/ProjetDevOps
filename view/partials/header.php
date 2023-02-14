<?php

// Connexion a la bd
$bdd = Core::getDatabase();
// Requête SQL
$sql = $bdd->query('SELECT * FROM categorie');
$categories = $sql->fetchAll();

?>

<nav class="navbar navbar-expand-lg bg-black text-white p-3 font-weight-bold">
    <div class="container-fluid">
        <a class="navbar-brand text-danger text-uppercase" href="../">FLIXDEO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
                <li class="nav-item">
                    <a class="nav-link<?php if (!isset($_GET['idCategorie'])) { ?> active <?php } ?>" aria-current="page" href="../">Nos films</a>
                </li>
                <?php foreach ($categories as $categorie) { ?>
                    <li class="nav-item">
                        <a class="nav-link <?php if (isset($categorie['idCateg'], $_GET['idCategorie'] ) AND $categorie['idCateg'] == $_GET['idCategorie']) {
                                                echo 'active';
                                            } ?>" href="../<?php echo $categorie['idCateg'] ?>"><?php echo $categorie['nom'] ?></a>
                    </li>
                <?php } ?>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Disabled</a>
                </li> -->
            </ul>
            <div class="d-flex align-items-center">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3 align-items-center">
                    <li class="nav-item">
                        <form class="d-flex align-items-center" role="search" method="get" action="../">
                            <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search" name="nameSearch">
                            <button type="submit" class="text-white" style="background: none; border:none;"><i class="fa fa-search ms-2" aria-hidden="true"></i></button>
                        </form>

                    </li>
                    <?php if (!isset($_SESSION['username'])) { ?>
                        <!-- Si pas connecté  -->
                        <li class="nav-item ms-2">
                            <a class="m-4" href="../Se-connecter">Se connecter</a>
                        </li>
                    <?php } else { ?>
                        <!-- Si connecté  -->
                        <li class="nav-item ms-2 dropdown text-white" style="position: relative;">
                            <button class="m-4 dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background: none; outline: none; border: none;">Bonjour
                                <?php echo $_SESSION['username'] ?> !</button>
                            <ul class="dropdown-menu bg-black">
                                <li class="mb-3">
                                    <a class="m-4" href="../Information">Informations</a>
                                </li>
                                <li>
                                    <a class="m-4" href="../Deconnexion">Déconnexion</a>
                                </li>
                            </ul>

                        </li>
                    <?php } ?>
                    <li class="nav-item" style="position: relative;">
                        <a href="../Votre-panier">
                            <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 1.7rem;"></i>
                            <?php if (isset($_SESSION['panier'])) { ?>
                                <span style="position: absolute;
    top: -7px;
    right: -7px;
    background-color: #e45362;
    height: 15px;
    width: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 12px;
    color: #fff;"><?php echo array_sum($_SESSION['panier']) ?></span>
                            <?php } ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<style>
    .dropdown-toggle::after {
        display: none !important;
    }
</style>