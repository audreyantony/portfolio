<?php
session_start();

if(!isset($_SESSION['idsession'])|| $_SESSION['idsession']!==session_id()){
    header("Location: ./?crud");
}


if(isset($_GET['confirm'])){

    $sql = "DELETE FROM liens WHERE id=$idpage";
    mysqli_query($db,$sql) or die("Erreur n° ".mysqli_errno($db));
    header("Location: ./?acccrud");
    exit();
}

$sql = "SELECT l.id, l.nom
        FROM liens l 
        WHERE l.id=$idpage";

$querydelete = mysqli_query($db,$sql) or die("Erreur: ".mysqli_errno($db).' '.mysqli_error($db));

$nb = mysqli_num_rows($querydelete);

if($nb===1) {
    $item =  mysqli_fetch_assoc($querydelete);
    $titre = "Suppression de ".$item['nom'];
}else{
    $titre = "Erreur 404";
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

<!-- CONTENU PRINCIPAL PAGE DELETE CRUD -->
<main>
    <?php
    require_once "content/delete.php";
    ?>
</main>

<!-- FOOTER -->
<?php
require_once "content/footer.php";
?>

</body>
</html>