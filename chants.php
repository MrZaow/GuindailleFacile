<?php include("includes/connectionpdo.php");
session_start();

$tri = "";

$tri = (isset($_POST['tri'])) ? $_POST['tri'] : "";

?>
<!doctype html>

<html lang="fr" class="no-js">

<?php include("includes/head.php") ?>
<head><title>Chants de guindaille | Guindaille Facile</title></head>

<body>
<!-- Container -->
<div id="container">
 

    <?php include("includes/header.php") ?>
		<div id="content">

			<div class="section-content page-banner blog-page-banner">
				<div class="container">
					<h1>Les chants</h1>
				</div>
			</div>
          
      
			<div class="section-content portfolio-section">
				<div class="title-section white">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Tous les chants les plus connus de Belgique</h1>
						<p>À chanter obligatoirement avec un verre d'alcool en main</p>
					</div>
				</div>
				
				<div class="portfolio-box">
					<ul class="filter center triggerAnimation animated" data-animate="bounceIn">
						<li class="item"><a href="portfolio-4col.html#" class="active" data-filter="*">Tout</a></li>
						<?php
							$sql = "SELECT DISTINCT type
                                   FROM chants";
							foreach ($bdd->query($sql) as $row) : ?>
								<li class="item"><a href="portfolio-4col.html#" data-filter=".<?php echo $row['type']; ?>"><?php echo $row['type']; ?></a></li>
							<?php endforeach; ?>

					</ul>
					<div class="masonry four-col triggerAnimation animated" data-animate="bounceIn">
							<?php
								$sql = "SELECT *
						   FROM chants
						   ORDER BY chants.popularite DESC";
						   
							foreach ($bdd->query($sql) as $row) : ?>

								<div class="project-post web-design <?php echo $row['type']; ?>">
									<div class="project-gal">
										<img src="images/min/<?php echo $row['image1']; ?>" alt="#">
										<a href="descriptionchants.php?id=<?php echo $row['idchant']; ?>">
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

    <?php include("includes/footer.php") ?>

</div>
<!-- End Container -->
<?php include("includes/script.php") ?>

</body>
</html>