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
					<h1>Les Bières</h1>
				</div>
			</div>

			<div class="section-content portfolio-section">
				<div class="title-section white">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>La bière est la preuve indéniable que Dieu nous aime et veut nous voir heureux</h1>
						<p>Benjamin Franklin</p>
					</div>
				</div>
				<div class="portfolio-box">
					<ul class="filter center triggerAnimation animated" data-animate="bounceIn">
						<li class="item"><a href="portfolio-4col.html#" class="active" data-filter="*">Tout</a></li>
						<?php
							$sql = "SELECT DISTINCT type
                                   FROM bieres";
							foreach ($bdd->query($sql) as $row) : ?>
								<li class="item"><a href="portfolio-4col.html#" data-filter=".<?php echo $row['type']; ?>"><?php echo $row['type']; ?></a></li>
							<?php endforeach; ?>

					</ul>
					<div class="masonry four-col triggerAnimation animated" data-animate="bounceIn">
							<?php
								$sql = "SELECT *
						   FROM bieres AS b INNER JOIN ingredients AS i
						   ON b.idingredient = i .idingredient
						   INNER JOIN boissons AS b2
						   ON b.idingredient = b2.idingredient";

							foreach ($bdd->query($sql) as $row) : ?>

								<div class="project-post web-design <?php echo $row['type']; ?>">
									<div class="project-gal">
										<img src="images/min/<?php echo $row['image1']; ?>" alt="#">
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

						<?php endforeach;	?>
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