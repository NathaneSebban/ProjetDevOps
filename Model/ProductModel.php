<?php

namespace ModelFilm;

use Core;

// class qui gere les differents affichages des films que ce soit en fonction de leur categorie ou que ce soit via la barre de recherche 

class ModelFilm
{
    public function selectFilms()
    {

        // Connexion a la bd
        $bdd = Core::getDatabase();
        // Requete
        $sql = $bdd->query('SELECT * FROM film ORDER BY id ASC');
        // Savoir si requete valide
        $result = $sql->fetchAll();
        return $result;
    }

    public function selectFilmsByCategorie($categorie)
    {

        // Connexion a la bd
        $bdd = Core::getDatabase();
        // Requete
        $sql = $bdd->query("SELECT * FROM film WHERE id_categorie = '$categorie' ORDER BY id ASC");
        // Savoir si requete valide
        $result = $sql->fetchAll();
        return $result;
    }

    public function selectThisFilm($recherche)
    {

        // Connexion a la bd
        $bdd = Core::getDatabase();
        // Requete
        $sql = $bdd->query("SELECT * FROM film WHERE nom LIKE '%$recherche%' ORDER BY id ASC");
        // Savoir si requete valide
        $result = $sql->fetchAll();
        return $result;
    }

    public function selectOneFilm($id)
    {
        // Connexion a la bd
        $bdd = Core::getDatabase();
        // Requete
        $sql = $bdd->query("SELECT * FROM film JOIN categorie WHERE film.id = $id");
        // Savoir si requete valide
        $result = $sql->fetch();
        return $result;
    }
}