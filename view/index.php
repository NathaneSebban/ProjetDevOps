<?php

session_start();

// Database connexion 
require('../Config/setup.php');

// Controller 
require('../Controller/IndexController.php');

// utilisation de contact class 
use Index\Index;

// appel de la class
$index = new Index;

$products = $index->getProducts();


?>


<!DOCTYPE html>
<html lang='fr'>

<head>

    <?php include('./partials/head.php') ?>
    <title>Flixdeo - Nos films</title>

</head>

<body>

    <!-- Le haut de page -->
    <header>
        <?php include('./partials/header.php') ?>
    </header>

    <!-- Le contenue principal de la page -->
    <main class="products">
        <div class="p-3">
            <h2 class="m-3 text-white">Nos films</h2>
            <hr class="m-3">
            <div class="row">
                <?php if ($products) { ?>
                <?php foreach ($products as $product) { ?>
                <div class="col d-flex m-4 product" style="position: relative; max-width: 200px;">
                    <a href="../product/<?php echo $product['id'] ?>" class="hidden-button">En savoir plus<i
                            class="fa fa-info-circle ms-2" aria-hidden="true"></i></a>
                    <img src="<?php echo $product['image'] ?>" alt="" class="img-product">
                </div>
                <?php } ?>
                <?php } else { ?>
                <div class="m-4 text-white" style="font-size: 1.3rem;">
                    Aucun film ne correspond à : <?php echo $_GET['nameSearch']; ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <!-- Le bas de page -->
    <footer>
        <?php include('./partials/footer.php') ?>
    </footer>


</body>

</html>