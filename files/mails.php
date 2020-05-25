<?php
session_start();

if(!isset($_SESSION['idsession'])|| $_SESSION['idsession']!==session_id()){
    header("Location: ./?crud");
}



$db = mysqli_connect("localhost","root","","crudbase",3308);
mysqli_set_charset($db,"utf8");
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

<!-- CONTENU PRINCIPAL PAGE MAILS -->
<?php
require_once "content/mails.php";
?>

<!-- FOOTER -->
<?php
require_once "content/footer.php";
?>

</body>
</html>