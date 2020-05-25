<section>
    <div class="contenu">
        <!-- TITRE -->
        <h1>{ Create }</h1>
        <h2>Ajout d'un nouveau lien</h2>
            <div id="crud">
            <form action="" method="post" name="insertion">
                <h5>Nom du lien : <br>
                    <input type="text" name="nom" placeholder="Nom" required maxlength="200">
                </h5>
                <h5>URL : <br>
                    <input type="text" name="link" placeholder="URL du lien" required maxlength="200">
                </h5>
                <h5>Texte descriptif du lien : <br>
                    <textarea name="texteliens" value="texteliens" placeholder="Descriptif du lien" required></textarea>
                </h5>
                <h5><input type="submit" value="Envoyer"></h5>
            </form>
                <a href="?acccrud"><button>
                        Retour
                    </button></a>
        </div>
    </div>
</section>