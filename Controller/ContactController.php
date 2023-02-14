<?php

namespace Contact;

require('../Model/ContactModel.php');

use ModelContact\ModelContact;

// fonction qui permet d'envoyer le message de contact dans à la bdd via une requete sql

class Contact
{
    public function __construct()
    {
        $modelContact = new ModelContact;
        if (isset($_POST['envoyer'])) {
            if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['numero']) and !empty($_POST['message'])) {
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $email = htmlspecialchars($_POST['email']);
                $numero = htmlspecialchars($_POST['numero']);
                $message = htmlspecialchars($_POST['message']);
                $modelContact->insertMessage($nom, $prenom, $email, $numero, $message);
            }

            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <h4 class='alert-heading'>Nous avons bien reçu votre message !</h4>
            <p>Nous le traiterons et reviendrons vers vous dans les plus brefs delais.</p>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }
    }
}