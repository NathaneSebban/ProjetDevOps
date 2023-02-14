<?php

session_start();

// Database connexion 
require('../Config/setup.php');

// Controller 
require('../Controller/ProductController.php');


// utilisation de contact class 
use Product\Product;

// appel de la class
$Product = new Product;

// Lancement de la fonction
$product = $Product->getProduct();

?>


<!DOCTYPE html>
<html lang='fr'>

<head>

    <?php include('./partials/head.php') ?>
    <title>Title</title>

</head>

<body>

    <!-- Le haut de page -->
    <header>
        <?php include('./partials/header.php') ?>
    </header>

    <!-- Le contenue principal de la page -->
    <main class="d-flex align-items-baseline products" style="position: relative;">
        <div class='container-fluid m-5 d-flex justify-content-between ad' style="flex-wrap: wrap;">
            <div class="card mt-5" style="width: 30%;">
                <img class='img-thumbnail' src="<?php echo $product['image'] ?>" width="70%" height="70%" />
                <div class="card-body text-white" style="width: 100%;">
                    <div class='cvp'>
                        <h5 class="card-title"><?php echo $product['nom'] ?> / <?php echo $product['annee'] ?> /
                            <?php echo $product['duree'] ?> minutes</h5>
                        <h5 class="card-title font-weight-bold"><?php echo $product['1'] ?></h5>
                        <?php for ($i =0; $product['note'] > $i; $i++) { ?>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <?php } ?>
                        <?php $invalid = 10 - $product['note'] ?>
                        <?php for ($t =0; $invalid > $t; $t++) { ?>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <?php } ?>
                        <p class="card-text"><?php echo $product['prix'] ?> €</p>
                        <a href="../ajoutPanier/<?php echo $product['id'] ?>" class="p-2 d-block button-prim px-auto"
                            style="opacity: 1; padding: 5px; width: 70%">Ajouter au
                            panier <i class="fa fa-cart-plus ms-2" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="card mt-5 ms-5" style="width: 60%;">
                <iframe src="<?php echo $product['ba'] ?>"
                    style="height: 520px; width: 100%; border: 6px #fff solid; border-radius: 5px;"></iframe>
                <div class="card-body text-white mt-5" style="padding: 0">
                    <div class='cvp'>
                        <h5 class="card-title" style="width: 100%; text-align: justify">Résume :
                            <?php echo $product['description'] ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <style>
    .details {
        border: 1.5px solid grey;
        color: #212121;
        width: 100%;
        height: auto;
        box-shadow: 0px 0px 10px #212121;
    }

    .cart {
        background-color: #212121;
        color: white;
        margin-top: 10px;
        font-size: 12px;
        font-weight: 900;
        width: 100%;
        height: 39px;
        padding-top: 9px;
        box-shadow: 0px 5px 10px #212121;
    }

    .card {
        width: fit-content;
        background-color: #ffffff00;
    }

    .card-body {
        width: fit-content;
    }

    .btn {
        border-radius: 0;
    }

    .img-thumbnail {
        border: none;
    }

    .card {
        box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
        border-radius: 5px;
        padding-bottom: 10px;
    }
    </style>

    <!-- Le bas de page -->
    <footer>
        <?php include('./partials/footer.php') ?>
    </footer>


</body>

</html>