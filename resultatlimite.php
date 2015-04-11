<?php include("includes/connectionpdo.php");


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
									<i class="fa fa-beer"></i>
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
									<i class="fa fa-beer"></i>
									<?php foreach($bdd->query($sql) as $row): ?>
									<?php $idfois2 = $row['id'] * 2; ?>
									<p><span class="timer" data-from="0" data-to="<?php echo $idfois2; ?>"></span></p>
									<?php endforeach; ?>
									<p>Verres/soirée</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-beer"></i>
									<?php foreach($bdd->query($sql) as $row): ?>
									<?php $idfois2 = $row['id'] * 2; ?>
									<p><span class="timer" data-from="0" data-to="<?php echo $idfois2; ?>"></span></p>
									<?php endforeach; ?>
									<p>Verres/soirée</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-beer"></i>
									<?php foreach($bdd->query($sql) as $row): ?>
									<?php $idfois2 = $row['id'] * 2; ?>
									<p><span class="timer" data-from="0" data-to="<?php echo $idfois2; ?>"></span></p>
									<?php endforeach; ?>
									<p>Verres/soirée</p>
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
									<i class="fa fa-beer"></i>
									<p><span class="timer" data-from="0" data-to="7"></span></p>
									<p>Verres/soirée</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-moon-o"></i>
									<p><span class="timer" data-from="0" data-to="478"></span></p>
									<p>Awards Won</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-star-o"></i>
									<p><span class="timer" data-from="0" data-to="28"></span></p>
									<p>Happy Customers</p>
								</div>
							</div>
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-bell-o"></i>
									<p><span class="timer" data-from="0" data-to="759"></span></p>
									<p>Design Ideas</p>
								</div>
							</div>
						</div>
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