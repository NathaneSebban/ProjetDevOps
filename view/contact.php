<?php

session_start();

// Database connexion 
require('../Config/setup.php');

// Controller 
require('../Controller/ContactController.php');


// utilisation de contact class 
use Contact\Contact;

// appel de la class
$contact = new Contact;

// Lancement de la fonction
//$nom_pages->nom_methode();


?>


<!DOCTYPE html>
<html lang='fr'>

<head>

    <?php include('./partials/head.php') ?>
    <title>Flixdeo - Nous contacter</title>

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
            <h2 class="text-center mb-5" style="color: rgb(220, 220, 220);">Nous contacter</h2>
            <form action="" method="post" class="d-flex flex-column align-items-center">
                <div class="input-group mb-4">
                    <input type="text" style="border-radius: 7px; background-color: rgba(255, 255, 255, 0.50) !important;
    backdrop-filter: blur(7px) !important;" class="form-control" placeholder="Prénom" name="prenom" aria-label="Username"
                        aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-4">
                    <input type="text" style=" border-radius: 7px; background-color: rgba(255, 255, 255, 0.50) !important;
    backdrop-filter: blur(7px) !important;" class="form-control" placeholder="Nom" name="nom" aria-label="Username"
                        aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-4">
                    <input type="email" style="border-radius: 7px; background-color: rgba(255, 255, 255, 0.50) !important;
    backdrop-filter: blur(7px) !important;" class="form-control" placeholder="E-mail" name="email" aria-label="Username"
                        aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-4">
                    <input type="text" style="border-radius: 7px; background-color: rgba(255, 255, 255, 0.50) !important;
    backdrop-filter: blur(7px) !important;" class="form-control" placeholder="Téléphone" name="numero" aria-label="Username"
                        aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-4">
                    <textarea type="text" style="border-radius: 7px; background-color: rgba(255, 255, 255, 0.50) !important;
    backdrop-filter: blur(7px) !important;" class="form-control" placeholder="Message" name="message"
                        aria-label="Username" aria-describedby="basic-addon1" required></textarea>
                </div>


                <button type="submit" name="envoyer" value="valider" class="btn btn-danger mt-5">Envoyer</button>

            </form>
        </div>
    </main>

    <!-- Le bas de page -->
    <footer>
        <?php include('./partials/footer.php') ?>
    </footer>


</body>

</html>