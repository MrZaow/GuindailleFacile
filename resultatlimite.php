<?php include("includes/connectionpdo.php");
session_start();

if(isset($_GET["id"])) 
{ 
$id = $_GET["id"]; 
} 

$sql = "SELECT *
		FROM limite
		WHERE id = $id";



 ?>
<!doctype html>

<html lang="fr" class="no-js">

<?php include("includes/head.php") ?>

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

    <?php include("includes/header.php") ?>
<!-- content 
			================================================== -->
		<div id="content">

			<!-- page-banner 
				================================================== -->
			<div class="section-content page-banner shortcodes-page-banner">
				<div class="container">
					<h1>Résultat du bibinomètre</h1>
				</div>
			</div>

			<!-- shortcodes-section
				================================================== -->
			<div class="section-content shortcodes-section">
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
                ad.innerHTML = "Salut, utilisateur adblock, nous aussi nous n'aimons pas la pub intrusive sur internet, et nous avons bien fait attention à rendre la nôtre discrète. Veux-tu essayer de désactiver adblock pour notre site juste un moment pour voir si la pub te dérange tant que ça? Merci et bonne continuation sur Guindaille Facile :) ";
              
              }
              
            }, 2000); // The ad blocker check is performed 2 seconds after the page load 
          }; 
          
        </script>
  			
					<div class="shortcodes-elem">
						<h1>Vos stats personnelles</h1>
						<!-- Nav tabs -->
						<div class="statistic-box style2">
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-heartbeat"></i>
									<?php foreach($bdd->query($sql) as $row): ?>
									<?php 

									if($row['sexe'] == "mec"){
										if($row['poids'] > 77)
											$oms = 4;
										else
											$oms = 3;
									}
									else{
										$oms = 2;
									}

