<!-- CONTRÔLEUR PRINCIPAL-->
<?php

$db = mysqli_connect();
mysqli_set_charset($db,"utf8");

if (isset($_GET['acc'])) {
    require_once "files/accueil.php";
}elseif (isset($_GET['gal'])) {
    require_once "files/galerie.php";
}elseif (isset($_GET['link'])) {
    require_once "files/liens.php";
}elseif (isset($_GET['tutos'])) {
    require_once "files/tutos.php";
}elseif (isset($_GET['tutoriel-favori'])) {
    require_once "files/tutoriel-favori.php";
}elseif (isset($_GET['tutoriel-maison'])) {
    require_once "files/tutoriel-maison.php";
}elseif (isset($_GET['contact'])) {
    require_once "files/contact.php";
}elseif (isset($_GET['cv'])) {
    require_once "files/cv.php";
}elseif (isset($_GET['crud'])) {
    require_once "files/crud.php";
}elseif (isset($_GET['mails'])) {
    require_once "files/mails.php";
}elseif (isset($_GET['acccrud'])) {
    require_once "files/accueil-crud.php";
}elseif (isset($_GET['create'])) {
    require_once "files/create.php";
}elseif (isset($_GET['deco'])) {
    require_once "files/deconnect.php";
} elseif (isset($_GET['update']) && ctype_digit($_GET['update'])) {
    $idpage = (int)$_GET['update'];
    require_once "files/update.php";
} elseif (isset($_GET['delete']) && ctype_digit($_GET['delete'])) {
    $idpage = (int)$_GET['delete'];
    require_once "files/delete.php";
} else {
    require_once "files/accueil.php";
} ?>
