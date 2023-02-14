<?php


// Permet d'avoir le fichier nommé contact un seul fois le rendre unique 
namespace Index;

require('../Model/ProductModel.php');

use ModelFilm\ModelFilm;


// class qui gere l'affichage des films en fonction de la categorie selectionnée, elle gere aussi la fonction de recherche d'un film
class Index
{
    private $products;
    public function __construct()
    {
        $ModelFilm = new ModelFilm;
        if (isset($_GET['nameSearch'])) {
            $recherche = htmlspecialchars($_GET['nameSearch']);
            $products = $ModelFilm->selectThisFilm($recherche);
        } else if (isset($_GET['idCategorie'])) {
            $products = $ModelFilm->selectFilmsByCategorie($_GET['idCategorie']);
        } else {
            $products = $ModelFilm->selectFilms();
        }
        $this->products = $products;
    }

    public function getProducts()
    {
        return $this->products;
    }
}