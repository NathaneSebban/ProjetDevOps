<?php

session_start();


// Database connexion 
require('../Config/setup.php');

// Controller 
require('../Controller/LoginController.php');


// utilisation de contact class 
use Login\Login;

// appel de la class
$login = new Login;

// Lancement de la fonction
//$nom_pages->nom_methode();


?>


<!DOCTYPE html>
<html lang='fr'>

<head>

    <?php include('./partials/head.php') ?>
    <title>Flixdeo - Connexion</title>

</head>

<body>

    <!-- Le haut de page -->
    <header>
        <?php include('./partials/header-two.php') ?>
    </header>

    <!-- Le contenue principal de la page -->
    <main class="mt-5">
        <div class="container mx-auto col-4 rounded p-5 d-flex flex-column justify-content-center"
            style="backdrop-filter: blur(2px);" style="border: 6px solid #fff">
            <h2 class="text-center mb-5" style="color: rgb(220, 220, 220)">Se connecter</h2>
            <form action="" method="post" class="d-flex flex-column align-items-center">
                <div class="input-group mb-4">
                    <input type="text" style="border-radius: 7px; background-color: rgba(255, 255, 255, 0.50)  !important;
    backdrop-filter: blur(7px) !important;" class="form-control" placeholder="Nom d'utilisateur" name="username"
                        aria-label="Username" aria-describedby="basic-addon1" required>
                </div>

                <div class="input-group">
                    <input type="password" style=" border-radius: 7px; background-color: rgba(255, 255, 255, 0.50) !important;
    backdrop-filter: blur(7px) !important;" class="form-control" placeholder="Mot de passe" name="password"
                        aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                </div>

                <div class="input-group">
                    <a href="../Inscription" class="mt-4">Pas encore de compte ?</a>
                </div>

                <button type="submit" name="login" value="valider" class="btn btn-danger mt-5">Valider</button>

            </form>
        </div>
    </main>

</body>

</html>