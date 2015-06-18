<?php include("includes/connectionpdo.php");
session_start();

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
					<h1>Le Coin guindaille</h1>
				</div>
			</div>

			<!-- blog-section 
				================================================== -->
			<div class="section-content blog-section with-sidebar">
				<div class="container">
				  
				  <div class="row">
    			  <div class="col-md-offset-3 col-md-6">
        			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- Pub adaptable dessus de description -->
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-3078792395695520"
                   data-ad-slot="3717725692"
                   data-ad-format="auto"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
            </div>
    			</div>
    			<br>
    			
    			
    			
    			<script> 
  
          // Run after all the page elements have loaded
          window.onload = function(){ 
          
            // This will take care of asynchronous Google ads
            setTimeout(function() { 
              
              // We are targeting the first banner ad of AdSense
              var ad = document.querySelector("ins.adsbygoogle");
              
              // If the ad contains no innerHTML, ad blockers are at work
              if (ad && ad.innerHTML.replace(/\s/g, "").length == 0) {
                
                // Since ad blocks hide ads using CSS too
                ad.style.cssText = 'display:block !important'; 
                
                // You can put any text, image or even IFRAME tags here
                ad.innerHTML = "Salut, utilisateur adblock, nous non plus nous n'aimons pas la pub intrusive sur internet, et nous avons bien fait attention à rendre la nôtre discrète. Veux-tu essayer de désactiver adblock pour notre site juste un moment pour voir si la pub te dérange tant que ça? Merci et bonne continuation sur Guindaille Facile :) ";
              
              }
              
            }, 2000); // The ad blocker check is performed 2 seconds after the page load 
          }; 
          
        </script>
        
          			<div class="blog-box">
          				<div class="row">
          					<div class="col-md-12">

          						<div class="blog-post single-post triggerAnimation animated" data-animate="slideInUp">
									<div class="post-content">
									<?php foreach($bdd->query($sql) as $row) : ?>

										<div class="post-date">
											<p><span><?php echo $row['jour']?></span><?php echo $Month_Tab[$row['mois']];?></p>
										</div>

										<div class="content-data">
											<h2><?php echo htmlspecialchars($row['titre']) ?></h2>
											<p><?php echo htmlspecialchars($row['auteur']) ?></p>
										</div>
										<p><?php echo htmlspecialchars($row['contenu']); ?></p>
									<?php endforeach; ?>

										<div class="share-tag-box">
											<br><br>
											<?php if(isset($_SESSION['pseudo'])) { 
											$idsupprime = $_GET['id'];

												?>
											<a href="suppressionarticle.php?id=<?php echo $idsupprime;?>" class="btn btn-danger" role="button">Supprimer l'article</a>
											<br><br>
											<?php } ?>
										</div>
										<div class="pagination-boxer">
											<div class="prev-post">
												<?php foreach($bdd->query($sql2) as $row) : ?>
												<a href="article.php?id=<?php echo $row['id']; ?>" class="button-third"><i class="fa fa-angle-left"></i> Pré</a>
												<p><?php echo htmlspecialchars($row['titre']) ?></p>
												<?php endforeach; ?>
											</div>
											<div class="next-post">
												<?php foreach($bdd->query($sql3) as $row) : ?>
												<a href="article.php?id=<?php echo $row['id']; ?>" class="button-third">Suiv <i class="fa fa-angle-right"></i></a>
												<p><?php echo htmlspecialchars($row['titre']) ?></p>
												<?php endforeach; ?>
											</div>
									
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