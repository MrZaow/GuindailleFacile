<?php
session_start();

if(isset($_SESSION['pseudo']))
{
	header('Location: index.php');
}
else
{
	require("includes/verifadmin.php"); 
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
			<div class="section-content page-banner portfolio-page-banner">
				<div class="container">
					<h1>Connection admin</h1>
				</div>
			</div>

			<div class="section-content shortcodes-section">
				<div class="container">

					<div class="row">
						<div class="col-md-4">
							<div class="single-project">
								<div class="single-project-content">
					                <form action="admin.php" class="form" method="post">
					                	<div class="form-group">
					                		<label for="pseudo">Pseudo</label>
				                            <input type="text" required class="form-control" name="pseudo" id="pseudo" placeholder="Votre pseudo" autofocus value="<?php if(isset($pseudo)) echo $pseudo; ?>" autofocus>
				                            <?php if(isset($error['pseudo'])) echo $error['pseudo']; ?>
				                        </div>
				                        <div class="form-group">
				                        	<label for="password">Password</label>
				                            <input type="password" required class="form-control" name="password" id="password" value="<?php if(isset($password)) echo $password; ?>" autofocus>
				                            <?php if(isset($error['password'])) echo $error['password']; ?>
				                        </div>
				                        <br>
				                        <input type="submit" class="btn btn-default" name="submit" value="Envoyer"><br><br>
					                </form>
								</div>
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
<?php } ?>