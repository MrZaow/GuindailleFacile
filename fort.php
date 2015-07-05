<?php include("includes/connectionpdo.php");
session_start();


$tri = "";

$tri = (isset($_POST['tri'])) ? $_POST['tri'] : "";

 ?>
<!doctype html>

<html lang="fr" class="no-js">
<?php include("includes/head.php") ?>
<head>
<title>Les alcools forts - Guindaille Facile, tout pour vos soirées</title>
<meta name="description" content="Découvrez les meilleurs alcools forts pour vos soirées, avec plein d'informations pour vous aider à choisir les alcools forts que vous préférerez." />
</head>


<body>
<!-- Container -->
<div id="container">
 

    <?php include("includes/header.php") ?>
		<div id="content">

			<div class="section-content page-banner blog-page-banner">
				<div class="container">
					<h1>Les alcools forts</h1>
				</div>
			</div>


			<div class="section-content portfolio-section">
				<div class="title-section white">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Les meilleurs alcools forts pour les mélanges d'alcool</h1>
						<h1>Plein de bons alcools pour vos soirées</h1>
					</div>
					<br>
					<form class="form-inline" action="fort.php" method="post">
						<div class="form-group">
	                        <label>Trier par </label>
	                        <select class="form-control" name="tri">
	                            <option value="popularité" <?php echo trim($tri) == 'popularité' ? 'selected="selected"' : '';?>>popularité</option>
	                            <option value="note" <?php echo trim($tri) == 'note' ? 'selected="selected"' : '';?>>cote sur 5</option>
	                            <option value="prixasc" <?php echo trim($tri) == 'prixasc' ? 'selected="selected"' : '';?>>prix croissant</option>
	                            <option value="prix" <?php echo trim($tri) == 'prix' ? 'selected="selected"' : '';?>>prix décroissant</option>
	                            <option value="degréasc" <?php echo trim($tri) == 'degréasc' ? 'selected="selected"' : '';?>>degré d'alcool croissant</option>
	                            <option value="degré" <?php echo trim($tri) == 'degré' ? 'selected="selected"' : '';?>>degré d'alcool décroissant</option>
	                        </select>
	                        <?php if(isset($error['tri'])) echo $error['tri']; ?>
	                    </div>
	                    <input type="submit" class="btn btn-primary button-coloration" name="submit" value="Envoyer">
					</form>
				</div>
				<div class="portfolio-box">
					<ul class="filter center triggerAnimation animated" data-animate="bounceIn">
					</ul>
					<div class="masonry four-col triggerAnimation animated" data-animate="bounceIn">
      					<?php
								if(empty($_POST)){
								$sql = "SELECT *
						   FROM alcoolsforts AS b INNER JOIN ingredients AS i
						   ON b.idingredient = i .idingredient
						   INNER JOIN boissons AS b2
						   ON b.idingredient = b2.idingredient
						   ORDER BY b2.popularite DESC";
						   }
						   else{
					   	   

						   	if($tri == "degré"){
					   			$sql = "SELECT *
								FROM alcoolsforts AS b INNER JOIN ingredients AS i
								ON b.idingredient = i .idingredient
								INNER JOIN boissons AS b2
								ON b.idingredient = b2.idingredient
								ORDER BY b2.pourcentagealcool DESC";
						   	}
						   	if($tri == "degréasc"){
					   			$sql = "SELECT *
								FROM alcoolsforts AS b INNER JOIN ingredients AS i
								ON b.idingredient = i .idingredient
								INNER JOIN boissons AS b2
								ON b.idingredient = b2.idingredient
								ORDER BY b2.pourcentagealcool ASC";
						   	}
						   	if($tri == "popularité"){
					   			$sql = "SELECT *
							   FROM alcoolsforts AS b INNER JOIN ingredients AS i
							   ON b.idingredient = i .idingredient
							   INNER JOIN boissons AS b2
							   ON b.idingredient = b2.idingredient
							   ORDER BY b2.popularite DESC";
						   	}
						   	if($tri == "prix"){
					   			$sql = "SELECT *
								FROM alcoolsforts AS b INNER JOIN ingredients AS i
								ON b.idingredient = i .idingredient
								INNER JOIN boissons AS b2
								ON b.idingredient = b2.idingredient
								ORDER BY b2.prixlitre DESC";
						   	}
						   	if($tri == "prixasc"){
					   			$sql = "SELECT *
								FROM alcoolsforts AS b INNER JOIN ingredients AS i
								ON b.idingredient = i .idingredient
								INNER JOIN boissons AS b2
								ON b.idingredient = b2.idingredient
								ORDER BY b2.prixlitre ASC";
						   	}
						   	if($tri == "note"){
					   			$sql = "SELECT *
								FROM alcoolsforts AS b INNER JOIN ingredients AS i
								ON b.idingredient = i .idingredient
								INNER JOIN boissons AS b2
								ON b.idingredient = b2.idingredient
								ORDER BY b2.cotesur5 DESC";
						   	}
						   }

							foreach ($bdd->query($sql) as $row) : ?>

						<div class="project-post web-design branding">
							<div class="project-gal">
								<img src="images/min/<?php echo $row['image1']; ?>" alt="Image de l'alcool <?php echo $row['nom']; ?>">
								<div class="hover-box">
									<a href="descriptionfort.php?id=<?php echo $row['idingredient']; ?>">
											<p>
												<i class="fa fa-star"></i> <?php echo $row['cotesur5']; ?>/5<br/>
												<i class="fa fa-glass"></i><?php echo $row['pourcentagealcool']; ?>°<br/>
												<i class="fa fa-eur"></i><?php echo $row['prixlitre']; ?> euros/l<br/>
											</p>
										</a>
								</div>
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