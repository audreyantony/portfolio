<?php
$sql = "SELECT id, nom, prenom, contenu, email FROM siteportfolio.mail ORDER BY id DESC ;";

$querymail = mysqli_query($db,$sql) or die("Erreur: ".mysqli_errno($db).mysqli_error($db));

$nb = mysqli_num_rows($querymail);

?>


<section>
    <div class="contenu">
        <!-- TITRE -->
        <h1>{ Hey Me }</h1>
        <h2>Voici les mails que tu as reçu :(<?=$nb?>)</h2>

        <div id="crud">
            <?php
            if(empty($nb)){
                echo "<h4>
t'as pas reçu de mail, dindasse !
</h4>";
            }else {
                while ($item = mysqli_fetch_assoc($querymail)) {
                    ?>
                    <h5>De la part de <?=$item['prenom']." ".$item['nom']?> :</h5>
                    <p><?=html_entity_decode($item['contenu'],ENT_QUOTES)?></p>
                    <h6>Mail de réponse à envoyer sur <?=$item['email']?></h6>
                    <hr>
                    <?php
                }
            }

            ?>
            <a href="?acccrud"><button>Retour</button></a>
        </div>

</section>
