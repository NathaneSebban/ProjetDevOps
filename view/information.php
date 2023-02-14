<?php

session_start();

// Setup
require('../Config/setup.php');

// Controller 
require('../Controller/InformationController.php');


// utilisation de contact class 
use Information\Information;

// appel de la class
$Information = new Information;

$informations = $Information->getInformation();

?>


<!DOCTYPE html>
<html lang='fr'>

<head>

    <?php include('./partials/head.php') ?>
    <title>Flixdeo - Information</title>
    <script src="https://kit.fontawesome.com/87c2302396.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Le haut de page -->
    <header>
        <?php include('./partials/header.php') ?>
    </header>

    <!-- Le contenue principal de la page -->
    <main class="mt-5 info p-5 products">
        <h2 class="m-3 text-white">Vos informations réseaux</h2>
        <hr class="mb-5 m-3">
        <div class="row">
            <?php foreach ($informations as $information) { ?>
            <div class="col mt-2">
                <div class="card bg-dark text-white">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex justify-content-between m-2">
                                <div class="media-body text-right">
                                    <h3><?php echo $information[0] ?></h3>
                                    <span><?php echo $information[1] ?></span>
                                </div>
                                <div class="align-self-center">
                                    <?php echo $information[2] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="col mt-5">
            <div class="card bg-dark text-white">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex justify-content-between m-2">
                            <div class="media-body text-right">
                                <h3>Écran</h3>
                                <span id="ecran">
                                    <script>
                                    screen.height
                                    </script>
                                </span>
                            </div>
                            <div class="align-self-center">
                                <i class="fa-solid fa-display"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
    let ecran = screen.width + " * " + screen.height
    document.getElementById('ecran').innerHTML = ecran
    </script>

    <!-- Le bas de page -->
    <footer>
        <?php include('./partials/footer.php') ?>
    </footer>


</body>

</html>