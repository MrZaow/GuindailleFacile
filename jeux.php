<?php include("includes/connectionpdo.php");
session_start();

$tri = "";

$tri = (isset($_POST['tri'])) ? $_POST['tri'] : "";

?>
<!doctype html>

<html lang="fr" class="no-js">

<?php include("includes/head.php") ?>
<head><title>Jeux d'alcool | Guindaille Facile</title></head>

<body>
<!-- Container -->
<div id="container">
 

    <?php include("includes/header.php") ?>
		<div id="content">

			<div class="section-content page-banner blog-page-banner">
				<div class="container">
					<h1>Les jeux d'alcool</h1>
				</div>
			</div>
          
      
			<div class="section-content portfolio-section">
				<div class="title-section white">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Les meilleurs jeux d'alcool simples</h1>
						<h1>Avec cartes, avec dés, ou sans accessoire</h1>
					</div>
					<br>
					<form class="form-inline" action="jeux.php" method="post">
						<div class="form-group">
	                        <label>Trier par </label>
	                        <select class="form-control" name="tri">
	                            <option value="popularité" <?php echo trim($tri) == 'popularité' ? 'selected="selected"' : '';?>>popularité</option>
	                            <option value="note" <?php echo trim($tri) == 'note' ? 'selected="selected"' : '';?>>cote sur 5</option>
	                        </select>
	                        <?php if(isset($error['tri'])) echo $error['tri']; ?>
	                    </div>
	                    <input type="submit" class="btn btn-primary button-coloration" name="submit" value="Envoyer">
					</form>
				</div>
				
				<div class="portfolio-box">
					<ul class="filter center triggerAnimation animated" data-animate="bounceIn">
						<li class="item"><a href="portfolio-4col.html#" class="active" data-filter="*">Tout</a></li>
						<?php
							$sql = "SELECT DISTINCT type
                                   FROM jeux";
							foreach ($bdd->query($sql) as $row) : ?>
								<li class="item"><a href="portfolio-4col.html#" data-filter=".<?php echo $row['type']; ?>"><?php echo $row['type']; ?></a></li>
							<?php endforeach; ?>

					</ul>
					<div class="masonry four-col triggerAnimation animated" data-animate="bounceIn">
							<?php
								if(empty($_POST)){
								$sql = "SELECT *
						   FROM jeux
						   ORDER BY jeux.popularite DESC";
						   }
						   else{
  					     if($tri == "popularité"){
  				   			$sql = "SELECT *
  						   FROM jeux
  						   ORDER BY jeux.popularite DESC";
  					   	}
  					   	if($tri == "note"){
  					   			$sql = "SELECT *
  								FROM jeux
  								ORDER BY jeux.cotesur5 DESC";
  						   	}
						   }

							foreach ($bdd->query($sql) as $row) : ?>

								<div class="project-post web-design <?php echo $row['type']; ?>">
									<div class="project-gal">
										<img src="images/min/<?php echo $row['image1']; ?>" alt="Image du jeu d'alcool <?php echo $row['nom']; ?>">
										<a href="descriptionjeux.php?id=<?php echo $row['idjeu']; ?>">
											<p>
												<i class="fa fa-star"></i> <?php echo $row['cotesur5']; ?>/5<br/>
												<i class="fa fa-tag"></i> <?php echo $row['type']; ?><br/>
												<i class="fa fa-group"></i> <?php echo $row['nbjoueursmin']; ?>+ joueurs<br/>
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

    <?php include("includes/footer.php") ?>

</div>
<!-- End Container -->
<?php include("includes/script.php") ?>

</body>
</html>