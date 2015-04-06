<?php include("includes/connectionpdo.php") ?>
<!doctype html>

<html lang="fr" class="no-js">
<?php include("includes/head.php") ?>

<body>
<!-- Container -->
<div id="container">
 

    <?php include("includes/header.php") ?>

		<div id="content">

			<div class="section-content page-banner portfolio-page-banner">
				<div class="container">
					<h1>Les Cocktails</h1>
				</div>
			</div>

			<div class="section-content portfolio-section">
				<div class="title-section white">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Un cocktail, si il est bien fait, est la meilleure façon de chauffer l'ambiance</h1>
						<p>En plus c'est super bon !</p>
					</div>
				</div>
				<div class="portfolio-box">
					<ul class="filter center triggerAnimation animated" data-animate="bounceIn">
						<li class="item"><a href="portfolio-4col.html#" class="active" data-filter="*">Popuparité</a></li>
						<li class="item"><a href="portfolio-4col.html#" data-filter=".web-design">Prix</a></li>
						<li class="item"><a href="portfolio-4col.html#" data-filter=".branding">Degré</a></li>
						<li class="item"><a href="portfolio-4col.html#" data-filter=".photography">Pils</a></li>
						<li class="item"><a href="portfolio-4col.html#" data-filter=".illustration">Spéciales</a></li>
						<li class="item"><a href="portfolio-4col.html#" data-filter=".branding">Trappistes</a></li>
						<li class="item"><a href="portfolio-4col.html#" data-filter=".branding">Fruitées</a></li>
						<li class="item"><a href="portfolio-4col.html#" data-filter=".branding">NA</a></li>
					</ul>
					<div class="masonry four-col triggerAnimation animated" data-animate="bounceIn">
          				<?php
							$sql = "SELECT *
					   FROM cocktails AS b INNER JOIN ingredients AS i
					   ON b.idingredient = i .idingredient
					   INNER JOIN boissons AS b2
					   ON b.idingredient = b2.idingredient
					   ORDER BY b2.popularite DESC";

						foreach ($bdd->query($sql) as $row) : ?>

						<div class="project-post web-design branding">
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
          			<?php endforeach;	?>
					 
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