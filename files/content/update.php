<section>
    <div class="contenu">
        <!-- TITRE -->
        <h1>{ Update }</h1>
        <h2>Mise a jour du liens <?=$item['nom']?></h2>
            <div id="crud">
            <?php
            if(empty($nb)){
                echo "<h4>Cette page n'existe plus</h4>";
            }else {
                ?>
                <form action="" method="post" name="update">
                    <h5>Titre : <br>
                        <input type="text" name="nom" placeholder="Nom du lien" required maxlength="200" value="<?=$item['nom']?>" >
                    </h5>
                    <h5>URL : <br>
                        <input name="link" type="text" placeholder="URL du lien" value="<?=$item['link']?>" required>
                    </h5>
                    <h5>Texte descriptif : <br>
                        <textarea name="texteliens" placeholder="Texte descriptif du lien" required><?=$item['texteliens']?></textarea>
                    </h5>

                    <input type="hidden" name="id" value="<?=$item['id']?>">
                    <h5><input type="submit" value="Envoyer"></h5>
                </form>
                <?php
            }
            ?>
        </div>

        <button><a href="?acccrud">Retour</a></button>
    </div>
</section>