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
									<p><span class="timer" data-from="0" data-to="<?php echo $oms; ?>"></span></p>
									<?php endforeach; ?>
									<p>Verres/jour max selon l'OMS</p>
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
									<p><span class="timer" data-from="0" data-to="<?php echo $etrebien; ?>"></span></p>
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
									<p><span class="timer" data-from="0" data-to="<?php echo $etrebourre; ?>"></span></p>
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
									<p><span class="timer" data-from="0" data-to="<?php echo $etredefonce; ?>"></span></p>
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
									<p><span class="timer" data-from="0" data-to="2"></span></p>
									<p>Verres/jour max selon l'OMS</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-thumbs-up"></i>
									<p><span class="timer" data-from="0" data-to="4"></span></p>
									<p>Verres/soirée pour être bien</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-beer"></i>
									<p><span class="timer" data-from="0" data-to="7"></span></p>
									<p>Verres/soirée pour être bourré</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-ambulance"></i>
									<p><span class="timer" data-from="0" data-to="14"></span></p>
									<p>Verres/soirée maximum avant blackout</p>
								</div>
							</div>
						</div>
					</div>

					<div class="shortcodes-elem">
						<p>Note : un "verre" correspond ici à environ 25cl de bière à 5% d'alcool ou 10cl de vin.</p>
					</div>

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
											<p>Il n'y a pas de honte à s'avouer bourré et s'arrêter de boire un moment. Ça vaut bien mieux que poursuivre par fierté et aller tout vomir après. </p>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="feature-list2">
									<li>
										<span><i class="fa fa-stop"></i></span>
										<div class="list-cont">
											<h3>Si t'es malade, arrête</h3>
											<p>Ça arrive à tout le monde d'avoir dépassé ses limites et s'être rendu malade. Il suffit de ne plus consommer d'alcool et si possible essayer de rentrer chez soi en sécurité.</p>
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
											<p>Combien d'afonds d'affillées peux-tu tenir ? Combien de bière peux-tu boire en un soir ? Choisi des soirées opportuntes et essaie de battre tes records. </p>
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
											<p>En soirée les filles sont chaudes et les mecs sont dragueurs, profites-en ! Dans le pire des cas c'est oublié en une semaine et dans le meilleur tu finiras dans son lit. </p>
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
											<p>La piste de danse est le cauchemar de beaucoup. Heureusement, l'alcool est là pour te sauver ! Après quelques verres et quand l'ambiance est chaude, lance-toi avec des amis et amuse-toi.</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
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