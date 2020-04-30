<section>
    <div class="contenu">
        <h1>{ Tutos }</h1>
        <h2>Favoris et fait maison</h2>
        <div>
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 6</div>
                    <div class="text">Tuto SQL: Les commandes<br>
                        SELECT, INSERT, UPDATE, DELETE</div>
                    <p class="slideContent">Dans le tutoriel suivant nous allons apprendre à utiliser certaines commandes du langage SQL (Structured Query Language) qui nous servirons à interagir avec des bases de donnés. Les commandes SQL que nous allons voir sont: SELECT (qui interrogera les bases de données) INSERT, UPDATE et DELETE (qui vont manipuler les bases de données).<br><br><br><br>
                    <span class="big">Glossaire:</span><br><br>
                        Avant de commencer voici quelques termes qui seront utilisé dans le tutoriel et leurs significations:<br><br>

                        <span class="big">Query</span>: signifie requête, quand nous écrirons nos commandes nous feront des requêtes aux bases de données pour obtenir une réponse.<br>
                        <span class="big">Cmd</span>: Invite de commande, ce sera la partie dans laquelle nous écrirons nos Query.
                    </p>

                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 6</div>
                    <div class="text">La commande<br> SELECT</div>
                    <p class="slideContent">La commande SELECT va nous servir à lire nos données présentent dans la ou les bases de données. Dans sa version la plus simple elle s’écrira:<br><br><br>
                        <span class="pre"><span class="gris">mysql ></span> SELECT ~nom du champ~ FROM ~nom de la table~ ; </span><br><br><br>
                        Juste après la commande SELECT on indique le champ recherché, avec son nom, ou les champs recherchés, avec leurs noms séparés d’une virgule (,) ou bien encore tout les champs du tableau avec l’astérisque (*). Après avoir dit quelle(s) colonne(s) on veux afficher, on indique de quelle(s) table(s) on veut obtenir les informations avec TABLE puis le nom de la ou des tables.<br><br>
                        Pour la suite du tutoriel nous allons nous servir de la table suivante: </p>
                    <table class="tableInSlide">
                        <tr>
                            <th>ID</th>
                            <th>nom</th>
                            <th>ville</th>
                            <th>age</th>
                            <th>salaire</th>
                            <th>entreprise</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Dupont</td>
                            <td>Londres</td>
                            <td>50</td>
                            <td>2950</td>
                            <td>United Desk</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Thomson</td>
                            <td>Milan</td>
                            <td>37</td>
                            <td>1950</td>
                            <td>United Desk</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Garcia</td>
                            <td>Londres</td>
                            <td>24</td>
                            <td>2400</td>
                            <td>AeriCompta</td>
                        </tr>
                    </table><br>
                    <p class="slideContentsec">Nous avons ici une table composer de 6 champs: id (l’identifiant de chaque ligne), le nom, la ville, l’age, le salaire et l’entreprise. La table si dessus s’appellera <span class="big">tabletest</span> pendant toute la durée de l’exercice.<br><br>

                        Si nous désirons afficher la table au complet nous taperons dans le cmd:<br><br><span class="pre"><span class="gris">mysql ></span> SELECT * FROM tabletest ; </span></p>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 6</div>
                    <div class="text">La commande<br> SELECT - suite</div>
                    <p class="slideContent">Si nous voulons juste les colonnes du champs nom nous taperons dans le cmd:<br><br>
                        <span class="pre"><span class="gris">mysql ></span> SELECT nom FROM tabletest ; </span><br><br>
                    </p>
                    <table class="tableInSlide">
                        <tr>
                            <th>nom</th>
                        </tr>
                        <tr>
                            <td>Dupont</td>
                        </tr>
                        <tr>
                            <td>Thomson</td>
                        </tr>
                        <tr>
                            <td>Garcia</td>
                        </tr>
                    </table>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 6</div>
                    <div class="text">Caption Text</div>
                    <p class="slideContent">TEXTE TEXTE TEXTE</p>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">5 / 6</div>
                    <div class="text">Caption Text</div>
                    <p class="slideContent">TEXTE TEXTE TEXTE</p>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">6 / 6</div>
                    <div class="text">Caption Text</div>
                    <p class="slideContent">TEXTE TEXTE TEXTE</p>
                </div>

                <!-- BOUTONS AVANT APRES -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- POINTS -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
            </div>
        </div>
        <button class="btntutos">
            <a href="?p=tutos">Retour</a>
        </button>
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/prev
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" actif", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " actif";
        }
    </script>
</section>