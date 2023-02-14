<?php

// Permet d'avoir le fichier nommé contact un seul fois le rendre unique 
namespace Product;


require('../Model/ProductModel.php');

use ModelFilm\ModelFilm;



// class qui gere l'affichage des informations complete du film sélectionné
class Product
{
    private $product;

    public function __construct()
    {
        $ModelFilm = new ModelFilm;

        if (isset($_GET['idProduct'])) {
            $product = $ModelFilm->selectOneFilm($_GET['idProduct']);

            if ($product) {
                $this->product = $product;
            } else {
                header("location: ../");
            }
        } else {
            header("location: ../");
        }
    }

    public function getProduct()
    {
        return $this->product;
    }
}
