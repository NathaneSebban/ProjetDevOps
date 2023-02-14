<?php

session_start();

// Database connexion 
require('../Config/setup.php');

// Controller 
require('../Controller/AboutController.php');


// utilisation de contact class 
use About\About;

// appel de la class
$about = new About;

// Lancement de la fonction
//$nom_pages->nom_methode();

?>


<!DOCTYPE html>
<html lang='fr'>

<head>

    <?php include('./partials/head.php') ?>
    <title>Flixdeo - A propos</title>

</head>

<body>

    <!-- Le haut de page -->
    <header>
        <?php include('./partials/header.php') ?>
    </header>

    <!-- Le contenue principal de la page -->
    <main class="p-3 text-white products">
        <h2 class="mt-3 text-white">À PROPOS</h2>
        <hr>

        <div class='row flex-column'>
            <div class=''>
NOTRE POSITIONNEMENT <br> <br>
Fondé en 2022, le site Flixdéo est LA référence de vente de films en France. Le site Flixdéo s’adresse à une clientèle de tout âge en proposant le meilleur des grands films. Grâce à ses sélections de films, Flixdéo répond aux attentes de toute une génération de cinéphiles. <br> <br>
NOTRE IDENTITÉ <br><br>
Avec son claim « Share The Films Spirit », Flixdéo s’adresse à tous et partage sa passion pour les films, bien plus qu’une tendance, un véritable état d’esprit qui transcende les générations. Le site souhaite ainsi décloisonner le film et invite tous les consommateurs à partager son univers. <br><br>
NOS VALEURS : ETHIQUE ET TRANSPARENCE <br><br>
Lutte contre la corruption, comment agissons-nous ? <br><br>
Flixdéo s’engage à déployer une démarche d’amélioration continue de détection et de prévention des risques de corruption et de sanctionner les pratiques condamnables ou non. <br><br>
Nos fournisseurs s'engagent eux aussi à suivre des pratiques commerciales transparentes puisqu’un dispositif d’évaluation de nos tiers comportant entre autres la signature d’une charte d’intégrité est mis en place lors de la rédaction d’un contrat. <br><br>
Le site Flixdéo a déployé un système d'alerte éthique permettant aux collaborateurs et à ses partenaires, de signaler tout manquement au code de conduite ou à la loi de manière générale. <br><br>
En cas de doute et face à une situation concrète, vous pouvez nous alerter à l’adresse mail ethics@flixdeo.com <br><br>

NOS RÉSEAUX SOCIAUX <br><br>
Avec plus de 250K followers sur Instagram, 300K sur Facebook et 430K sur Twitter, la communauté Flixdéo s’agrandit jour après jour. Au total, la communauté Flixdéo s’élève à plus de 900 000 abonnés tous pays confondus. Venez partager avec nous la culture des films et ses dernières sorties sur nos comptes Flixdéo ! <br><br>
NOS ENGAGEMENTS <br><br>
Flixdéo prend très au sérieux la question de l'égalité entre les femmes et les hommes au sein de ses équipes qui comptent plus de 55% de femmes. <br>
En application de la règlementation visant à supprimer les écarts de rémunération entre les femmes et les hommes dans l’entreprise, le résultat obtenu par la société Flixdéo France au titre de l'index de l'égalité salariale Femmes-Hommes pour l’année 2021 est de 80 points sur 100 (certains indicateurs ne pouvant être calculés au regard des critères légaux) répartis ainsi : <br>
o Indicateur écart de rémunération : 40/40 ; <br>
o Indicateur écart d'augmentations : 5/20 ; <br>
o Indicateur écart de promotions : 10/15 ; <br>
o Indicateur pourcentage de salariées augmentées dans l'année suivant leur retour de congé maternité : 15/15 ; <br>
o Indicateur nombre de salariés du sexe sous-représenté parmi les 10 plus hautes rémunérations : 10/10. <br><br>

Considérant que la Société n’a pas atteint la note maximale pour les indicateurs relatifs aux écarts d’augmentation d’une part et aux écarts de promotion d’autre part, elle rappelle ci-dessous les objectifs prévus par l’accord relatif à l’Egalité professionnelle et à la Qualité de Vie au Travail signé le 25 février 2021. <br>
Au titre de la rémunération, son engagement à : <br>
- S’assurer de l’égalité de rémunération entre les femmes et les hommes à l’embauche et tout au long du parcours professionnel ; <br>
- Prévenir toute conséquence négative des absences liées à la parentalité sur l’évolution de la rémunération. <br>
Au titre de la promotion professionnelle, son engagement à : <br>
- Faire progresser la mixité au sein des équipes d’encadrement ; <br>
- Faire converger les taux de promotion des femmes et des hommes ; <br>
- Assurer une équité dans les promotions au sein de chaque statut. <br>


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