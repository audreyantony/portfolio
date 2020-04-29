<section>
    <div class="contenu">
        <h1>{ Tutos }</h1>
        <h2>Favoris et fait maison</h2>
        <div>
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 6</div>
                    <div class="text">Caption Text</div>
                    <p class="slideContent">TEXTE TEXTE TEXTE</p>

                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 6</div>
                    <div class="text">Caption Text</div>
                    <p class="slideContent">TEXTE TEXTE TEXTE</p>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 6</div>
                    <div class="text">Caption Text</div>
                    <p class="slideContent">TEXTE TEXTE TEXTE</p>
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