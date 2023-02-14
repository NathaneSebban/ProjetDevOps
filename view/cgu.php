<?php

session_start();

// Database connexion 
require('../Config/setup.php');

// Controller 
require('../Controller/CguController.php');


// utilisation de contact class 
use Cgu\Cgu;

// appel de la class
$cgu = new Cgu;

// Lancement de la fonction
//$nom_pages->nom_methode();


?>


<!DOCTYPE html>
<html lang='fr'>

<head>

    <?php include('./partials/head.php') ?>
    <title>Flixdeo - CGU</title>

</head>

<body>

    <!-- Le haut de page -->
    <header>
        <?php include('./partials/header.php') ?>
    </header>

    <!-- Le contenue principal de la page -->
    <main class="p-3 text-white products">
        <h2>CGU</h2>
        <hr>

        <div class='row flex-column'>
            <div class=''>
                CONDITIONS GENERALES D'UTILISATION : <br><br>
                Conformément aux dispositions des articles 6-III et 19 de la Loi n°
                2004-575 du 21 juin 2004 pour la Confiance dans l’économie
                numérique, dite L.C.E.N., nous portons à la connaissance des
                utilisateurs et visiteurs du site FLIXDÉO les informations suivantes :
                <br><br>
                ÉDITEUR : <br><br>
                Le site FLIXDÉO est la propriété exclusive de NANJ & Co, qui l’édite. <br>
                Adresse : 15 Rue du Château, 75009 Paris <br>
                Immatriculée au Registre du Commerce et des Sociétés Nanterre <br>
                Enregistrée sous le numéro SIRET 894 042 298 <br>
                Numéro TVA intracommunautaire : FR89894042012 <br>
                Adresse de courrier électronique : nanj@flixdeo.com <br>
                Directeur de la publication : HAYAT nanj <br>
                Contactez le responsable de la publication : nanj@flixdeo.com
                <br><br>
                HÉBERGEMENT : <br><br>
                Le site est hébergé en local sur un serveur MAMP.<br>
                DESCRIPTION DES SERVICES FOURNISLe site FLIXDÉO a pour objet de fournir une information concernant
                l’ensemble des activités de l’entreprise. Le propriétaire du site
                s’efforce de fournir sur le site FLIXDÉO des informations aussi
                précises que possible. Toutefois, il ne pourra être tenue responsable
                des omissions, des inexactitudes et des carences dans la mise à jour,
                qu’elles soient de son fait ou du fait des tiers partenaires qui lui
                fournissent ces informations. <br> Toutes les informations proposées sur
                le site FLIXDÉO sont données à titre indicatif, sont non exhaustives, et
                sont susceptibles d’évoluer.<br> Elles sont données sous réserve de
                modifications ayant été apportées depuis leur mise en ligne.
                <br><br>
                PROPRIÉTÉ INTELLECTUELLE ET CONTREFAÇONS :<br><br>
                Le propriétaire du site est propriétaire des droits de propriété
                intellectuelle ou détient les droits d’usage sur tous les éléments
                accessibles sur le site, notamment les textes, images, graphismes,
                logo, icônes, sons, logiciels… Toute reproduction, représentation,
                modification, publication, adaptation totale ou partielle des éléments
                du site, quel que soit le moyen ou le procédé utilisé, est interdite,
                sauf autorisation écrite préalable à l’email : contact@flixdeo.com .
                Toute exploitation non autorisée du site ou de l’un quelconque de
                ces éléments qu’il contient sera considérée comme constitutive
                d’une contrefaçon et poursuivie conformément aux dispositions des
                articles L.335-2 et suivants du Code de Propriété Intellectuelle.
                <br><br>
                LIENS HYPERTEXTES ET COOKIES : <br><br>
                Le site FLIXDÉO contient un certain nombre de liens hypertextes vers
                d’autres sites (partenaires, informations …) mis en place avec
                l’autorisation du propriétaire du site. <br> Cependant, le propriétaire du
                site n’a pas la possibilité de vérifier le contenu des sites ainsi visités et
                décline donc toute responsabilité de ce fait quand aux risques
                éventuels de contenus illicites. L’utilisateur est informé que lors de
                ses visites sur le site FLIXDÉO, un ou des cookies sont susceptible de
                s’installer automatiquement sur son ordinateur. Un cookie est unfichier de petite taille, qui ne permet
                pas l’identification de
                l’utilisateur, mais qui enregistre des informations relatives à la
                navigation d’un ordinateur sur un site. Les données ainsi obtenues
                visent à faciliter la navigation ultérieure sur le site, et ont également
                vocation à permettre diverses mesures de fréquentation. Le
                paramétrage du logiciel de navigation permet d’informer de la
                présence de cookie et éventuellement, de refuser de la manière
                décrite à l’adresse suivante : www.cnil.fr. <br>
                Le refus d’installation d’un cookie peut entraîner l’impossibilité
                d’accéder à certains services. <br>L’utilisateur peut toutefois configurer
                son ordinateur de la manière suivante, pour refuser l’installation des
                cookies : <br> Sous Chrome : Paramètres > Confidentialité et sécurité >
                Cookies et autres données des sites > Bloquer les cookies. <br> Sous Edge :
                onglet outil / options internet. Cliquez sur Confidentialité et
                choisissez Bloquer tous les cookies. Validez sur Ok.<br> Sous FireFox :
                onglet édition / préférences. <br> Cliquez sur Avancées et choisissez
                Désactiver les cookies. Validez sur Ok.
                <br><br>
                PROTECTION DES BIENS ET DES PERSONNES – GESTION DES
                DONNÉES PERSONNELLES :<br><br>
                Utilisateur : Internaute se connectant, utilisant le site susnommé
                FLIXDÉO. <br>
                En France, les données personnelles sont notamment protégées par
                la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004,
                l’article L. 226-13 du Code pénal et la Directive Européenne du 24
                octobre 1995.
                Sur le site FLIXDÉO, le propriétaire du site ne collecte des
                informations personnelles relatives à l’utilisateur que pour le besoin
                de certains services proposés par le site lignesetespace.fr.
                L’utilisateur fournit ces informations en toute connaissance de cause,
                notamment lorsqu’il procède par lui-même à leur saisie. Il est alors
                précisé à l’utilisateur du site FLIXDÉO l’obligation ou non de fournir
                ces informations. Conformément aux dispositions des articles 38 et
                suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique,aux fichiers et aux libertés, tout
                utilisateur dispose d’un droit d’accès,
                de rectification, de suppression et d’opposition aux données
                personnelles le concernant. Pour l’exercer, adressez votre demande à
                FLIXDÉO par email : contact@flixdeo.com ou en effectuant sa
                demande écrite et signée, accompagnée d’une copie du titre
                d’identité avec signature du titulaire de la pièce, en précisant
                l’adresse à laquelle la réponse doit être envoyée.
                Aucune information personnelle de l’utilisateur du site FLIXDÉO n’est
                publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou
                vendue sur un support quelconque à des tiers. Seule l’hypothèse du
                rachat du site FLIXDÉO au propriétaire du site et de ses droits
                permettrait la transmission des dites informations à l’éventuel
                acquéreur qui serait à son tour tenu de la même obligation de
                conservation et de modification des données vis à vis de l’utilisateur
                du site FLIXDÉO.
                Le site FLIXDÉO est en conformité avec le RGPD.
                Les bases de données sont protégées par les dispositions de la loi du
                1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative
                à la protection juridique des bases de données.
            </div>
        </div>


        <hr>
    </main>

    <!-- Le bas de page -->
    <footer>
        <?php include('./partials/footer.php') ?>
    </footer>


</body>

</html>