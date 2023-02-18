<?php

// Mise en place des informations de connexion à la bdd

class Core
{

    static $bdd;

    static function getDatabase()
    {

        if (!self::$bdd) {
            return new Database('root', '', 'flixdeonanj');
        }
        return self::$bdd;
    }
}
