<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_SESSION['panier'][$id])) {
        unset($_SESSION['panier'][$id]);
    } else {
        header('Location: ../Votre-panier');
    }
    header('Location: ../Votre-panier');
}