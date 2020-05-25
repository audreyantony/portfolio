<?php
session_start();

if(!isset($_SESSION['idsession'])|| $_SESSION['idsession']!==session_id()){
    header("Location: ./?crud");
}


if(!empty($_POST)){
    $nom = htmlspecialchars(strip_tags(trim($_POST['nom'])),ENT_QUOTES);

    $link = htmlspecialchars(strip_tags($_POST['link']),ENT_QUOTES);

    $texteliens = htmlspecialchars(strip_tags($_POST['texteliens'],'<p><a><br><img>'),ENT_QUOTES);

    $idlien = (int) $_POST['id'];

    if( !empty($nom) &&
        !empty($link) &&
        !empty($texteliens) &&
        !empty($idlien) &&
        !empty($idutilisateur)
    ){
        $sql="UPDATE liens SET nom ='$nom', link ='$link', texteliens='$texteliens', idutilisateur = $idutilisateur WHERE id = $idlien ;";

        mysqli_query($db,$sql) or die("Erreur : ".mysqli_errno($db)." ".mysqli_error($db));

        header("Location: ./accueil-crud.php");
        exit();
    }else{
        echo "un champs est vide";
    }

}

if (!empty($idpage)) {
    $sql = "SELECT l.idutilisateur,l.id, l.nom, l.link, l.texteliens, u.pseudo
    FROM liens l 
        INNER JOIN utilisateur u 
        ON l.idutilisateur = u.id
    WHERE l.id=$idpage";
}

$queryliens = mysqli_query($db,$sql) or die("Erreur: ".mysqli_errno($db)." ".mysqli_error($db));

$nb = mysqli_num_rows($queryliens);

if($nb===1) {
    $item =  mysqli_fetch_assoc($queryliens);
    $nom = "Modification : ".$item['nom'];
}else{
    $nom = "Erreur 404";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portfolio </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Gruppo|Montserrat&display=swap"
          rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="page">

<!-- HEADER -->
<?php
require_once "content/header.php";
?>

<!-- CONTENU PRINCIPAL PAGE UPDATE -->
<main>
    <?php
    require_once "content/update.php";
    ?>
</main>

<!-- FOOTER -->
<?php
require_once "content/footer.php";
?>

</body>
</html>