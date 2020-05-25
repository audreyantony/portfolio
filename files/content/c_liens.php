<section>
    <div class="contenu">
        <h1>{ Liens }</h1>
        <h2>Sympa et Instructif</h2>
        <div class="containerliens">
            <?php
            if(empty($nb)){
                echo "<h4>
Pas de liens !
</h4>";
            }else {
                while ($item = mysqli_fetch_assoc($queryliens)) {
                    ?>
            <div class="itemliens">
                <h3><a href="<?=$item['link']?>" target="_blank"><?=$item['nom']?></a></h3>
                <p class="texteliens"><?=$item['texteliens']?></p>
                <a href="<?=$item['link']?>" target="_blank"><button>GO</button></a>
            </div>
                    <?php
                }
            }
            ?>
        </div>
        <a href="?acc"><button>
                Retour à l'accueil
            </button></a>
    </div>
</section>