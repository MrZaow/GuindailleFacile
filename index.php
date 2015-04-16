<?php include("includes/connectionpdo.php");

/*Les articles*/
$sql3 = "SELECT id, titre, auteur, DAY(date) AS jour, MONTH(date) AS mois, contenu
                FROM articles
                ORDER BY date DESC
                LIMIT 10";

/*Le nombre d'alcool référencés*/
$sql4 = "SELECT COUNT(idingredient) AS cocktailsreferences
        FROM cocktails
";
/*Bières référencées*/
$sql6 = "SELECT COUNT(idingredient) AS bieresreferencees
        FROM bieres
";

/*Jeux référencées*/
$sql7 = "SELECT COUNT(idjeu) AS jeuxreferences
        FROM jeux
";

/*Degré d'alcool total*/
$sql5 = "SELECT SUM(idingredient) AS degretotal
        FROM boissons
";


?>

<!doctype html>

<html lang="fr" class="no-js">

<?php include("includes/head.php") ?>

<body>
<!-- Container -->
<div id="container">
 

    <?php include("includes/header.php") ?>

    <div id="slider" class="slider1">
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>	<!-- SLIDE  -->
                    <li data-transition="3dcurtain-horizontal" data-slotamount="7" data-masterspeed="500" >
                        <!-- MAIN IMAGE -->
                        <img src="upload/banners/slide1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption large_bold_white skewfromrightshort customout"
                             data-x="370"
                             data-y="274"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="1200"
                             data-easing="Back.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on"
                             style="z-index: 4">Guindaille facile
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption medium_thin_white customin ltl"
                             data-x="430"
                             data-y="340"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:80% 0%;"
                             data-speed="1000"
                             data-start="1500"
                             data-easing="Back.easeInOut"
                             data-endspeed="400"
                             data-endeasing="Back.easeIn"
                             style="z-index: 14"> La référence pour choisir vos alcools de soirée
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                        <!-- MAIN IMAGE -->
                        <img src="upload/banners/back5.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption large_bold_white skewfromrightshort customout"
                             data-x="374"
                             data-y="274"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="1200"
                             data-easing="Back.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on"
                             style="z-index: 4">Bières, cocktails
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption medium_thin_white customin ltl"
                             data-x="435"
                             data-y="350"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="1000"
                             data-start="1500"
                             data-easing="Back.easeInOut"
                             data-endspeed="400"
                             data-endeasing="Back.easeIn"
                             style="z-index: 14">vous trouverez forcément votre bonheur !
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption medium_thin_white customin ltl"
                             data-x="431"
                             data-y="400"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="1000"
                             data-start="2000"
                             data-easing="Back.easeInOut"
                             data-endspeed="400"
                             data-endeasing="Back.easeIn"
                             style="z-index: 14"><a class="button-large" href="biere.php">Les bières</a><a class="button-large" href="cocktail.php">Les cocktails</a>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="curtain-1" data-slotamount="7" data-masterspeed="600" >
                        <!-- MAIN IMAGE -->
                        <img src="upload/banners/back6.jpg" style='background-color:#b2c4cc' alt=""  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption large_bold_white skewfromrightshort customout"
                             data-x="15"
                             data-y="200"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="1200"
                             data-easing="Back.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on"
                             style="z-index: 4">Avec un coin <br> spécial étudiants !
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption medium_thin_white customin ltl"
                             data-x="15"
                             data-y="350"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="1000"
                             data-start="1500"
                             data-easing="Back.easeInOut"
                             data-endspeed="400"
                             data-endeasing="Back.easeIn"
                             style="z-index: 14">Des pires soirées aux plus épiques, balancez tout !
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption medium_thin_white customin ltl"
                             data-x="5"
                             data-y="450"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="1000"
                             data-start="1800"
                             data-easing="Back.easeInOut"
                             data-endspeed="400"
                             data-endeasing="Back.easeIn"
                             style="z-index: 14"><a class="button-large" href="etudiant.php">Le coin étudiant</a>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption skewfromrightshort customout"
                             data-x="750"
                             data-y="50"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="2500"
                             data-easing="Back.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on"
                             style="z-index: 9">
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="flyin" data-slotamount="7" data-masterspeed="800" >
                        <!-- MAIN IMAGE -->
                        <img src="upload/banners/back.jpg" style='background-color:#b2c4cc' alt=""  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption skewfromrightshort customout"
                             data-x="0"
                             data-y="50"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="1200"
                             data-easing="Back.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on"
                             style="z-index: 9">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption large_bold_white skewfromrightshort customout"
                             data-x="480"
                             data-y="200"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.55;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:400;transformOrigin:55% 50%;"
                             data-speed="500"
                             data-start="1800"
                             data-easing="Back.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on"
                             style="z-index: 10; font-size:50px">Les meilleurs jeux d'alcools, <br>super simples et bibitifs
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption medium_thin_white customin ltl"
                             data-x="480"
                             data-y="350"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="1000"
                             data-start="2100"
                             data-easing="Back.easeInOut"
                             data-endspeed="400"
                             data-endeasing="Back.easeIn"
                             style="z-index: 12">Une série TV, un jeu vidéo, des cartes, ou rien, tout est bon pour boire
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption medium_thin_white customin ltl"
                             data-x="470"
                             data-y="450"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="1000"
                             data-start="2500"
                             data-easing="Back.easeInOut"
                             data-endspeed="400"
                             data-endeasing="Back.easeIn"
                             style="z-index: 14"><a class="button-large" href="jeux.php">Les jeux d'alcool</a>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
        <div class="banner-thumbs">
            <div class="container triggerAnimation animated" data-animate="slideInUp">
                <!-- slide-buttons -->
                <ul class="slider-thumbnails">
                    <li class="active">
                        <a href="index.php" class="btn slide-thumbs" id="slidethumb1" data-slide="1">
                            <span>1</span>
                            <h2>Alcools </h2>
                            <p>Découvrir plein de boissons</p>
                        </a>
                    </li>
                    <li>
                        <a href="index.php" class="btn slide-thumbs" id="slidethumb2" data-slide="2">
                            <span>2</span>
                            <h2>Découvertes </h2>
                            <p>Varier la bibine de soirée</p>
                        </a>
                    </li>
                    <li>
                        <a href="index.php" class="btn slide-thumbs" id="slidethumb3" data-slide="3">
                            <span>3</span>
                            <h2>Etudiants </h2>
                            <p>Du contenu juste pour vous </p>
                        </a>
                    </li>
                    <li>
                        <a href="index.php" class="btn slide-thumbs" id="slidethumb4" data-slide="4">
                            <span>4</span>
                            <h2>Fun</h2>
                            <p>Des tonnes de jeux d'alcool</p>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- End slider -->

    <!-- content
        ================================================== -->
    <div id="content">

        <!-- portfolio-section
            ================================================== -->
        <div class="section-content portfolio-section">
            <div class="title-section">
                <div class="container triggerAnimation animated" data-animate="bounceIn">
                    <h1>Les incontournables</h1>
                    <p>Cocktails les plus populaires </p>
                </div>
            </div>
            <div class="portfolio-box triggerAnimation animated" data-animate="pulse">
                <div id="owl-demo" class="owl-carousel owl-theme">

                <?php
                    $sql = "SELECT *
              FROM cocktails AS b INNER JOIN ingredients AS i
              ON b.idingredient = i .idingredient
              INNER JOIN boissons AS b2
              ON b.idingredient = b2.idingredient

 
              ORDER BY b2.popularite DESC LIMIT 10";

                foreach ($bdd->query($sql) as $row) : ?>

                    <div class="item project-post">
                        <div class="project-gal">
                            <img src="images/min/<?php echo $row['image1']; ?>" alt="#">
                                <a href="descriptioncocktail.php?id=<?php echo $row['idingredient']; ?>">
                                    <p>
                                        <i class="fa fa-star"></i> <?php echo $row['cotesur5']; ?>/5<br/>
                                        <i class="fa fa-glass"></i><?php echo $row['pourcentagealcool']; ?>°<br/>
                                        <i class="fa fa-eur"></i><?php echo $row['prixlitre']; ?> euros/l<br/>
                                    </p>
                                </a>
                        </div>
                        <div class="project-content">
                            <h2><?php echo $row['nom']; ?></h2>
                            <p><?php echo $row['resume']; ?></p>
                        </div>
                    </div>
                <?php endforeach;   ?>

                </div>
                <div class="buttons">
                    <a class="owl-prev button-third" href="index.php"><i class="fa fa-angle-left"></i></a>
                    <a class="button-third" href="cocktail.php">Voir tous les cocktails</a>
                    <a class="owl-next button-third" href="index.php"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>

        

        <!-- statistic-section
            ================================================== -->
        <div class="section-content statistic-section parallax" data-stellar-background-ratio="0">
            <div class="container">
                <div class="statistic-box triggerAnimation animated" data-animate="shake">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="statistic-post">
                                <div class="statistic-counter">
                                    <i class="fa fa-beer"></i>
                                    <?php foreach($bdd->query($sql6) as $row): ?>
                                    <p><span class="timer" data-from="0" data-to="<?php echo $row['bieresreferencees']; ?>"></span></p>
                                    <?php endforeach; ?>
                                    <p>Bières référencées</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="statistic-post">
                                <div class="statistic-counter">
                                    <i class="fa fa-glass"></i>
                                    <?php foreach($bdd->query($sql4) as $row): ?>
                                    <p><span class="timer" data-from="0" data-to="<?php echo $row['cocktailsreferences']; ?>"></span></p>
                                    <?php endforeach; ?>
                                    <p>Cocktails référencés</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="statistic-post">
                                <div class="statistic-counter">
                                    <i class="fa fa-line-chart"></i>
                                    <?php foreach($bdd->query($sql5) as $row): ?>
                                    <p><span class="timer" data-from="0" data-to="<?php echo $row['degretotal']; ?>"></span></p>
                                    <?php endforeach; ?>
                                    <p>Degré d'alcool total</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="statistic-post">
                                <div class="statistic-counter">
                                    <i class="fa fa-star"></i>
                                    <?php foreach($bdd->query($sql7) as $row): ?>
                                    <p><span class="timer" data-from="0" data-to="<?php echo $row['jeuxreferences']; ?>"></span></p>
                                    <?php endforeach; ?>
                                    <p>Jeux d'alcools</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- blog-section
            ================================================== -->
        <div class="section-content blog-section">
            <div class="title-section">
                <div class="container triggerAnimation animated" data-animate="bounceIn">
                    <h1>Posts récents</h1>
                    <p>Publications récentes du Coin Étudiant</p>
                </div>
            </div>
            <div class="container triggerAnimation animated" data-animate="fadeInUp">
                <div id="owl-demo2" class="owl-carousel owl-theme">

                    <?php  foreach($bdd->query($sql3) as $row) : ?> 
                    <div class="item blog-post ">
                        <div class="post-content">
                            <div class="post-date">
                                    <p><span><?php echo $row['jour']?></span><?php echo $row['mois']?></p>
                            </div>
                            <div class="content-data">
                                <h2><a href="article.php?id=<?php echo $row['id'] ?>"><?php echo $row['titre'] ?></a></h2>
                                <p><?php echo $row['auteur']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="buttons">
                    <a class="owl-prev button-third" href="index.php"><i class="fa fa-angle-left"></i></a>
                    <a class="button-third" href="etudiant.php">Voir tous les posts</a>
                    <a class="owl-next button-third" href="index.php"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="section-content shortcodes-section">
            <div class="container">

                <div class="shortcodes-elem">
                    <h1>Ce que les gens pensent de Guindaille Facile</h1>
                    <div class="back-col">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="testimonial-post">
                                    <img src="upload/testim1.jpg" alt="">
                                    <h2> Philippe I - Roi de Belgique </h2>
                                    <p> “ Guindaille Facile m'aide à supporter les conneries de mes ministres. ”</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="testimonial-post">
                                    <img src="upload/testim2.jpg" alt="">
                                    <h2> Miley Cirus - Chanteuse </h2>
                                    <p> “ Je n'imaginais pas qu'on puisse se rendre plus ridicule que moi. Mais ça, c'était avant que je lise la rubrique "Coin étudiant". ”</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="testimonial-post">
                                    <img src="upload/testim3.jpg" alt="">
                                    <h2> Albert Einstein - Scientifique </h2>
                                    <p> “ Selon mes calculs, vous êtes garantis de passer des soirées exponentiellement festives si vous consultez Guindaille Facile régulièrement. ”</p>
                                </div>
                            </div>
                        </div>                          
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End content -->

    <?php include("includes/footer.php") ?>

</div>
<!-- End Container -->
<?php include("includes/script.php") ?>

</body>
</html>