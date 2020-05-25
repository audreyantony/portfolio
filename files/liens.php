<?php
$sql = "SELECT id, nom, link, texteliens FROM liens ORDER BY id ASC;";

$queryliens = mysqli_query($db,$sql) or die("Erreur: ".mysqli_errno($db).mysqli_error($db));

$nb = mysqli_num_rows($queryliens);

?>
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>Portfolio | Liens</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Gruppo|Montserrat&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="page">

        <!-- HEADER -->
        <header>
            <?php
            include "content/header.php";
            ?>
        </header>

        <!-- CONTENU PRINCIPAL PAGE LIENS -->
        <main>
            <?php
            include "content/c_liens.php";
            ?>
        <main>

        <!-- FOOTER -->
        <footer>
            <?php
            include "content/footer.php";
            ?>
        </footer>

    </body>
</html>