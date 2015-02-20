<!doctype html>


<html lang="fr" class="no-js">
<head>
    <title>Guindaille facile</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300,100,200' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">


</head>
<body>

<!-- Container -->
<div id="container">
    <!-- Header
        ================================================== -->
    <header class="clearfix">
        <!-- Static navbar -->
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="?p=home"><img alt="" src="images/logo.png"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a class="active" href="index.php">Accueil</a></li>
                        <li><a href="?p=etudiant">Coin étudiant</a></li>
                        <li><a href="#">Alcools</a>
                            <ul class="drop-down">
                                <li><a href="?p=cocktail">Cocktails</a></li>
                                <li><a href="?p=biere">Bières</a></li>
                                <li><a href="?p=fort">Alcools forts</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?p=jeux">Jeux d'alcool</a></li>
                        <li><a href="index.php?p=limite">Connaitre ses limites</a></li>
                        <li class="drop"><a href="#" class="open-search"><i class="fa fa-search"></i></a>
                            <form class="form-search">
                                <input type="search" placeholder="Chercher un alcool"/>
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

   <?php echo $content; ?>


    <footer>
        <div class="social-section">
            <ul class="social-icons triggerAnimation animated" data-animate="tada">
                <li><a class="facebook" href="index.php"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="index.php"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
        <div class="up-footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="widget footer-widget text-widget">
                            <h1>À propos</h1>
                            <p>Guindaille facile est un site réalisé entièrement par des étudiants en informatique à Liège. </p>
                            <p>En cherchant après des bonnes idées d'alcools à boire en soirée, un étudiant s'est rendu compte qu'il y avait peu de bons sites 
                               qui présentent des listes de cocktails, bières ou alcools forts, d'une façon vraiment pratique et facile. Il a donc décidé de créer son propre site
                               avec l'aide de quelques amis programmeurs, et c'est ainsi qu'est né Guindaille facile.  
                            </p>
                            <img src="images/footer-logo.png" alt="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="widget footer-widget contacts-widget">
                            <h1>Contact</h1>
                            <p>Pour contacter les développeurs du site, vous pouvez envoyer un mail à guindaillefacile@gmail.com. </p>
                            <p>Toute question/remarque est la bienvenue, ce site est le nôtre autant que celui des utilisateurs, nous 
                               prendrons tout avis pertinent en compte pour améliorer au maximum l'expérience de navigation.</p>
                        </div>
                    </div>
                </div>
                <div class="footer-line">
                    <p>Bootstrap theme used : Marble</p>
                    <p>Made by : Guindaillefacile.com dev team</p>
                </div>
            </div>
        </div>

    </footer>
    <!-- End footer -->
</div>
<!-- End Container -->

<!-- THE SCRIPT INITIALISATION -->
<!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.migrate.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/plugins-scroll.js"></script>
<script type="text/javascript" src="js/waypoint.min.js"></script>
<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>


<script type="text/javascript">

    var revapi;

    jQuery(document).ready(function() {

        revapi = jQuery('.tp-banner').revolution(
            {
                delay:9000,
                startwidth:1170,
                startheight:738,
                hideThumbs:10,
                fullWidth:"on",
                forceFullWidth:"on",
                navigationType:"none",
                navigationArrows:"none",
                onHoverStop:"off"
            });

        var slideThumb = $('.slide-thumbs');

        slideThumb.on('click', function(){
            var btn = $(this);
            revapi.revshowslide(btn.data('slide'));

        });
        revapi.bind("revolution.slide.onchange", function (e,data) {
            slideThumb.parent('li').removeClass('active');
            $('#slidethumb' + data.slideIndex).parent('li').addClass('active');
        });

    });	//ready

</script>

<!-- END REVOLUTION SLIDER -->

</body>
</html>