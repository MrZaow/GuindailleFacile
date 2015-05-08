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
				<div class="portfolio-box">
					<div class="masonry four-col triggerAnimation animated" data-animate="bounceIn">
          				<?php
							$sql = "SELECT *
					   FROM ingredients, boissons, cocktails, bieres, alcoolsforts
					   WHERE ingredients.idingredient = boissons.idingredient
					   AND( (boissons.idingredient = cocktails.idingredient) 
					   OR (boissons.idingredient = alcoolsforts.idingredient)
					   OR (boissons.idingredient = bieres.idingredient) )
					   AND ingredients.nom LIKE '%Desperados%'
					   LIMIT 1";
						foreach ($bdd->query($sql) as $row) : ?>

						<div class="project-post web-design">
							<div class="project-gal">
								<img src="images/min/<?php echo $row['image1']; ?>" alt="#">
								<?php if(isset($row['alcoolfortprincipal'])) { ?>
								<a href="descriptioncocktail.php?id=<?php echo $row['idingredient']; ?>">
								<?php } ?>
								<?php if(isset($row['type'])) { ?>
								<a href="descriptionbiere.php?id=<?php echo $row['idingredient']; ?>">
								<?php } ?>
								<?php if(isset($row['idmeilleuralcool'])){ ?>
								<a href="descriptionfort.php?id=<?php echo $row['idingredient']; ?>">
								<?php } ?>
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