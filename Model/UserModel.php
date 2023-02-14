<?php

namespace ModelUser;

use Core;


//class qui gere la connexion d'un utilisateur mais aussi l'inscription
class ModelUser
{
    public function loginUser($username, $password)
    {

        // Connexion a la bd
        $bdd = Core::getDatabase();
        // Requete
        $sql = $bdd->query("SELECT * FROM user WHERE username = '$username' AND password = '" . hash('sha1', $password) . "' ");
        // Savoir si requete valide
        $result = $sql->fetch();
        return $result;
    }

    public function registerUser($username, $password)
    {

        // Connexion a la bd
        $bdd = Core::getDatabase();
        // Requete
        $sql = $bdd->query('INSERT INTO user(username, password) VALUES(?, ?)', array($username, $password));
        return $sql;
    }
}