<?php include("includes/connectionpdo.php");
session_start(); ?>
<?php include("includes/head.php") ?>
<!doctype html>

<html lang="fr" class="no-js">

<body>
<!-- Container -->
<div id="container">
 

    <?php include("includes/header.php") ?>
<!-- content 
	================================================== -->
<div id="content">

	<!-- page-banner 
		================================================== -->
	<div class="section-content page-banner error-page-banner">
		<div class="container">
			<h1>Page non trouvée</h1>
		</div>
	</div>

	<!-- contact section 
		================================================== -->
	<div class="section-content error-section">
		<div class="error">
			<div class="container triggerAnimation animated" data-animate="tada">
				<span>404</span>
			</div>
		</div>
		<div class="error-content triggerAnimation animated" data-animate="bounceIn">
			<div class="container">
				<h1>La page que vous recherchiez n'existe pas</h1>
				<a href="index.php" class="button-third">Retour à l'accueil</a>						
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