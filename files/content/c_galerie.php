<section>
    <div class="contenu">
        <h1>{ Galerie }</h1>
        <h2>Projet - Art - Craft</h2>
        <!-- GALERIE -->

        <div class="galerie">
            <div class="img-caption">
                <p id="caption"></p>
            </div>

            <div class="img-slide">
                <img src="img/galerie/autoform.jpg" style="width:100%" alt="">
            </div>

            <div class="img-slide">
                <img src="img/galerie/preformation.jpg" style="width:100%" alt="">
            </div>

            <div class="img-slide">
                <img src="img/galerie/photoshop.jpg" style="width:100%" alt="">
            </div>

            <div class="img-slide">
                <img src="img/galerie/montagne.jpg" style="width:100%" alt="">
            </div>

            <div class="img-slide">
                <img src="img/galerie/indianwall.jpg" style="width:100%" alt="">
            </div>

            <div class="img-slide">
                <img src="img/galerie/shroums.jpg" style="width:100%" alt="">
            </div>

            <div class="img-slide">
                <img src="img/galerie/indianboat.jpg" style="width:100%" alt="">
            </div>

            <div class="img-slide">
                <img src="img/galerie/mcentral.jpg" style="width:100%" alt="">
            </div>

            <div class="img-slide">
                <img src="img/galerie/dczoo.jpg" style="width:100%" alt="">
            </div>

            <a class="img-prec" onclick="plusSlides(-1)">❮</a>
            <a class="img-suiv" onclick="plusSlides(1)">❯</a>


            <div class="row">
                <div class="column">
                    <img class="demo curseur" src="img/galerie/mini/autoform.jpg" style="width:100%" onclick="currentSlide(1)" alt="Site en HTML et CSS - 2018">
                </div>
                <div class="column">
                    <img class="demo curseur" src="img/galerie/mini/preformation.jpg" style="width:100%" onclick="currentSlide(2)" alt="Site de la préformation pour le CF2M - 2020">
                </div>
                <div class="column">
                    <img class="demo curseur" src="img/galerie/mini/photoshop.jpg" style="width:100%" onclick="currentSlide(3)" alt="Travaux pratiques Photoshop - 2020">
                </div>
                <div class="column">
                    <img class="demo curseur" src="img/galerie/mini/montagne.jpg" style="width:100%" onclick="currentSlide(4)" alt="Photographie Allemagne - 2013">
                </div>
                <div class="column">
                    <img class="demo curseur" src="img/galerie/mini/indianwall.jpg" style="width:100%" onclick="currentSlide(5)" alt="Photographie Inde - 2015">
                </div>
                <div class="column">
                    <img class="demo curseur" src="img/galerie/mini/shroums.jpg" style="width:100%" onclick="currentSlide(6)" alt="Phographie montagne - 2014">
                </div>
                <div class="column">
                    <img class="demo curseur" src="img/galerie/mini/indianboat.jpg" style="width:100%" onclick="currentSlide(7)" alt="Photographie Inde - 2015">
                </div>
                <div class="column">
                    <img class="demo curseur" src="img/galerie/mini/mcentral.jpg" style="width:100%" onclick="currentSlide(8)" alt="Photographie France - 2012">
                </div>
                <div class="column">
                    <img class="demo curseur" src="img/galerie/mini/dczoo.jpg" style="width:100%" onclick="currentSlide(9)" alt="¨Photographie USA - 2018">
                </div>
            </div>
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
                let i;
                let slides = document.getElementsByClassName("img-slide");
                let demo = document.getElementsByClassName("demo");
                let captionText = document.getElementById("caption");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < demo.length; i++) {
                    demo[i].className = demo[i].className.replace(" img-active", "");
                }
                slides[slideIndex-1].style.display = "block";
                demo[slideIndex-1].className += " img-active";
                captionText.innerHTML = demo[slideIndex-1].alt;
            }
        </script>

        <button>
            <a href="?p=acc">Retour à l'accueil</a>
        </button>
    </div>
</section>