<?php

session_start();

// Database connexion 
require('../Config/setup.php');

// Controller 
require('../Controller/CgvController.php');


// utilisation de contact class 
use Cgv\Cgv;

// appel de la class
$cgv = new Cgv;

// Lancement de la fonction
//$nom_pages->nom_methode();


?>


<!DOCTYPE html>
<html lang='fr'>

<head>

    <?php include('./partials/head.php') ?>
    <title>Flixdeo - CGV</title>

</head>

<body>

    <!-- Le haut de page -->
    <header>
        <?php include('./partials/header.php') ?>
    </header>

    <!-- Le contenue principal de la page -->
    <main class="p-3 text-white products">
        <h2 class="mt-3 text-white">CGV</h2>
        <hr>

        <div class='row flex-column'>
            <div class=''>

                CONDITIONS GENERALES DE VENTE : <br><br>
                Applicables à compter du 25 décembre 2022.<br><br>
                Clause n° 1 : Objet et champ d'application<br>
                Les présentes conditions générales de vente (CGV) constituent le
                socle de la négociation commerciale et sont systématiquement
                adressées ou remises à chaque acheteur pour lui permettre de passer
                commande.Les conditions générales de vente décrites ci-après détaillent les
                droits et obligations de FLIXDÉO et de son client dans le cadre de la
                vente des marchandises suivantes : Films.<br>
                Toute acceptation du devis/bon de commande en ce compris la
                clause « Je reconnais avoir pris connaissance et j'accepte les
                conditions générales de vente ci-annexées » implique l'adhésion sans
                réserve de l'acheteur aux présentes conditions générales de vente.<br><br>
                Clause n° 2 : Prix<br>
                Les prix des marchandises vendues sont ceux en vigueur au jour de la
                prise de commande. Ils sont libellés en euros et calculés hors taxes.
                Par voie de conséquence, ils seront majorés du taux de TVA et des
                frais de transport applicables au jour de la commande.
                FLIXDÉO s'accorde le droit de modifier ses tarifs à tout moment.
                Toutefois, elle s'engage à facturer les marchandises commandées aux
                prix indiqués lors de l'enregistrement de la commande.
                Clause n° 3 : Rabais et ristournes
                Les tarifs proposés comprennent les rabais et ristournes que FLIXDÉO
                serait amenée à octroyer compte tenu de ses résultats ou de la prise
                en charge par l'acheteur de certaines prestations.<br><br>
                Clause n° 4 : Escompte<br>
                Aucun escompte ne sera consenti en cas de paiement anticipé.<br><br>
                Clause n° 5 : Modalités de paiement<br>
                Le règlement des commandes s'effectue :
                par carte bancaire<br><br>
                Clause n° 6 : Retard de paiementEn cas de défaut de paiement total ou partiel des marchandises<br>
                livrées à l'échéance, l'acheteur doit verser à FLIXDÉO une pénalité de
                retard égale à trois fois le taux de l'intérêt légal.<br>
                Le taux de l'intérêt légal retenu est celui en vigueur au jour de la
                livraison des marchandises.<br>
                A compter du 1er janvier 2015, le taux d'intérêt légal sera révisé tous
                les 6 mois ( Ordonnance n°2014-947 du 20 août 2014 ).<br>
                Cette pénalité est calculée sur le montant TTC de la somme restant
                due, et court à compter de la date d'échéance du prix sans qu'aucune
                mise en demeure préalable ne soit nécessaire.
                En sus des indemnités de retard, toute somme, y compris l’acompte,
                non payée à sa date d’exigibilité produira de plein droit le paiement
                d’une indemnité forfaitaire de 40 euros due au titre des frais de
                recouvrement.<br>
                Articles 441-10 et D. 441-5 du code de commerce.<br><br>
                Clause n° 7 : Clause résolutoire<br>
                Si dans les quinze jours qui suivent la mise en oeuvre de la clause
                'Retard de paiement', l'acheteur ne s'est pas acquitté des sommes
                restant dues, la vente sera résolue de plein droit et pourra ouvrir
                droit à l'allocation de dommages et intérêts au profit de FLIXDÉO.<br><br>
                Clause n° 8 : Clause de réserve de propriété<br>
                FLIXDÉO conserve la propriété des biens vendus jusqu'au paiement
                intégral du prix, en principal et en accessoires. À ce titre, si l'acheteur
                fait l'objet d'un redressement ou d'une liquidation judiciaire, FLIXDÉO
                se réserve le droit de revendiquer, dans le cadre de la procédure
                collective, les marchandises vendues et restées impayées.<br><br>
                Clause n° 9 : Livraison<br>
                La livraison est effectuée :
                soit par la remise directe de la marchandise à l'acheteur ;
                soit par le dépôt de la marchandise au lieu indiqué par l'acheteur sur
                le bon de commande.<br>
                Le délai de livraison indiqué lors de l'enregistrement de la commande
                n'est donné qu'à titre indicatif et n'est aucunement garanti.
                Par voie de conséquence, tout retard raisonnable dans la livraison
                des produits ne pourra pas donner lieu au profit de l'acheteur à :
                l'allocation de dommages et intérêts ;
                l'annulation de la commande.<br>
                Le risque du transport est supporté en totalité par l'acheteur.
                En cas de marchandises manquantes ou détériorées lors du
                transport, l'acheteur devra formuler toutes les réserves nécessaires
                sur le bon de commande à réception desdites marchandises. Ces
                réserves devront être, en outre, confirmées par écrit dans les cinq
                jours suivant la livraison, par courrier recommandé AR adressé à la
                société.<br><br>
                Clause n° 10 : Force majeure<br>
                La responsabilité de FLIXDÉO ne pourra pas être mise en oeuvre si la
                non-exécution ou le retard dans l'exécution de l'une de ses
                obligations décrites dans les présentes conditions générales de vente
                découle d'un cas de force majeure. À ce titre, la force majeure
                s'entend de tout événement extérieur, imprévisible et irrésistible au
                sens de l'article 1148 du Code civil.<br><br>
                Clause n° 11 : Tribunal compétent<br>
                Tout litige relatif à l'interprétation et à l'exécution des présentes
                conditions générales de vente est soumis au droit français.
                À défaut de résolution amiable, le litige sera porté devant le Tribunal
                de commerce.</p>
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