?>
									<p><span class="timer" data-from="<?php echo $oms; ?>" data-to="<?php echo $oms; ?>"></span></p>
									<?php endforeach; ?>
									<p>Verres/jour max selon les normes</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-thumbs-up"></i>
									<?php foreach($bdd->query($sql) as $row): ?>
									<?php 
									if($row['sexe'] == "mec"){
										if($row['poids'] > 77 && $row['poids'] <= 87){/*77 à 87*/
											if($row['age'] > 17)
												$etrebien = 6;
											else
												$etrebien = 4;
											}
											elseif($row['poids'] > 87 && $row['poids'] <= 400){/*87 à 400*/
												if($row['age'] > 17)
													$etrebien = 7;
												else
													$etrebien = 5;
											}
											elseif($row['poids'] <= 77 && $row['poids'] > 67){/*67 à 77*/
												if($row['age'] > 17)
													$etrebien = 6;
												else
													$etrebien = 4;
											}
											else{/*40 à 67*/
												if($row['age'] > 17)
													$etrebien = 5;
												else
													$etrebien = 3;
											}	
									}
									else{
										if($row['poids'] > 77 && $row['poids'] <= 87){/*77 à 87*/
											if($row['age'] > 17)
												$etrebien = 6;
											else
												$etrebien = 5;
											}
											elseif($row['poids'] > 87 && $row['poids'] <= 400){/*87 à 400*/
												if($row['age'] > 17)
													$etrebien = 7;
												else
													$etrebien = 6;
											}
											elseif($row['poids'] <= 77 && $row['poids'] > 67){/*67 à 77*/
												if($row['age'] > 17)
													$etrebien = 5;
												else
													$etrebien = 4;
											}
											else{/*40 à 67*/
												if($row['age'] > 17)
													$etrebien = 4;
												else
													$etrebien = 3;
											}	
									}
									 ?>
									<p><span class="timer" data-from="<?php echo $etrebien; ?>" data-to="<?php echo $etrebien; ?>"></span></p>
									<?php endforeach; ?>
									<p>Verres/soirée pour se mettre bien</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-beer"></i>
									<?php foreach($bdd->query($sql) as $row): ?>
									<?php 
									if($row['sexe'] == "mec"){
										if($row['poids'] > 77 && $row['poids'] <= 87){/*77 à 87*/
											if($row['age'] > 17)
												$etrebourre = 11;
											else
												$etrebourre = 7;
											}
											elseif($row['poids'] > 87 && $row['poids'] <= 400){/*87 à 400*/
												if($row['age'] > 17)
													$etrebourre = 13;
												else
													$etrebourre = 9;
											}
											elseif($row['poids'] <= 77 && $row['poids'] > 67){/*67 à 77*/
												if($row['age'] > 17)
													$etrebourre = 9;
												else
													$etrebourre = 6;
											}
											else{/*40 à 67*/
												if($row['age'] > 17)
													$etrebourre = 8;
												else
													$etrebourre = 5;
											}	
									}
									else{
										if($row['poids'] > 77 && $row['poids'] <= 87){/*77 à 87*/
											if($row['age'] > 17)
												$etrebourre = 8;
											else
												$etrebourre = 5;
											}
											elseif($row['poids'] > 87 && $row['poids'] <= 400){/*87 à 400*/
												if($row['age'] > 17)
													$etrebourre = 9;
												else
													$etrebourre = 6;
											}
											elseif($row['poids'] <= 77 && $row['poids'] > 67){/*67 à 77*/
												if($row['age'] > 17)
													$etrebourre = 7;
												else
													$etrebourre = 5;
											}
											else{/*40 à 67*/
												if($row['age'] > 17)
													$etrebourre = 6;
												else
													$etrebourre = 5;
											}	
									}
									 ?>
									<p><span class="timer" data-from="<?php echo $etrebourre; ?>" data-to="<?php echo $etrebourre; ?>"></span></p>
									<?php endforeach; ?>
									<p>Verres/soirée pour être bourré</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-ambulance"></i>
									<?php foreach($bdd->query($sql) as $row): ?>
									<?php 
									if($row['sexe'] == "mec"){
										if($row['poids'] > 77 && $row['poids'] <= 87){/*77 à 87*/
											if($row['age'] > 17)
												$etredefonce = 19;
											else
												$etredefonce = 15;
											}
											elseif($row['poids'] > 87 && $row['poids'] <= 400){/*87 à 400*/
												if($row['age'] > 17)
													$etredefonce = 21;
												else
													$etredefonce = 17;
											}
											elseif($row['poids'] <= 77 && $row['poids'] > 67){/*67 à 77*/
												if($row['age'] > 17)
													$etredefonce = 17;
												else
													$etredefonce = 13;
											}
											else{/*40 à 67*/
												if($row['age'] > 17)
													$etredefonce = 14;
												else
													$etredefonce = 10;
											}	
									}
									else{
										if($row['poids'] > 77 && $row['poids'] <= 87){/*77 à 87*/
											if($row['age'] > 17)
												$etredefonce = 15;
											else
												$etredefonce = 11;
											}
											elseif($row['poids'] > 87 && $row['poids'] <= 400){/*87 à 400*/
												if($row['age'] > 17)
													$etredefonce = 16;
												else
													$etredefonce = 12;
											}
											elseif($row['poids'] <= 77 && $row['poids'] > 67){/*67 à 77*/
												if($row['age'] > 17)
													$etredefonce = 14;
												else
													$etredefonce = 9;
											}
											else{/*40 à 67*/
												if($row['age'] > 17)
													$etredefonce = 11;
												else
													$etredefonce = 7;
											}	
									}
									 ?>
									<p><span class="timer" data-from="<?php echo $etredefonce; ?>" data-to="<?php echo $etredefonce; ?>"></span></p>
									<?php endforeach; ?>
									<p>Verres/soirée maximum avant blackout</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="shortcodes-elem">
						<h1>La moyenne</h1>
						<!-- Nav tabs -->
						<div class="statistic-box style2">
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-heartbeat"></i>
									<p><span class="timer" data-from="2" data-to="2"></span></p>
									<p>Verres/jour max selon les normes</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-thumbs-up"></i>
									<p><span class="timer" data-from="4" data-to="4"></span></p>
									<p>Verres/soirée pour être bien</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-beer"></i>
									<p><span class="timer" data-from="7" data-to="7"></span></p>
									<p>Verres/soirée pour être bourré</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-ambulance"></i>
									<p><span class="timer" data-from="14" data-to="14"></span></p>
									<p>Verres/soirée maximum avant blackout</p>
								</div>
							</div>
							<p>Note : un "verre" correspond ici à environ 25cl de bière à 5% ou à 10cl de vin.</p>
							<br><br>
							<div class="fb-like col-sm-12 col-xs-12 hidden-xs" data-href="https://www.facebook.com/GuindailleFacile?fref=ts" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
						</div>
					</div>
					
					
					<div class="section-content portfolio-section">
            <div class="title-section">
                <div class="container triggerAnimation animated" data-animate="bounceIn">
                    <h1>Les bières les plus populaires</h1>
                    <p>Pour s'alcooliser comme il faut</p>
                </div>
            </div>
            <div class="portfolio-box triggerAnimation animated" data-animate="pulse">
                <div id="owl-demo" class="owl-carousel owl-theme">

                <?php
                    $sql = "SELECT *
              FROM bieres AS b INNER JOIN ingredients AS i
              ON b.idingredient = i .idingredient
              INNER JOIN boissons AS b2
              ON b.idingredient = b2.idingredient

 
              ORDER BY b2.popularite DESC LIMIT 10";

                foreach ($bdd->query($sql) as $row) : ?>

                    <div class="item project-post">
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
                <?php endforeach;   ?>

                </div>
                <div class="buttons">
                    <a class="owl-prev button-third button-coloration" href="index.php"><i class="fa fa-angle-left"></i></a>
                    <a class="button-third button-coloration" href="biere.php">Voir toutes les bières</a>
                    <a class="owl-next button-third button-coloration" href="index.php"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
          <!-- SAIS PAS SI JE SUPPRIME OU PAS 
          
					<div class="shortcodes-elem">
						<h1>Sache être raisonnable...</h1>
						<div class="row">
							<div class="col-md-4">
								<ul class="feature-list2">
									<li>
										<span><i class="fa fa-question"></i></span>
										<div class="list-cont">
											<h3>Apprends tes limites</h3>
											<p>Chacun tient l'alcool à sa façon, certain mieux que d'autres. Plus tu sortiras, plus facilement tu connaîtras tes limites. </p>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="feature-list2">
									<li>
										<span><i class="fa fa-clock-o"></i></span>
										<div class="list-cont">
											<h3>Fais des pauses</h3>
											<p>Il n'y a pas de honte à s'avouer bourré et s'arrêter de boire un moment. Ça permet à l'alcool de se diluer pour pouvoir reprendre la boisson plus tard dans la soirée. </p>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="feature-list2">
									<li>
										<span><i class="fa fa-stop"></i></span>
										<div class="list-cont">
											<h3>Si t'es malade, vomis</h3>
											<p>Ça arrive à tout le monde d'avoir dépassé ses limites et s'être rendu malade. Vomis un bon coup, va au calme reprendre tes esprits et si tu es d'attaque, reprends de plus belle.</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
          
					<div class="shortcodes-elem">
						<h1>mais aussi audacieux !</h1>
						<div class="row">
							<div class="col-md-4">
								<ul class="feature-list2">
									<li>
										<span><i class="fa fa-trophy"></i></span>
										<div class="list-cont">
											<h3>Repousse tes limites</h3>
											<p>Combien d'afonds d'affillées peux-tu tenir ? Combien de bières peux-tu boire en un soir ? Choisis des soirées opportunes et essaie de battre tes records. </p>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="feature-list2">
									<li>
										<span><i class="fa fa-venus-mars"></i></span>
										<div class="list-cont">
											<h3>Profite de l'alcool pour draguer</h3>
											<p>En soirée les filles sont chaudes et les mecs sont dragueurs, profites-en ! Dans le pire des cas c'est oublié en une semaine et dans le meilleur la nuit risque d'être agréable. </p>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="feature-list2">
									<li>
										<span><i class="fa fa-heartbeat"></i></span>
										<div class="list-cont">
											<h3>Bouge ton corps</h3>
											<p>En soirée on est là pour s'amuser, merde quoi ! Si tu es de nature timide, quelques verres d'alcool te permettront de te lâcher et de t'amuser à fond sans te soucier du regard des autres.</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					--> 
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