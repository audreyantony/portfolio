<section>
    <div class="contenu">
        <h1>{ Tutos }</h1>
        <h2>Fait maison</h2>
        <div>
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 9</div>
                    <div class="text">Tuto SQL: Les commandes<br>
                        SELECT, INSERT, UPDATE, DELETE</div>
                    <p class="slideContent">Dans le tutoriel suivant nous allons apprendre à utiliser certaines commandes du langage SQL (Structured Query Language) qui nous servirons à interagir avec des bases de donnés. Les commandes SQL que nous allons voir sont: SELECT (qui interrogera les bases de données) INSERT, UPDATE et DELETE (qui vont manipuler les bases de données).<br><br><br><br>
                    <span class="big">Glossaire:</span><br><br>
                        Avant de commencer voici quelques termes qui seront utilisé dans le tutoriel et leurs significations:<br><br><br>

                        <span class="big">Query</span>: signifie requête, quand nous écrirons nos commandes nous feront des requêtes aux bases de données pour obtenir une réponse.<br><br>
                        <span class="big">Cmd</span>: Invite de commande, ce sera la partie dans laquelle nous écrirons nos Query.<br><br>
                        <span class="big">DB</span>: Bases de données ou Databases, permet de stocker et retrouver l'intégralité de donnée brutes ou d'informations en rapport avec un thème ou une activité (un site internet par exemple)<br><br>
                        <span class="big">Tables</span>: Les tables SQL contiennent l'ensemble des données concernant la DB auxquelles elles sont attachées.<br><br>
                        <span class="big">Champs</span>: Les champs d'une table sont les sections qui contiennent les données.<br><br>
                    </p>

                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 9</div>
                    <div class="text">La commande<br> SELECT</div>
                    <p class="slideContent">La commande SELECT va nous servir à lire nos données présentent dans la ou les bases de données. Dans sa version la plus simple elle s’écrira:<br><br><br>
                        <span class="pre"><span class="gris">mysql ></span> SELECT ~nom du champ~ FROM ~nom de la table~ ; </span><br><br><br><br>
                        Juste après la commande SELECT on indique le champ recherché, avec son nom, ou les champs recherchés, avec leurs noms séparés d’une virgule (,) ou bien encore tout les champs du tableau avec l’astérisque (*). Après avoir dit quelle(s) colonne(s) on veux afficher, on indique de quelle(s) table(s) on veut obtenir les informations avec TABLE puis le nom de la ou des tables.<br><br><br>
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
                    </table><br><br>
                    <p class="slideContentsec">Nous avons ici une table composer de 6 champs: id (l’identifiant de chaque ligne), le nom, la ville, l’age, le salaire et l’entreprise. La table si dessus s’appellera <span class="big">tabletest</span> pendant toute la durée de l’exercice.<br><br><br>

                        Si nous désirons afficher la table au complet nous taperons dans la cmd:<br><br><span class="pre"><span class="gris">mysql ></span> SELECT * FROM tabletest ; </span></p>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 9</div>
                    <div class="text">La commande<br> SELECT - suite</div>
                    <p class="slideContent">Si nous voulons juste les colonnes des champs nom et salaire nous taperons dans le cmd:<br><br>
                        <span class="pre"><span class="gris">mysql ></span> SELECT nom, salaire FROM tabletest ; </span><br><br>
                    </p>
                    <table class="tableInSlide">
                        <tr>
                            <th>nom</th>
                            <th>salaire</th>
                        </tr>
                        <tr>
                            <td>Dupont</td>
                            <td>2950</td>
                        </tr>
                        <tr>
                            <td>Thomson</td>
                            <td>1950</td>
                        </tr>
                        <tr>
                            <td>Garcia</td>
                            <td>2400</td>
                        </tr>
                    </table><br><br>
                    <p class="slideContentsec"><br>Pour faire des recherches plus précisent nous nous servirons de la clause WHERE qui nous servira à déterminer la ou les conditions que les résultats doivent remplir. Voici les mots clés utiles:
                        <br><br><br>
                        <span class="big">Opérateurs de comparaison:</span> = (égal à), <> et != (différent de), < et > (plus petit et plus grand), < = et > = (plus petit ou égal et plus grand ou égal), IN (contenu dans une liste), BETWEEN .. AND (contenu entre deux valeurs) LIKE  (recherche avec des lettres ou un mot), IS NULL (recherche une valeur vide), IS NOT NULL (recherche une valeur non vide).
                        <br><br><br><br>
                        <span class="big">Opérateurs logiques:</span> AND ( « ET », permet de joindre plusieurs conditions à la suite et demande que toutes soient vrais), OR (« OU », joint des conditions et demande que l’une d’entre elles soient vrai), NOT (« PAS », joint des conditions et demande que les autres soit vrai, mais pas celle qui suit le NOT).</p>

                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 9</div>
                    <div class="text">La commande<br> SELECT - Suite</div>
                    <p class="slideContent">
                        Pour illustrer l’utilisation des opérateurs de comparaison et de logique nous allons les utiliser dans une recherche. Nous avons besoin de trouver les employés des l’entreprise contenant ‘United’ (mais pas juste 'United') qui ont entre 20 et 40 ans. Nous utiliserons :<br><br>

                        <span class="big">LIKE </span>: s’écrit LIKE ‘%recherche_%’. L’underscore remplace un caractère, le % remplace N caractères. (Ici le résultat doit contenir ‘recherche’, peut avoir des caractères avant et après, mais minimum un après).<br><br>
                        <span class="big">BETWEEN … AND</span> : s’écrit BETWEEN *info1* AND *info2*. Le résultat sera compris entre les informations données.<br><br>
                        <span class="big">AND</span> : Servira de liaison entre nos deux conditions.<br><br><br>
                        <span class="pre"><span class="gris">mysql ></span> SELECT * FROM tabletest WHERE       <span class="nope">________________________ </span><br><br><span class="nope">mysql> n </span>  entreprise LIKE 'united%' AND age BETWEEN 20 AND 40 ; </span><br><br></p>
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
                            <td>2</td>
                            <td>Thomson</td>
                            <td>Milan</td>
                            <td>37</td>
                            <td>1950</td>
                            <td>United Desk</td>
                        </tr>
                    </table>
                    <p class="slideContentsec"><br><br> Ici seulement Mr Thomson correspond à nos conditions et apparaitra dans nos résultats, malgré que Mr Dupont travail dans la même entreprise que lui ou que Mr Garcia est 20 ans.
                        <br><br><br>
                        Si nous avions utilisé un OR à la place du AND pour lier nos conditions, les trois personnes contenu dans la liste seraient apparu car ils remplissent tous au moins une des deux conditions.
                    </p>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">5 / 9</div>
                    <div class="text">La commande<br> SELECT - Suite</div>
                    <p class="slideContent">On peut utiliser la commande GROUP BY pour rassembler les résultats d’une query et utiliser une <a href="https://sql.sh/fonctions/agregation">fonction d’agrégat</a> sur un groupe de résultat. On place cette commande après le WHERE. On peut lui appliquer une condition en utilisant HAVING. Elle s’écrit :<br><br>
                        <span class="pre"><span class="gris">mysql ></span> SELECT ~nom champ1~, fonction(~nom champ2~) FROM tabletest <br><br><span class="nope">mysql> n </span>  GROUP BY ~nom champ1~ HAVING ~condition~; </span><br><br><br>
                        Pour trier les résultats d’un select on utilisera la commande ORDER BY qui nous permettra d’ordonner les résultats sur une ou plusieurs colonnes par ordre ascendant (avec ASC) ou descendant (avec DESC). Elle s’écrit :<br><br>
                        <span class="pre"><span class="gris">mysql ></span> SELECT ~nom champ1~, ~nom champ2~ FROM tabletest <br><br><span class="nope">mysql> n </span>  ORDER BY ~nom champ1~ ASC, ~nom champ3~ DESC; </span><br><br><br>
                        Si on désire avoir un nombre de résultats prédéfini on utilisera les commandes LIMIT et OFFSET, la première servant à indiquer la limite et la seconde à décaler le début de LIMIT. Elles s'écrivent :<br><br>
                        <span class="pre"><span class="gris">mysql ></span> SELECT * FROM tabletest LIMIT 5 OFFSET 20 ;</span><br><br>
                        Cette query affichera les lignes 21 à 25.<br><br><br>
                        Pour finir on se sert d'alias pour renommer temporairement des champs dont la lecture n'est pas clairs. Voici un exemple ou la table <span class="big">tabletest</span> sera renommer <span class="big">t</span>.<br><br>
                        <span class="pre"><span class="gris">mysql ></span> SELECT * FROM tabletest AS t;</span><br><br>
                    </p>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">6 / 9</div>
                    <div class="text">La commande<br> UPDATE</div>
                    <p class="slideContent">Pour effectuer des modifications dans nos tables nous utiliserons la commande UPDATE. En combinaison avec WHERE on déterminera la ou les champs à modifier, si aucune condition n'est utilisé alors la modification du ou des champs sera exécuté sur toute la table. La syntaxe est la suivante :<br><br>
                        <span class="pre"><span class="gris">mysql ></span> UPDATE ~nom table~ SET ~nom champ1~ = ~nouvelle valeur~<br><br><span class="nope">mysql> n </span> WHERE ~condition~;</span><br><br>
                        Nous allons changer <span class="big">tabletest</span> car le salaire de Mr Thomson qui vient d’être augmenté. Voici la query suivis de son résultat :<br><br>
                        <span class="pre"><span class="gris">mysql ></span> UPDATE tabletest SET salaire = 2150 WHERE nom = 'thomson';</span><br><br>
                    </p>
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
                            <td>2150</td>
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
                    <p class="slideContentsec">Nous allons changer <span class="big">tabletest</span> car Mr Garcia vient de déménager dans le cadre de son nouvel emploi. Nous devons changer les valeurs de 3 champs, sa ville, son entreprise et son salaire. Voici la query suivis de son résultat :<br><br>
                        <span class="pre"><span class="gris">mysql ></span> UPDATE tabletest SET salaire = 4500,<br><br><span class="nope"> mysql> n </span> ville = 'Cardiff', entreprise = 'IdeCode' WHERE id = 3;</span><br><br></p>
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
                            <td>2150</td>
                            <td>United Desk</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Garcia</td>
                            <td>Cardiff</td>
                            <td>24</td>
                            <td>4000</td>
                            <td>IdeCode</td>
                        </tr>
                    </table>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">7 / 9</div>
                    <div class="text">La commande <br> INSERT INTO</div>
                    <p class="slideContent">Si nous désirons ajouter une ou plusieurs données à une table nous utiliserons la commande INSERT INTO, on peut ajouter les lignes une par une ou en une fois, mais la query s’écrira différemment. Voici la syntaxe pour ajouter une ligne :<br><br>
                        <span class="pre"><span class="gris">mysql ></span> INSERT INTO ~nom table~ VALUES <br><br><span class="nope"> mysql> n </span> ('~nouvelle valeur~','~nouvelle valeur~',...);</span><br><br>
                        Et voici la syntaxe pour ajouter plusieurs lignes de données :<br><br>
                        <span class="pre"><span class="gris">mysql ></span> INSERT INTO ~nom table~ VALUES<br><br><span class="nope"> mysql> n </span> ('~nouvelle valeur~','~nouvelle valeur~',...), <br><br><span class="nope"> mysql> n </span> ('~nouvelle valeur~','~nouvelle valeur~',...);</span><br><br>
                        Dans les deux cas l'ordre des nouvelles valeurs est important, il doit respecter l'ordre dans lequel les champs sont déclarés dans la table.<br>
                        Quand on déclare plusieurs lignes en même temps il est important de mettre chacune de celle ci entre parenthèses et de les séparer par des virgules.<br><br>
                        On peut aussi utiliser la commande INSERT INTO pour insérer des valeurs dans certaines colonnes, il faut alors indiqué dans quelles colonnes on veut remplir les champs. Pour illustrer nous allons ajouter Mr Tesla à notre <span class="big">tabletest</span>, nous connaissons son nom, son entreprise et sa ville, mais pas le reste. Nous écrirons la query :<br><br>
                        <span class="pre"><span class="gris">mysql ></span> INSERT INTO tabletest ( nom, ville, entreprise) VALUES <br><br><span class="nope"> mysql> n </span> ('Tesla','New York','Genyus');</span><br><br>
                        Dans ce cas de figure les colonnes à remplir sont renseignés après le nom de la table et l'ordre des données indiquées ensuite doit correspondre a celui des colonnes.
                    </p>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">8 / 9</div>
                    <div class="text">La commande <br> INSERT INTO - suite</div>
                    <p class="slideContent">Notre table contient maintenant une personne de plus :</p>
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
                            <td>2150</td>
                            <td>United Desk</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Garcia</td>
                            <td>Cardiff</td>
                            <td>24</td>
                            <td>4000</td>
                            <td>IdeCode</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Tesla</td>
                            <td>New York</td>
                            <td> </td>
                            <td> </td>
                            <td>Genyus</td>
                        </tr>
                    </table>
                    <p class="slideContentsec">
                        Si par la suite on désire ajouter des valeurs aux champs laissés vide on utilisera la commande UPDATE.<br><br>
                        Nous allons ajouter deux autres lignes de données, complètes :<br><br>
                        <span class="pre"><span class="gris">mysql ></span> INSERT INTO tabletest VALUES<br><br><span class="nope"> mysql> n </span> (DEFAULT,'Blériot','Paris', 64, '', 'Aerote'), <br><br><span class="nope"> mysql> n </span> (DEFAULT,'Morse','New York', 81, '', 'Abyz');</span><br><br></p>
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
                            <td>2150</td>
                            <td>United Desk</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Garcia</td>
                            <td>Cardiff</td>
                            <td>24</td>
                            <td>4000</td>
                            <td>IdeCode</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Tesla</td>
                            <td>New York</td>
                            <td> </td>
                            <td> </td>
                            <td>Genyus</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Blériot</td>
                            <td>Paris</td>
                            <td> 64 </td>
                            <td> </td>
                            <td>Aerote</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Morse</td>
                            <td>New York</td>
                            <td> 81 </td>
                            <td> </td>
                            <td>Abyz</td>
                        </tr>
                    </table><br><br>
                    <p class="slideContentsec">
                        L'ID est noté DEFAULT seulement quand il s'auto-incrémente dans la base de donnée, autrement ce sera à nous de lui attribuer une valeur.<br><br>
                        Pour en savoir plus sur ce sujet le site <a href="https://sql.sh/cours/create-table/auto_increment"><span class="big"> sql.sh</span></a> explique le processus de création d'une DB.
                    </p>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">9 / 9</div>
                    <div class="text">La commande <br> DELETE</div>
                    <p class="slideContent">Pour supprimer des lignes d’une table nous utiliserons la commande DELETE, comme pour la commande UPDATE on l’utilise en combinaison de WHERE pour préciser la ou les lignes à supprimer, sinon c’est toute les lignes qui le seront.<br><br>

                        Voici la syntaxe :<br><br>
                        <span class="pre"><span class="gris">mysql ></span> DELETE FROM ~nom table~ WHERE ~condition~;</span><br><br><br><br>

                        Pour illustrer le propos nous allons supprimer les trois premières lignes de notre table <span class="big">tabletest</span>. Voici la query suivi de son résultat :<br><br>
                        <span class="pre"><span class="gris">mysql ></span> DELETE FROM tabletest WHERE ID <= 3;</span><br><br>
                    Le résultat sera :</p>
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
                            <td>4</td>
                            <td>Tesla</td>
                            <td>New York</td>
                            <td> </td>
                            <td> </td>
                            <td>Genyus</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Blériot</td>
                            <td>Paris</td>
                            <td> 64 </td>
                            <td> </td>
                            <td>Aerote</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Morse</td>
                            <td>New York</td>
                            <td> 81 </td>
                            <td> </td>
                            <td>Abyz</td>
                        </tr>
                    </table><br><br><br><br>
                    <p class="slideContentsec">
                        <span class="big">Félicitation !</span> vous êtes arrivé à la fin ! Merci d'avoir lu ce tutoriel !
                    </p>
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
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
                <span class="dot" onclick="currentSlide(9)"></span>
            </div>
        </div>
        <a href="?tutos"><button>
            Retour
        </button></a>
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);


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