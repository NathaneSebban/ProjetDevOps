<?php

// Permet d'avoir le fichier nommé contact un seul fois le rendre unique
namespace ModelCategories;

use Core;

// fonction de récuperation des films en fonction de leur categorie via une requete sql

class ModelCategories
{

    // Select
    public function selectThisCategorie($categorie)
    {
        // Connexion a la bd
        $bdd = Core::getDatabase();
        // Requête SQL
        $sql = $bdd->query("SELECT * FROM categorie WHERE idCateg = $categorie");
        $result = $sql->fetchAll();
        return $result;
    }
}