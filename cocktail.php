<?php include("includes/connectionpdo.php"); 
session_start(); 

$tri = "";

$tri = (isset($_POST['tri'])) ? $_POST['tri'] : "";

?>
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
						<h1>Un cocktail, s'il est bien fait, est la meilleure façon de chauffer l'ambiance</h1>
						<p>En plus c'est super bon !</p>
					</div>
				</div>
				<div class="portfolio-box">
					<ul class="filter center triggerAnimation animated" data-animate="bounceIn">
						
						
						<li class="item"><a href="portfolio-4col.html#" class="active" data-filter="*">Tout</a></li>

						<?php
							$sql = "SELECT DISTINCT alcoolfortprincipal
                                   FROM cocktails
                                   ";
							foreach ($bdd->query($sql) as $row) : ?>
								<li class="item"><a href="portfolio-4col.html#" data-filter=".<?php echo $row['alcoolfortprincipal']; ?>"><?php echo $row['alcoolfortprincipal']; ?></a></li>
							<?php endforeach; ?>

					</ul>
					<div class="masonry four-col triggerAnimation animated" data-animate="bounceIn">
							<?php
								if(empty($_POST)){
								$sql = "SELECT *
						   FROM cocktails AS b INNER JOIN ingredients AS i
						   ON b.idingredient = i .idingredient
						   INNER JOIN boissons AS b2
						   ON b.idingredient = b2.idingredient
						   ORDER BY b2.popularite DESC";
						   }
						   else{
					   	   

						   	if($tri == "degré"){
					   			$sql = "SELECT *
								FROM cocktails AS b INNER JOIN ingredients AS i
								ON b.idingredient = i .idingredient
								INNER JOIN boissons AS b2
								ON b.idingredient = b2.idingredient
								ORDER BY b2.pourcentagealcool DESC";
						   	}
						   	if($tri == "degréasc"){
					   			$sql = "SELECT *
								FROM cocktails AS b INNER JOIN ingredients AS i
								ON b.idingredient = i .idingredient
								INNER JOIN boissons AS b2
								ON b.idingredient = b2.idingredient
								ORDER BY b2.pourcentagealcool ASC";
						   	}
						   	if($tri == "popularité"){
					   			$sql = "SELECT *
							   FROM cocktails AS b INNER JOIN ingredients AS i
							   ON b.idingredient = i .idingredient
							   INNER JOIN boissons AS b2
							   ON b.idingredient = b2.idingredient
							   ORDER BY b2.popularite DESC";
						   	}
						   	if($tri == "prix"){
					   			$sql = "SELECT *
								FROM cocktails AS b INNER JOIN ingredients AS i
								ON b.idingredient = i .idingredient
								INNER JOIN boissons AS b2
								ON b.idingredient = b2.idingredient
								ORDER BY b2.prixlitre DESC";
						   	}
						   	if($tri == "prixasc"){
					   			$sql = "SELECT *
								FROM cocktails AS b INNER JOIN ingredients AS i
								ON b.idingredient = i .idingredient
								INNER JOIN boissons AS b2
								ON b.idingredient = b2.idingredient
								ORDER BY b2.prixlitre ASC";
						   	}
						   }

						foreach ($bdd->query($sql) as $row) : ?>

						<div class="project-post web-design <?php echo $row['alcoolfortprincipal']; ?>">
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