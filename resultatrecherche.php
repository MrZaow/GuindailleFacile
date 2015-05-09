<?php include("includes/connectionpdo.php");
session_start();


if(isset($_GET["id"])) 
{ 
$id = $_GET["id"]; 
} 

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
					<h1>Résultat de la recherche</h1>
				</div>
			</div>

			<div class="section-content portfolio-section">
				<div class="title-section white">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
					</div>
				</div>
				<div class="portfolio-box">
					<div class="masonry four-col triggerAnimation animated" data-animate="bounceIn">
          				<?php
						$sousSql = "(SELECT LOWER(alcoolrecherche) FROM recherchealcool ORDER BY id DESC LIMIT 1)";

						foreach ($bdd->query($sousSql) as $row) :

						
							$sql = "SELECT *
					    FROM ingredients INNER JOIN boissons
					    ON ingredients.idingredient = boissons.idingredient
					    INNER JOIN cocktails
					    ON boissons.idingredient = cocktails.idingredient
					    AND LOWER(ingredients.nom) LIKE ('%".$row['LOWER(alcoolrecherche)']."%')
					    ";

				    	$sql2 = "SELECT *
					    FROM ingredients INNER JOIN boissons
					    ON ingredients.idingredient = boissons.idingredient
					    INNER JOIN bieres
					    ON boissons.idingredient = bieres.idingredient
					    AND LOWER(ingredients.nom) LIKE ('%".$row['LOWER(alcoolrecherche)']."%')
					    ";

				    	$sql3 = "SELECT *
					    FROM ingredients INNER JOIN boissons
					    ON ingredients.idingredient = boissons.idingredient
					    INNER JOIN alcoolsforts
					    ON boissons.idingredient = alcoolsforts.idingredient
					    AND LOWER(ingredients.nom) LIKE ('%".$row['LOWER(alcoolrecherche)']."%')
					    ";

					    $sql4 = "SELECT *
					    FROM jeux
					    WHERE LOWER(jeux.nom) LIKE ('%".$row['LOWER(alcoolrecherche)']."%')
					    ";

					    endforeach;	



				    	?>

						<?php foreach ($bdd->query($sql) as $row) : ?> 

						<div class="project-post web-design">
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

          			<?php foreach ($bdd->query($sql2) as $row) : ?> 

						<div class="project-post web-design">
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

          			<?php foreach ($bdd->query($sql3) as $row) : ?> 

						<div class="project-post web-design">
							<div class="project-gal">
								<img src="images/min/<?php echo $row['image1']; ?>" alt="#">
								<a href="descriptionfort.php?id=<?php echo $row['idingredient']; ?>">
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

          			<?php foreach ($bdd->query($sql4) as $row) : ?> 

						<div class="project-post web-design">
							<div class="project-gal">
								<img src="images/min/<?php echo $row['image1']; ?>" alt="#">
								<a href="descriptionjeux.php?id=<?php echo $row['idjeu']; ?>">
									<p>
										<i class="fa fa-star"></i> <?php echo $row['cotesur5']; ?>/5<br/>
										<i class="fa fa-glass"></i><?php echo $row['type']; ?>°<br/>
										<i class="fa fa-eur"></i><?php echo $row['nbjoueursmin']; ?> euros/l<br/>
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