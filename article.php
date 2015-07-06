
<?php include("includes/connectionpdo.php");
session_start();

$reponse = $bdd->prepare('SELECT *
							FROM articles
							WHERE articles.id = ?');
$reponse->execute(array($_GET['id']));
$result = $reponse->fetch();
if(!$result)
	header("Location: blog.php");

$lid = $_GET['id'];

$sql = "SELECT id, titre, auteur, DAY(date) AS jour, MONTH(date) AS mois, contenu, image1
		FROM articles
		WHERE articles.id = $lid";

$sql2 = "SELECT titre, id
		FROM articles 
		WHERE articles.supprime = 0
		AND articles.id < $lid
		AND articles.id = (SELECT MAX(id) FROM articles WHERE articles.id < $lid AND articles.supprime = 0)
		";

$sql3 = "SELECT titre, id
		FROM articles 
		WHERE articles.supprime = 0
		AND articles.id > $lid
		AND articles.id = (SELECT MIN(id) FROM articles WHERE articles.id > $lid AND articles.supprime = 0)
		";
/*Articles populaires*/
$sql4 = "SELECT titre, DAY(date) AS jour, MONTH(date) AS mois, id
		FROM articles
		ORDER BY popularite DESC
		LIMIT 3";
		
/*Catégories*/
$sql5 = "SELECT DISTINCT categorie
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
<title><?= $result['titre']; ?> - le blog - Guindaille Facile</title>
<meta name="description" content="<?= $result['resume']; ?>." />
</head>

<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Container -->
<div id="container">
	<?php include("includes/header.php");
	?>
		<div id="content">

			<!-- page-banner 
				================================================== -->
			<div class="section-content page-banner blog-page-banner">
				<div class="container">
					<h1><?= $result['titre']; ?></h1>
				</div>
			</div>

			<!-- blog-section 
				================================================== -->
			<div class="section-content blog-section with-sidebar">
				<div class="container">
    			<br>
    			<div class="blog-box">
    				<div class="row">
    					<div class="col-lg-9 col-md-9 col-sm-9">
                <?php foreach($bdd->query($sql) as $row) : ?>
    						<div class="blog-post single-post triggerAnimation animated" data-animate="slideInUp">
    						  <img src="images/min/<?php echo $row['image1']; ?>" class="attachment-post-thumbnail wp-post-image" alt="Image de l'article <?php echo htmlspecialchars($row['titre']) ?>">
									<div class="post-content">

										<div class="post-date">
											<p><span><?php echo $row['jour']?></span><?php echo $Month_Tab[$row['mois']];?></p>
										</div>

										<div class="content-data">
											<h2><?php echo htmlspecialchars($row['titre']) ?></h2>
											<p>Écrit par : <?php echo htmlspecialchars($row['auteur']) ?></p>
										</div>
										<p><?php echo $row['contenu']; ?></p>
									<?php endforeach; ?>

											<?php if(isset($_SESSION['pseudo'])) { 
											$idsupprime = $_GET['id'];

												?>
											<a href="suppressionarticle.php?id=<?php echo $idsupprime;?>" class="btn btn-danger" role="button">Supprimer l'article</a>
											<br><br>
											<?php } ?>
										<br>
						        <div class="fb-like col-sm-12 col-xs-12 hidden-xs" data-href="https://www.facebook.com/GuindailleFacile?fref=ts" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
										<div class="pagination-boxer">
											<div class="prev-post">
												<?php foreach($bdd->query($sql2) as $row) : ?>
												<a href="article.php?id=<?php echo $row['id']; ?>" class="button-third"><i class="fa fa-angle-left"></i> Préc</a>
												<br><br><br>
												<p><?php echo htmlspecialchars($row['titre']) ?></p>
												<?php endforeach; ?>
											</div>
											<div class="next-post">
												<?php foreach($bdd->query($sql3) as $row) : ?>
												<a href="article.php?id=<?php echo $row['id']; ?>" class="button-third">Suiv <i class="fa fa-angle-right"></i></a>
											  <br><br><br>
												<p><?php echo htmlspecialchars($row['titre']) ?></p>
												<?php endforeach; ?>
											</div>
										</div>
									</div>
									
								</div>

    					</div>
    					<div class="col-md-3">
							<div class="sidebar triggerAnimation animated" data-animate="slideInUp">
                
								<div class="category-widget widget">
									<h3>Catégories</h3>
									<ul class="category-list filter">
										<li><a href="blog-rightsidebar.html#" data-filter="*">Tout</a></li>
										<?php foreach($bdd->query($sql5) as $row): ?>
										<li><a href="#" data-filter=".<?php echo $row['categorie'];?>"><?php echo ucfirst($row['categorie']); ?></a></li>
										<?php endforeach; ?>
									</ul>
								</div>

								

								<div class="popular-widget widget">
									<h3>Articles populaires</h3>
									<ul class="popular-list">
										<?php foreach($bdd->query($sql4) as $row): ?>
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
    		<a class="go-top" href="single-post.html#"><i class="fa fa-arrow-circle-o-up"></i></a>
			</div>

			<div class="container comment-section">
			  <div class="title-section">
			    <div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Votre avis à propos de cet article</h1>
					</div>
			  </div>

				<div id="disqus_thread"></div>
			<script type="text/javascript">
			    /* * * CONFIGURATION VARIABLES * * */
			    var disqus_shortname = 'guindaillefacile';
			    
			    /* * * DON'T EDIT BELOW THIS LINE * * */
			    (function() {
			        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			    })();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

			<script type="text/javascript">
			    /* * * CONFIGURATION VARIABLES * * */
			    var disqus_shortname = 'guindaillefacile';
			    
			    /* * * DON'T EDIT BELOW THIS LINE * * */
			    (function () {
			        var s = document.createElement('script'); s.async = true;
			        s.type = 'text/javascript';
			        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
			        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
			    }());
			</script>

				
			</div>

		</div>
		<!-- End content -->


    <?php include("includes/footer.php") ?>

</div>
<!-- End Container -->
<?php include("includes/script.php") ?>
</body>
</html>