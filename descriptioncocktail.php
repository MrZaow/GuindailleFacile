<?php include("includes/connectionpdo.php");

$reponse = $bdd->prepare('SELECT *
							FROM cocktails AS b INNER JOIN ingredients AS i
							ON b.idingredient = i .idingredient
							INNER JOIN boissons AS b2
							ON b.idingredient = b2.idingredient
							WHERE b.idingredient = ?');
$reponse->execute(array($_GET['id']));
$lid = $_GET['id'];
$result = $reponse->fetch();
if(!$result)
	header("Location: cocktail.php");

/*Avantages*/
$sql = "SELECT nom 
		FROM avantagesinconvenients AS a, avoir AS b
		WHERE a.idavantage = b.idavantage
		AND idingredient = $lid
		AND a.avantageouinconvenient = 'A' ";

/*Inconvénients*/
$sql2 = "SELECT nom 
		FROM avantagesinconvenients AS a, avoir AS b
		WHERE a.idavantage = b.idavantage
		AND idingredient = $lid
		AND a.avantageouinconvenient = 'I' ";

/*Préparation*/
$sql3 = "SELECT preparation 
		FROM cocktails
		WHERE cocktails.idingredient = $lid ";

/*Cocktails similaires*/

$sql4 = "SELECT *
              FROM cocktails AS b INNER JOIN ingredients AS i
              ON b.idingredient = i .idingredient
              INNER JOIN boissons AS b2
              ON b.idingredient = b2.idingredient
              AND b.idingredient <> $lid
              ORDER BY b2.popularite DESC LIMIT 10";

/*Ingrédients*/
$sql5 = "SELECT i.nom, qte, unitemesure
              FROM cocktails AS c, contenir AS co, ingredients AS i
              WHERE c.idingredient = co.idingredient
              AND co.idingredient_INGREDIENTS = i.idingredient
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
					<h1>Les Cocktails</h1>

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
											<h3>Le <?= $result['nom'];?> est un cocktail contenant <?= $result['pourcentagealcool']; ?> % d'alcool et coûtant en moyenne <?= $result['prixlitre']; ?> euros/litre en
												le préparant soi-même.</h3>
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
						<div class="title-section white">
							<div class="container triggerAnimation animated" data-animate="bounceIn">
								<h1>Comment le faire soi-même</h1>
							</div>
						</div>

						<div class="col-md-6 ">
							<div class="single-project-content">
								<h1>Ingrédients </h1>
								
								<ol class="feature-list2">
									<br>
									<?php foreach ($bdd->query($sql5) as $row) : ?>
									<li>
										<div class="list">
											<h3>- <?php echo $row['qte']; ?> <?php echo $row['unitemesure']; ?> de <?php echo $row['nom']; ?></h3>
										</div>
									</li>
									<?php endforeach;	?>
								</ol>

							</div>
						</div>
						<div class="col-md-6">
							<div class="single-project-content">
								<h1>Préparation </h1>
								<br>
								<?php foreach ($bdd->query($sql3) as $row) { ?>
									<h3><?php echo $row['preparation']; ?></h3>
								<?php } ?>
								

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
						<h1>Cocktails similaires</h1>
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
				<h3>4 Commentaires</h3>

				<ul class="comment-tree">
					<li>
						<div class="comment-box">
							<img alt="" src="upload/testim1.jpg">
							<div class="comment-content">
								<h4>John Doe</h4>
								<span>July 6, 2013. 8:30 pm.</span>
								<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
								<a href="single-post.html#">Reply</a>
							</div>
						</div>
					</li>

					<li>
						<div class="comment-box">
							<img alt="" src="upload/testim1.jpg">
							<div class="comment-content">
								<h4>John Doe</h4>
								<span>July 6, 2013. 8:30 pm.</span>
								<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
								<a href="single-post.html#">Reply</a>
							</div>
						</div>
					</li>

					<li>
						<div class="comment-box">
							<img alt="" src="upload/testim3.jpg">
							<div class="comment-content">
								<h4>John Doe</h4>
								<span>July 6, 2013. 8:30 pm.</span>
								<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
								<a href="single-post.html#">Reply</a>
							</div>
						</div>
					</li>
				</ul>
				<form class="comment-form">
					<h3>Laisser un commentaire</h3>
					<div class="row">
						<div class="col-md-6">
							<input name="name" id="name" type="text" placeholder="Nom">
						</div>
						<div class="col-md-6">
							<input name="mail" id="mail" type="text" placeholder="Prenom">
						</div>
					</div>
					<textarea name="comment" id="comment" placeholder="Votre commentaire par rapport au cocktail <?= $result['nom'];?>"></textarea>
					<input type="submit" id="submit_contact" value="Envoyer">
				</form>
			</div>

		</div>
		<!-- End content -->

    <?php include("includes/footer.php") ?>

</div>
<!-- End Container -->
<?php include("includes/script.php") ?>

</body>
</html>