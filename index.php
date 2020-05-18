<!-- CONTRÔLEUR PRINCIPAL-->
<?php

if(!isset($_GET["p"])){
    include "files/accueil.php";
}else{

    $p = $_GET["p"];

    switch ($p){
        case "acc":
            include "files/accueil.php";
            break;
        case "gal":
            include "files/galerie.php";
            break;
        case "link":
            include "files/liens.php";
            break;
        case "tutos":
            include "files/tutos.php";
            break;
        case "tutoriel-favori":
            include "files/tutoriel-favori.php";
            break;
        case "tutoriel-maison":
            include "files/tutoriel-maison.php";
            break;
        case "contact":
            include "files/contact.php";
            break;
        case "cv":
            include "files/cv.php";
            break;
        case "crud":
            include "files/crud.php";
            break;
        default:
            include "files/accueil.php";
    }
}