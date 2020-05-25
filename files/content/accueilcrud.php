<section>
    <div class="contenu">
        <!-- TITRE -->
        <h1>{ Hey Me }</h1>
        <h2>Accueil CRUD</h2>

        <a href="?mails"><button>Voir les mails</button></a>

        <div id="crud">
            <?php
            if(empty($nb)){
                echo "<h4>Pas encore de liens pour le site</h4>";
            }else {
                while ($item = mysqli_fetch_assoc($queryliens)) {
                    ?>
                    <h5><?=$item['nom']?></h5>
                    <p><?=html_entity_decode($item['texteliens'],ENT_QUOTES)?> || Liens du site : <?=$item['link']?> || Ecrit par <?=$item['pseudo']?><br>
                        <a href="./?update=<?=$item['id']?>"><button>UPDATE</button></a>
                        <a href="./?delete=<?=$item['id']?>"><button>DELETE</button></a>
                    </p>
                    <hr>
                    <?php
                }
                echo "<h4>Nombre de liens : $nb</h4>";
            }

            ?>
        </div>
        <a href="?create"><button>Créer un lien</button></a>
        <a href="?deco"><button>Déconnexion</button></a>
    </div>
</section>