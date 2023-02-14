<?php


session_start();

// Database connexion 
require('../Config/setup.php');

require('../Controller/CartController.php');

use Cart\Cart;

$cart = new Cart

?>


<!DOCTYPE html>
<html lang='fr'>

<head>

    <?php include('./partials/head.php') ?>
    <title>Flixdeo - Votre panier</title>

</head>

<body>

    <!-- Le haut de page -->
    <header>
        <?php include('./partials/header.php') ?>
    </header>

    <main class="products">
        <!-- Le contenue principal de la page -->
        <section id="panier">

            <div class="card">
                <div class="row">
                    <div class="col-md-8 cart">
                        <div class="title">
                            <div class="row">
                                <div class="col">
                                    <h4><b>PANIER</b></h4>
                                </div>
                            </div>
                        </div>
                        <hr style="width: 70% !important;">
                        <?php
                        $total = 0;

                        $ids = array_keys($_SESSION['panier']);
                        if (empty($ids)) {
                            echo '<br><br>';
                            echo "<p style='margin-left:45%;'>Votre panier est vide</p>";
                        } else {
                            require_once('../Config/setup.php');
                            $bdd = Core::getDatabase();
                            // Requete
                            $sql = $bdd->query("SELECT * FROM film WHERE id IN (" . implode(',', $ids) . ")");
                            // Savoir si requete valide
                            $films = $sql->fetchAll();

                            foreach ($films as $film) :
                                $total = $total + $film['prix'] * $_SESSION['panier'][$film['id']];
                        ?>

                        <div class="row">
                            <div class="row main align-items-center">
                                <div class="col-2"><a href="../product/<?php echo $film['id'] ?>"><img class="img-fluid"
                                            src="<?= $film['image'] ?>"></div></a>
                                <div class="col">
                                    <div class="row"><?= $film['nom'] ?></div>
                                </div>
                                <div class="col-2">
                                    <span
                                        style="border: 1px gray solid; padding: 1px 3px; border-radius: 5px;"><?= $_SESSION['panier'][$film['id']] ?></span>
                                </div>
                                <div class="col">&euro; <?= $film['prix'] ?>
                                    <a class="ms-5" href="../delPanier/<?= $film['id'] ?>"><i
                                            class="fa fa-trash text-danger" style="font-size: 1.4rem;"
                                            aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;
                        }
                        ?>

                    </div>
                    <div class="col-md-4 summary">
                        <div>
                            <h5><b>Sommaire</b></h5>
                        </div>
                        <hr style="width: 50% !important;">

                        <div class="row" style="padding: 2vh 0;">
                            <div class="col">PRIX TOTAL</div>
                            <div class="col text-right">&euro; <?= $total ?></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- Le bas de page -->
    <footer>
        <?php include('./partials/footer.php') ?>
    </footer>


</body>

</html>

</html>