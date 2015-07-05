<?php include("includes/connectionpdo.php");
session_start();


$reponse = $bdd->prepare('SELECT *
							FROM jeux
							WHERE idjeu = ?');
$reponse->execute(array($_GET['id']));
$result = $reponse->fetch();
if(!$result)
	header("Location: jeux.php");

$lid = $_GET['id'];

/*Jeux similaires*/
$type =  $result['type']; 

$sql3 = "SELECT *
              FROM jeux 
              WHERE type LIKE '$type'
              AND idjeu <> $lid
              ORDER BY popularite DESC LIMIT 10";



 ?>

<!doctype html>

<html lang="fr" class="no-js">

<?php include("includes/head.php") ?>
<head>
<title><?= $result['nom']; ?> : règles du jeu - les jeux d'alcool - Guindaille Facile</title>
<meta name="description" content="Tout ce qu'il faut savoir sur les règles du jeu d'alcool de type <?= $result['type']; ?>, le <?= $result['nom']; ?>." />
</head>

<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Container -->
<div id="container">

<?php include("includes/header.php") ?>
<!-- content 
			================================================== -->
		<div id="content">

			<!-- page-banner 
				================================================== -->
			<div class="section-content page-banner blog-page-banner">
				<div class="container">
					<h1><?= $result['nom']; ?></h1>

				</div>
			</div>
			

			<!-- single project -section 
				================================================== -->
			<div class="single-project">
				<div class="container">

					<div class="row">
					  <br>
						<div class="col-md-7">
							<div class="project-block triggerAnimation animated" data-animate="slideInLeft">
								<div class="row">
									<div class="col-md-12">
										<div class="single-project-content">
											<h1>À propos</h1>
											<h3>Le <?= $result['nom'];?> est un jeu d'alcool de type <?= $result['type']; ?> qui se joue à <?= $result['nbjoueursmin']; ?> 
												au minimum.
											</h3>

										</div>
									</div>
								</div>
								<div class="single-project-content">
									<h1>Les règles</h1>
									<p><?= $result['description']; ?></p>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="single-project-content">
											<h1>Note des guindailleurs</h1>

											<ul class="feature-list2">
												<br>
												<li>
													<span><i class="fa fa-star"></i></span>
													<div class="list-cont">
														<h3><?= $result['cotesur5'];?>/5</h3>
													</div>
												</li>
											</ul>

										</div>

									</div>
								</div>

							</div>
						</div>

						<div class="col-md-5">
							<div class="flexslider">
								<ul class="slides">
									<li>
										<img src="images/min/<?= $result['image1']; ?>" alt="Première image du jeu d'alcool <?= $result['nom'];?>">
									</li>
									<li>
										<img src="images/min/<?= $result['image2']; ?>" alt="Deuxième image du jeu d'alcool <?= $result['nom'];?>">
									</li>
									<li>
										<img src="images/min/<?= $result['image3']; ?>" alt="Troisième image du jeu d'alcool <?= $result['nom'];?>">
									</li>
								</ul>
							</div>
							<br><br>
							<div class="fb-like col-sm-12 col-xs-12 hidden-xs" data-href="https://www.facebook.com/GuindailleFacile?fref=ts" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
						</div>
					</div>

				</div>
			</div>

			<!-- portfolio-section 
				================================================== -->
			<div class="section-content portfolio-section">
				<div class="title-section">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Jeux similaires</h1>
					</div>
				</div>
				<div class="portfolio-box triggerAnimation animated" data-animate="bounceIn">
					<div id="owl-demo" class="owl-carousel owl-theme">

						<?php foreach ($bdd->query($sql3) as $row) : ?>

                    <div class="item project-post">
                        <div class="project-gal">
                            <img src="images/min/<?php echo $row['image1']; ?>" alt="Image du jeu d'alcool <?php echo $row['nom']; ?>">
                                <a href="descriptionjeux.php?id=<?php echo $row['idjeu']; ?>">
                                    <p>
                                        <i class="fa fa-star"></i> <?php echo $row['cotesur5']; ?>/5<br/>
                                        <i class="fa fa-tag"></i> <?php echo $row['type']; ?><br/>
                                        <i class="fa fa-group"></i> <?php echo $row['nbjoueursmin']; ?> + joueurs<br/>
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
						<a class="owl-prev button-third" href="single-project.html#"><i class="fa fa-angle-left"></i></a>
						<a class="button-third" href="jeux.php">Voir tous les jeux</a>
						<a class="owl-next button-third" href="single-project.html#"><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<div class="container comment-section">
			  <div class="title-section">
			    <div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Votre avis à propos du jeu d'alcool "<?= $result['nom']?>"</h1>
					</div>
			  </div>

				<div id="disqus_thread"></div>
			<script type="text/javascript">
			    /* * * CONFIGURATION VARIABLES * * */
			    var disqus_shortname = 'guindaillefacile';
			    
			    /* * * DON'T EDIT BELOW THIS LINE * * */
			    (function() {
			        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			    })();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

			<script type="text/javascript">
			    /* * * CONFIGURATION VARIABLES * * */
			    var disqus_shortname = 'guindaillefacile';
			    
			    /* * * DON'T EDIT BELOW THIS LINE * * */
			    (function () {
			        var s = document.createElement('script'); s.async = true;
			        s.type = 'text/javascript';
			        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
			        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
			    }());
			</script>

				
			</div>

		</div>
		<!-- End content -->



    <?php include("includes/footer.php") ?>

</div>
<!-- End Container -->
<?php include("includes/script.php") ?>

</body>
</html>