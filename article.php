<?php include("includes/connectionpdo.php");

$reponse = $bdd->prepare('SELECT *
							FROM articles
							WHERE articles.id = ?');
$reponse->execute(array($_GET['id']));
$result = $reponse->fetch();
if(!$result)
	header("Location: etudiant.php");

$lid = $_GET['id'];

$sql = "SELECT id, titre, auteur, DAY(date) AS jour, MONTH(date) AS mois, contenu
		FROM articles
		WHERE articles.id = $lid";

?>
<!doctype html>

<html lang="fr" class="no-js">

<?php include("includes/head.php") ?>

<body>
<!-- Container -->
<div id="container">
	<?php include("includes/header.php");
	?>
		<div id="content">

			<!-- page-banner 
				================================================== -->
			<div class="section-content page-banner blog-page-banner">
				<div class="container">
					<h1>Le Coin Étudiant</h1>
				</div>
			</div>

			<!-- blog-section 
				================================================== -->
			<div class="section-content blog-section with-sidebar">
				<div class="container">
          			<div class="blog-box">
          				<div class="row">
          					<div class="col-md-12">

          						<div class="blog-post single-post triggerAnimation animated" data-animate="slideInUp">
									<div class="post-content">
									<?php foreach($bdd->query($sql) as $row) : ?>

										<div class="post-date">
											<p><span><?php echo $row['jour']?></span><?php echo $row['mois']?></p>
										</div>



										<div class="content-data">
											<h2><?php echo $row['titre'] ?></h2>
											<p><?php echo $row['auteur'] ?></p>
										</div>
										<p><?php echo $row['contenu']; ?></p>

										<div class="share-tag-box">
											<span>Partager cette article sur</span>
											<ul class="social-box">
												<li><a class="facebook" href="single-post.html#"><i class="fa fa-facebook"></i></a></li>
											</ul>
										</div>
										<div class="pagination-boxer">
											<div class="prev-post">
												<a href="single-post.html#" class="button-third"><i class="fa fa-angle-left"></i> Précédent</a>
												<p>Robin a encore éclaté Florent au tennis de table !</p>
											</div>
											<div class="next-post">
												<a href="single-post.html#" class="button-third">Suivant <i class="fa fa-angle-right"></i></a>
												<p>Manger une carotte chaque matin pour mieux supporter l'alcool</p>
											</div>
									<?php endforeach; ?>
										</div>
									</div>
								</div>

          					</div>
          					<div class="col-md-3">
          						
          					</div>
          				</div>
					</div>
          		</div>
          		<a class="go-top" href="single-post.html#"><i class="fa fa-arrow-circle-o-up"></i></a>
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
						<textarea name="comment" id="comment" placeholder="Votre commentaire par rapport à la Chimay bleue"></textarea>
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