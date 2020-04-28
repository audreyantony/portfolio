<section>
    <div class="contenu">
        <h1>{ Contact }</h1>
        <h2>Un petit mot ou une question ?</h2>
        <form method="post">
            <div>
                <input type="text" name="nom" placeholder="Votre nom">
                <input type="text" name="prenom" placeholder="Votre prénom">
                <input type="text" name="email" placeholder="Votre adresse email">
            </div>
            <div>
                <textarea name="askorelse" placeholder="Votre question, suggestion et/ou avis !"></textarea>
            </div>
            <?php
            $monMailPerso="audrey@calzi.fr";
            $email="mariejacynthe@delamotte.com";

            if(isset($_POST['envoyer'])) { //BOUTON ENVOYER APPUYÉ
                //VÉRIFICATION DU CHAMP MAIL
                if(empty($_POST['email'])) {
                    echo "Le champ mail est vide";

                } else {
                    //VÉRIFICATION DU CONTENU DU CHAMP MAIL
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        echo "L'adresse mail entrée est incorrecte";

                    }else{
                        //VÉRIFICATION DU CHAMP SUJET
                        if(empty($_POST['prenom']) OR empty($_POST['nom'])) {
                            echo "Merci d'indiquer votre nom et votre prénom :)";

                        }else{
                            //VÉRIFICATION DU CHAMP MESSAGE
                            if(empty($_POST['askorelse'])) {
                                echo "Le champ message est vide";

                            }else{
                                //SI TOUT EST BON => SEND

                                //on renseigne les entêtes de la fonction mail de PHP
                                $Entetes = "MIME-Version: 1.0\r\n";
                                $Entetes .= "Content-type: text/html; charset=UTF-8\n";
                                //SÉCURISATION DES CHAMP :
                                $email=htmlentities($_POST['email'],ENT_QUOTES,"UTF-8");
                                $prenom=htmlentities($_POST['prenom'],ENT_QUOTES,"UTF-8");
                                $nom=htmlentities($_POST['nom'],ENT_QUOTES,"UTF-8");
                                $askorelse=htmlentities($_POST['askorelse'],ENT_QUOTES,"UTF-8");

                                //ENVOI DU MAIL :

                                if(mail($monMailPerso,$prenom." ".$nom,"Voici le message envoyé par $prenom $nom : <br> $askorelse", $Entetes)) {
                                    //NL2BR = SAUT DE LIGNE CONSERVÉ
                                    //urf8_encode =  CONSERVE LES ACCENTS
                                    echo "Le mail à été envoyé avec succès !";

                                } else {
                                    echo "Une erreur est survenue, le mail n'a pas été envoyé";
                                }
                            }
                        }
                    }
                }
            }
            ?>
            <input type="submit" name="envoyer" value="Envoyer" class="btnenvoyer">

        </form>
        <button>
            <a href="?p=acc">Retour à l'accueil</a>
        </button>
    </div>
</section>