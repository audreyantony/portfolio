<?php
session_start();

if(!isset($_SESSION['idsession'])|| $_SESSION['idsession']!==session_id()){
    header("Location: ./?crud");
}

$sql = "SELECT id, nom, prenom, contenu, email FROM mail ORDER BY id DESC ;";

$querymail = mysqli_query($db, $sql) or die("Erreur: " . mysqli_errno($db) . mysqli_error($db));

$nb = mysqli_num_rows($querymail);


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