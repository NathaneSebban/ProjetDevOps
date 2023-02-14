<?php

namespace Login;

require('../Model/UserModel.php');


use ModelUser\ModelUser;

// fonction de connexion d'un utilisateur au site via une requete sql 

class Login
{
    public function __construct()
    {
        $ModelUser = new ModelUser;
        if (!isset($_SESSION['username'])) {

            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $userLogin = $ModelUser->loginUser($username, $password);
                if (isset($userLogin) && $userLogin == true) {
                    $_SESSION['username'] = $username;
                    header('Location: ./');
                } else {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Attention ! </strong> Nom d'utilisateur ou mot de passe incorect.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
                }
            }
        } else {
            header('Location: ./');
        }
    }
}
