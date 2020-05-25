<section>
    <div class="contenu">
        <!-- TITRE -->
        <h1>{ Delete }</h1>
        <h2>Ajout d'un nouveau lien</h2>
        <div id="crud">
            <?php
            if(empty($nb)){
                echo "<h4>Cette page n'existe plus</h4>";
            }else {
                ?>
                <p>Voulez-vous vraiment supprimer la page "<?=$item['nom']?>" ?<br>
                <a href="?delete=<?=$item['id']?>&confirm=ok"><button>Oui</button></a> <a href="?acccrud"><button>Non</button></a></p>

                <?php
            }
            ?>
        </div>
    </div>
</section>