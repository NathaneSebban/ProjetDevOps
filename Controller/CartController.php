<?php

// Permet d'avoir le fichier nommé contact un seul fois le rendre unique 
namespace Cart;

// require('../Model/NomModel.php');

// use ModelNom\ModelNom;




// class de verification si l'utilisateur est connecté ou pas pour lui donner acces ou pas au panier 
class Cart
{
    public function __construct()
    {
        if (!isset($_SESSION['username'])) {
            header('Location: ./Se-connecter');
        }
    }
}