<?php include("includes/connectionpdo.php");
session_start();

$reponse = $bdd->prepare('SELECT *
							FROM bieres AS b INNER JOIN ingredients AS i
							ON b.idingredient = i .idingredient
							INNER JOIN boissons AS b2
							ON b.idingredient = b2.idingredient
							WHERE b.idingredient = ?');
$reponse->execute(array($_GET['id']));
$result = $reponse->fetch();
if(!$result)
	header("Location: biere.php");

$lid = $_GET['id'];

/*Avantages et inconvénients*/
$sql = "SELECT nom 
		FROM avantagesinconvenients AS a, avoir AS b
		WHERE a.idavantage = b.idavantage
		AND idingredient = $lid
		AND a.avantageouinconvenient = 'A' ";

$sql2 = "SELECT nom 
		FROM avantagesinconvenients AS a, avoir AS b
		WHERE a.idavantage = b.idavantage
		AND idingredient = $lid
		AND a.avantageouinconvenient = 'I' ";

/*Bières similaires*/

$type =  $result['type']; 

$sql3 = "SELECT *
              FROM bieres AS b INNER JOIN ingredients AS i
              ON b.idingredient = i .idingredient
              INNER JOIN boissons AS b2
              ON b.idingredient = b2.idingredient
              WHERE b.type LIKE '$type'
              AND b.idingredient <> $lid
              ORDER BY b2.popularite DESC LIMIT 10";

?>
<!doctype html>

<html lang="fr" class="no-js">

<?php include("includes/head.php"); ?>
<head><title><?= $result['nom']; ?> | Guindaille Facile</title>
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
 

    <?php include("includes/header.php");
	?>

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
    			  <div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
        			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- Pub adaptable dessus de description -->
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-3078792395695520"
                   data-ad-slot="3717725692"
                   data-ad-format="auto"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
            </div>
    			</div>
    			<br>
    			
    			
    			<script> 
  
          // Run after all the page elements have loaded
          window.onload = function(){ 
          
            // This will take care of asynchronous Google ads
            setTimeout(function() { 
              
              // We are targeting the first banner ad of AdSense
              var ad = document.querySelector("ins.adsbygoogle");
              
              // If the ad contains no innerHTML, ad blockers are at work
              if (ad && ad.innerHTML.replace(/\s/g, "").length == 0) {
                
                // Since ad blocks hide ads using CSS too
                ad.style.cssText = 'display:block !important'; 
                
                // You can put any text, image or even IFRAME tags here
                ad.innerHTML = "Salut, utilisateur adblock, nous non plus nous n'aimons pas la pub intrusive sur internet, et nous avons bien fait attention à rendre la nôtre discrète. Veux-tu essayer de désactiver adblock pour notre site juste un moment pour voir si la pub te dérange tant que ça? Merci et bonne continuation sur Guindaille Facile :) ";
              
              }
              
            }, 2000); // The ad blocker check is performed 2 seconds after the page load 
          }; 
          
        </script>
        
        

					<div class="row">
						<div class="col-md-7">
							<div class="project-block triggerAnimation animated" data-animate="slideInLeft">
								<div class="row">
									<div class="col-md-12">
										<div class="single-project-content">
											<h1>À propos</h1>
											<h3>La <?= $result['nom'];?> est une bière <?= $result['type']; ?> <?= $result['couleur']; ?>
											originaire de <?= ucfirst($result['paysorigine']); ?>.
											Elle contient <?= $result['pourcentagealcool']; ?> % d'alcool et coûte en moyenne <?= $result['prixlitre']; ?> euros/litre en magasin.
										</h3>

										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="single-project-content">
											<h1>Avantages </h1>
											<ul class="feature-list2">
												<br>
												<?php foreach ($bdd->query($sql) as $row) : ?>
												<li>
													<div class="list">
														<h3>- <?php echo $row['nom']; ?></h3>
													</div>
												</li>
												<?php endforeach;	?>
											</ul>

										</div>
									</div>
									<div class="col-md-6 ">
										<div class="single-project-content">
											<h1>Inconvénients </h1>
											
											<ul class="feature-list2">
												<br>
												<?php foreach ($bdd->query($sql2) as $row) : ?>
												<li>
													<div class="list">
														<h3>- <?php echo $row['nom']; ?></h3>
													</div>
												</li>
												<?php endforeach;	?>
											</ul>

										</div>
									</div>
								</div>
								<div class="single-project-content">
									<h1>Description</h1>
									
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
										<img src="images/min/<?= $result['image1']; ?>" alt="Première image de la bière <?= $result['nom'];?>">
									</li>
									<li>
										<img src="images/min/<?= $result['image2']; ?>" alt="Deuxième image de la bière <?= $result['nom'];?>">
									</li>
									<li>
										<img src="images/min/<?= $result['image3']; ?>" alt="Troisième image de la bière <?= $result['nom'];?>">
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
						<h1>Bières similaires</h1>
					</div>
				</div>
				<div class="portfolio-box triggerAnimation animated" data-animate="bounceIn">
					<div id="owl-demo" class="owl-carousel owl-theme">

						<?php foreach ($bdd->query($sql3) as $row) : ?>

                    <div class="item project-post">
                        <div class="project-gal">
                            <img src="images/min/<?php echo $row['image1']; ?>" alt="Image de la bière <?php echo $row['nom']; ?>">
                                <a href="descriptionbiere.php?id=<?php echo $row['idingredient']; ?>">
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
						<a class="owl-prev button-third button-coloration" href="single-project.html#"><i class="fa fa-angle-left"></i></a>
						<a class="button-third button-coloration" href="biere.php">Voir toutes les bières</a>
						<a class="owl-next button-third button-coloration" href="single-project.html#"><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<div class="container comment-section">

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