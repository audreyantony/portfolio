<?php
session_start();

if(!isset($_SESSION['idsession'])|| $_SESSION['idsession']!==session_id()){
    header("Location: ./?crud");
}


if(!empty($_POST)){

    $idutilisateur = 1;

    $nom = htmlspecialchars(strip_tags(trim($_POST['nom'])),ENT_QUOTES);
    $link = htmlspecialchars(strip_tags($_POST['link']),ENT_QUOTES);
    $texteliens = htmlspecialchars(strip_tags($_POST['texteliens'],'<p><a><br><img>'),ENT_QUOTES);

    if(empty($idutilisateur)||empty($nom)||empty($link)||empty($texteliens)){
        header("Location: ./?create");
        exit();
    }else{
        $sql = "INSERT INTO siteportfolio.liens (nom,link,texteliens,idutilisateur) 
                VALUES ('$nom','$link','$texteliens',$idutilisateur);";
        $envoi = mysqli_query($db,$sql);

        if($envoi){
            header("Location: ./?acccrud");
            exit();
        }
    }
}else {

    $sql = "SELECT id, pseudo FROM siteportfolio.utilisateur ORDER BY pseudo ASC;";
    $queryUtil = mysqli_query($db, $sql) or die(mysqli_errno($db)." ".mysqli_error($db));
    if (empty(mysqli_num_rows($queryUtil))) {
        header("Location: ./");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portfolio</title>
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

<!-- CONTENU PRINCIPAL PAGE CREATE CRUD -->
<main>
    <?php
    require_once "content/create.php";
    ?>
</main>

<!-- FOOTER -->
<?php
require_once "content/footer.php";
?>

</body>
</html>