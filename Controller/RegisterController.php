<?php

namespace Register;

require('../Model/UserModel.php');

use ModelUser\ModelUser;

//class qui gere la création d'un compte via une requete sql

class Register
{
    public function __construct()
    {
        $ModelUser = new ModelUser;
        if (!isset($_SESSION['username'])) {
            if (isset($_POST['inscription'])) {
                if (!empty($_POST['username']) and !empty($_POST['password'])) {
                    $username = htmlspecialchars($_POST['username']);
                    $password = sha1($_POST['password']);
                    $userLogin = $ModelUser->RegisterUser($username, $password);
                }
                header('Location: ./Se-connecter');
                echo "<div class='alert alert-succes alert-dismissible fade show' role='alert'>
                <strong>Compte créé avec succès, vous pouvez vous connecter</strong>.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
            }
        } else {
            header('Location: ./');
        }
    }
}