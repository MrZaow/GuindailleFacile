<?php include("includes/connectionpdo.php");
session_start();

$reponse = $bdd->prepare('SELECT *
							FROM alcoolsforts AS b INNER JOIN ingredients AS i
							ON b.idingredient = i .idingredient
							INNER JOIN boissons AS b2
							ON b.idingredient = b2.idingredient
							WHERE b.idingredient = ?');
$reponse->execute(array($_GET['id']));
$result = $reponse->fetch();
if(!$result)
	header("Location: fort.php");

$lid = $_GET['id'];

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

$sql3 = "SELECT *
		FROM meilleursalcools AS a, exemplariser AS b
		WHERE a.idmeilleuralcool = b.idmeilleuralcool
		AND idingredient = $lid ";

/*Cocktails à base de l'alcool fort*/
$sql4 = "SELECT *
              FROM cocktails AS c, boissons AS b, ingredients AS i, contenir 
              WHERE c.idingredient = b.idingredient
              AND b.idingredient = i.idingredient
              AND c.idingredient = contenir.idingredient
              AND contenir.idingredient_INGREDIENTS = $lid
              ";


?>

<!doctype html>

<html lang="fr" class="no-js">
<?php include("includes/head.php") ?>

<body>
<!-- Container -->
<div id="container">
 

    <?php include("includes/header.php") ?>

<!-- content 
			================================================== -->
		<div id="content">

			<!-- page-banner 
				================================================== -->
			<div class="section-content page-banner portfolio-page-banner">
				<div class="container">
					<h1>Les Alcools Forts</h1>

				</div>
			</div>

			<!-- single project -section 
				================================================== -->
			<div class="single-project">
				<div class="container">

					<div class="title-section white">
						<div class="container triggerAnimation animated" data-animate="bounceIn">
							<h1><?= $result['nom']; ?></h1>
							<p><?= $result['resume']; ?></p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-7">
							<div class="project-block triggerAnimation animated" data-animate="slideInLeft">
								<div class="row">
									<div class="col-md-12">
										<div class="single-project-content">
											<h1>À propos</h1>
											<h3>Le <?=$result['nom'];?> est un alcool fort contenant <?= $result['pourcentagealcool']; ?> % d'alcool et coûtant en moyenne <?= $result['prixlitre']; ?> euros/litre en
												magasin.</h3>
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
														<h3>- <?php echo $row['nom'];?></h3>
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
										<img src="images/min/<?= $result['image1']; ?>">
									</li>
									<li>
										<img src="images/min/<?= $result['image2']; ?>">
									</li>
									<li>
										<img src="images/min/<?= $result['image3']; ?>">
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="row">

					</div>
				
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="single-project-content">
								<h1>Les marques préférées des guindailleurs</h1>
								
								<ul class="feature-list2">
									<br>
									<?php foreach ($bdd->query($sql3) as $row) : ?>
									<li>
										<div class="list">
											<h3>- <?php echo $row['nom']; ?>. Prix moyen :  <?php echo $row['prixlitre']; ?> euros/l </h3>
										</div>
									</li>
									<?php endforeach;	?>
								</ul>

							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- portfolio-section 
				================================================== -->
			<div class="section-content portfolio-section">
				<div class="title-section">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Cocktails à base de cet alcool fort </h1>
					</div>
				</div>
				<div class="portfolio-box triggerAnimation animated" data-animate="bounceIn">
					<div id="owl-demo" class="owl-carousel owl-theme">
          
						<?php foreach ($bdd->query($sql4) as $row) : ?>

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
						<a class="owl-prev button-third" href="single-project.html#"><i class="fa fa-angle-left"></i></a>
						<a class="button-third" href="cocktail.php">Voir tous les cocktails</a>
						<a class="owl-next button-third" href="single-project.html#"><i class="fa fa-angle-right"></i></a>
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