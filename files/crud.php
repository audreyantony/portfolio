<?php

session_start();

if(isset($_SESSION['idsession'])&&$_SESSION['idsession']===session_id()){
    header("Location: ./?acccrud");
}

if(isset($_POST['pseudo'],$_POST['mdp'])) {

    $pseudo = htmlspecialchars(strip_tags(trim($_POST['pseudo'])),ENT_QUOTES);
    $mdp = htmlspecialchars(strip_tags(trim($_POST['mdp'])),ENT_QUOTES);


    if(!empty($pseudo)&&!empty($mdp)) {

        $db = mysqli_connect("sqlgold.webmo.fr:48614","web2020audrey","NHqEpuE8N3VI","web2020audrey",3308);
        mysqli_set_charset($db,"utf8");

        $sql = "SELECT * FROM utilisateur WHERE pseudo='$pseudo' AND mdp ='$mdp';";

        $recup = mysqli_query($db,$sql);

        if(mysqli_num_rows($recup)===1){

            $util = mysqli_fetch_assoc($recup);
            $_SESSION = $util;

            $_SESSION['idsession'] = session_id();

            header("Location: ./?acccrud");
            exit();
        }


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
require "content/header.php";
?>

<!-- CONTENU PRINCIPAL PAGE CRUD -->
<?php
require "content/crud.php";
?>

<!-- FOOTER -->
<?php
require "content/footer.php";
?>

</body>
</html>