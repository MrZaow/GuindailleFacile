<?php include("includes/connectionpdo.php");
session_start();

include("includes/renvoiformulaire.php");

$error['age'] = "";
$error['poids'] = "";
$error['sexe'] = "";

$result = "";

$age = (isset($_POST['age'])) ? $_POST['age'] : "";
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

	if($poids < 40 || $poids > 400)
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
<head>
<title>Le Bibinomètre | Guindaille Facile, tout pour vos soirées</title>
<meta name="description" content="Calculez votre résistance à l'alcool et combien de verres il vous faut pour être bourré en fonction de votre âge et de votre poids." />
</head>

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
					<h1>Le Bibinomètre</h1>
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
	                <h1>Calculer sa résistance à l'alcool</h1>
	                <h3>Regardez combien de verres il vous faut pour être bourré</h3>
	                <p>Combien de verres vous faut-il pour être joyeux, bourré, ou encore faire un blackout? Grâce au magnifique,
	                au sublimissime, à l'ouftissime Bibinomètre, l'outil de calcul de résistance à l'alcool incroyablement super magique de Guindaille Facile, 
	                vous pouvez désormais le savoir en un clic
	                </p>
	                <br>
	                <h1>Prêt ? C'est parti !</h1>
	                <br>
								</div>
							</div>	
						</div>
					</div>
					<?php if(!empty($result)){ echo '<div class="alert alert-success alert-dismissible" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'; echo $result;  echo'</div>'; }?>
					<div class="row">
						<div class="col-md-4">
							<div class="single-project">
								<div class="single-project-content">
					                <form action="limite.php" class="form" method="post">
					                	<div class="form-group">
					                		<label for="age">Age</label>
				                            <input type="number" required class="form-control" name="age" id="age" placeholder="Votre age" autofocus value="<?php if(isset($age)) echo $age; ?>" autofocus>
				                            <?php if(isset($error['age'])) echo $error['age']; ?>
				                        </div>
				                        <div class="form-group">
				                        	<label for="poids">Poids</label>
				                            <input type="number" required class="form-control" name="poids" id="poids" placeholder="Votre poids (en kg)" value="<?php if(isset($poids)) echo $poids; ?>" autofocus>
				                            <?php if(isset($error['poids'])) echo $error['poids']; ?>
				                        </div>
				                        <div class="form-group">
				                        	<label for="sexe">Sexe</label>
				                            <select class="form-control" name="sexe">
				                                <option value="mec">Je suis un mec</option>
				                                <option value="fille">Je suis une fille</option>
				                            </select>
				                            <?php if(isset($error['sexe'])) echo $error['sexe']; ?>
				                        </div>
				                        <br>
				                        <input type="submit" class="btn btn-default button-coloration" name="submit" value="Envoyer"><br><br>
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