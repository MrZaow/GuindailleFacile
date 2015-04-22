<?php include("includes/connectionpdo.php");

$error['budget'] = "";
$error['poids'] = "";
$error['sexe'] = "";

$result = "";

$budget = (isset($_POST['budget'])) ? $_POST['budget'] : "";
$poids = (isset($_POST['poids'])) ? $_POST['poids'] : "";
$sexe = (isset($_POST['sexe'])) ? $_POST['sexe'] : "";


if(!empty($_POST))
{
	if(empty($age))
		$error['age'] = "L'age ne peut pas être vide";

	if(empty($poids))
		$error['poids'] = "Le poids ne peut pas être vide";

	if(empty($sexe))
		$error['sexe'] = "Vous devez avoir un sexe";


	if($age < 12 || $age > 100)
		$error['age'] = "Age impossible";

	if($poids < 20 || $poids > 400)
		$error['poids'] = "Poids impossible";

	if($sexe != "mec" && $sexe != "fille")
		$error['sexe'] = "Sexe impossible";


	$test = 1;

	foreach($error as $err)
	{ 
		if(!empty($err))
			$test = 0;
		else
			$test = $test * 1;
	}

	if($test == 1)
    {

            $req = $bdd->prepare('INSERT INTO limite(id, age, poids, sexe) VALUES(:id ,:age, :poids, :sexe)');
                    $req->execute(array(
                            'id' => '',
                            'age' => $age,
                            'poids' => $poids,
                            'sexe' => $sexe,
                        ));

            $result = "OK";


    		$sql= "SELECT id
    		FROM limite
    		ORDER BY id DESC LIMIT 1";


		 	foreach($bdd->query($sql) as $row) :

            header("Location: resultatlimite.php?id=".$row['id']);

            endforeach;

    }
}



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
					<h1>Soirée à budget</h1>
				</div>
			</div>

			<!-- shortcodes-section
				================================================== -->
			<div class="section-content shortcodes-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="single-project">
								<div class="single-project-content">
					                <h1>Soirée à budget, c'est quoi ?</h1>
					                <h3>Entrez le budget de votre soirée ainsi que vos préférences d'alcool, et une proposition de liste de course sera générée. </h3>
								</div>
							</div>	
						</div>
					</div>
					<?php if(!empty($result)){ echo '<div class="alert alert-success alert-dismissible" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'; echo $result;  echo'</div>'; }?>
					<div class="row">
						<div class="col-md-6">
							<div class="single-project">
								<div class="single-project-content">
					                <form action="budget.php" class="form" method="post">
					                	<div class="form-group">
					                		<label for="budget">Budget de la soirée</label>
				                            <input type="number" required class="form-control" name="budget" id="budget" placeholder="Votre budget (en euros)" autofocus value="<?php if(isset($budget)) echo $budget; ?>" autofocus>
				                            <?php if(isset($error['budget'])) echo $error['budget']; ?>
				                        </div>
				                        <div class="form-group">
				                        	<label for="budget">Préférence de type d'alcool </label>
				                            <select class="form-control" name="type">
				                                <option value="biere">Bières</option>
				                                <option value="cocktail">Cocktails</option>
				                                <option value="fort">Alcools forts</option>
				                            </select>
				                            <?php if(isset($error['type'])) echo $error['type']; ?>
				                        </div>
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