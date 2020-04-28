<header>
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="?p=acc"> { Portfolio } </a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="?p=acc">Accueil</a></li>
                    <li><a href="?p=gal">Galerie</a></li>
                    <li><a href="?p=tutos">Tutoriel</a></li>
                    <li><a href="?p=link">Liens</a></li>
                    <li><a href="?p=cv">CV</a></li>
                    <li><a href="?p=contact">Contact</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
</header>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/scripts.js"></script>


<script>
    $('.navTrigger').click(function () {
        $(this).toggleClass('active');
        console.log("Menu cliqué");
        $("#mainListDiv").toggleClass("show_list");
        $("#mainListDiv").fadeIn();

    });

</script>