<?php include("includes/connectionpdo.php");
session_start();

$sql = "SELECT id, titre, auteur, DAY(date) AS jour, MONTH(date) AS mois, contenu, categorie, image1, resume
		FROM articles 
		WHERE articles.supprime = 0
		ORDER BY date DESC";
		
/*Articles populaires*/
$sql2 = "SELECT titre, DAY(date) AS jour, MONTH(date) AS mois, id
		FROM articles
		ORDER BY popularite DESC
		LIMIT 3";
		
/*Catégories*/
$sql3 = "SELECT DISTINCT categorie
		FROM articles";
		
$Month_tab = array();
$Month_Tab[1] = "Janv";
$Month_Tab[2] = "Févr";
$Month_Tab[3] = "Mars";
$Month_Tab[4] = "Avril";
$Month_Tab[5] = "Mai";
$Month_Tab[6] = "Juin";
$Month_Tab[7] = "Juil";
$Month_Tab[8] = "Août";
$Month_Tab[9] = "Sept";
$Month_Tab[10] = "Octo";
$Month_Tab[11] = "Nove";
$Month_Tab[12] = "Déce";

 ?>
<!doctype html>

<html lang="fr" class="no-js">

<?php include("includes/head.php") ?>
<head>
<title>Le blog de Guindaille Facile - Guindaille Facile, tout pour vos soirées</title>
<meta name="description" content="Découvrez les meilleurs articles pour la guindaille et les soirées, avec plein de conseils pour que toute soirée soit une réussite. Des meilleures bières pils aux mélanges que les filles préfèrent, tout est ici, sur le blog de Guindaille Facile !" />
</head>

<body>
<!-- Container -->
<div id="container">

	<?php include("includes/header.php") ?>

	<div id="content">

		<!-- page-banner
	        ================================================== -->
		<div class="section-content page-banner blog-page-banner">
			<div class="container">
				<h1>Le blog</h1>
			</div>
		</div>

		<!-- blog-section
	        ================================================== -->
		<div class="section-content blog-section with-sidebar">
			<div class="container">
				<div class="blog-box">
					<div class="row">
						<div class="col-md-9">

						<?php foreach($bdd->query($sql) as $row) : ?>
							<div class="blog-post masonry triggerAnimation animated" data-animate="slideInUp" style>
							  <img src="images/min/<?php echo $row['image1']; ?>" class="attachment-post-thumbnail wp-post-image" alt="Image de l'article <?php echo htmlspecialchars($row['titre']) ?>">
								<div class="post-content  <?php echo $row['categorie']?>">
									<div class="post-date">
											<p><span><?php echo $row['jour']?></span><?php echo $Month_Tab[$row['mois']]?></p>
									</div>

									<div class="content-data">
										<h2><a href="article.php?id=<?php echo $row['id'] ?>"><?php echo $row['titre'] ?></a></h2>
										<p>Écrit par : <?php echo htmlspecialchars($row['auteur']) ?></p>
									</div>
									<p><?php echo $row['resume']?></p>
									<a class="button-third" href="article.php?id=<?php echo $row['id'] ?>">Lire plus</a>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
						<div class="col-md-3">
							<div class="sidebar triggerAnimation animated" data-animate="slideInUp">
							  
							  <?php if(isset($_SESSION['pseudo'])) { ?>
								<div class="buttons">
									<a class="button-third button-coloration" href="encodagearticle.php"> <i class="fa fa-pencil"></i> Écrire un article</a>
								</div>
                <?php } ?>
                
								<div class="category-widget widget">
									<h3>Catégories</h3>
									<ul class="category-list filter">
										<li><a href="blog-rightsidebar.html#" data-filter="*">Tout</a></li>
										<?php foreach($bdd->query($sql3) as $row): ?>
										<li><a href="#" data-filter=".<?php echo $row['categorie'];?>"><?php echo ucfirst($row['categorie']); ?></a></li>
										<?php endforeach; ?>
									</ul>
								</div>

								

								<div class="popular-widget widget">
									<h3>Articles populaires</h3>
									<ul class="popular-list">
										<?php foreach($bdd->query($sql2) as $row): ?>
										<li>
											<div class="side-content">
												<h2><a href="article.php?id=<?php echo $row['id'] ?>"><?php echo $row['titre'] ?></a></h2>
												<p><?php echo $row['jour']?> <?php echo $Month_Tab[$row['mois']]?></p>
											</div>
										</li>
									<?php endforeach; ?>
									</ul>
								</div>

								


							</div>
						</div>
					</div>


				</div>
			</div>
			<a class="go-top" href="blog-rightsidebar.html#"><i class="fa fa-arrow-circle-o-up"></i></a>
		</div>


	</div>
	<!-- content
				================================================== -->
<?php include("includes/footer.php") ?>

</div>
<!-- End Container -->
<?php include("includes/script.php") ?>

</body>
</html>