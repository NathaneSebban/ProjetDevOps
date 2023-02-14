<?php

namespace ModelContact;

use Core;

// fonction de recuperation d'un message de contact via une requete sql d'insertion 

class ModelContact
{
    public function insertMessage($nom, $prenom, $email, $numero, $message)
    {

        // Connexion a la bd
        $bdd = Core::getDatabase();
        // Requete
        $sql = $bdd->query('INSERT INTO contact(nom, prenom, email, numero,message) VALUES(?, ?, ?, ?, ?)', array($nom, $prenom, $email, $numero, $message));
        return $sql;
    }
}