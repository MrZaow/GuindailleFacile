<?php 

include("includes/connectionpdo.php");

$error['nom'] = "";
$error['resume'] = "";
$error['description'] = "";
$error['unitemesure'] = "";

$result = "";

$ID = "";

$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$resume = (isset($_POST['resume'])) ? $_POST['resume'] : "";
$description = (isset($_POST['description'])) ? $_POST['description'] : "";
$unitemesure = (isset($_POST['unitemesure'])) ? $_POST['unitemesure'] : "";

if(!empty($_POST))
{
	if(empty($nom))
		$error['nom'] = "Le nom ne peut pas être vide";

	if(empty($resume))
		$error['resume'] = "Veuillez remplir le résumé";

	if(empty($description))
		$error['description'] = "Veuillez remplir la description";

	if(empty($unitemesure))
		$error['unitemesure'] = "Veuillez remplir l'unité de mesure";

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
        if(empty($ID))
        {
            

            $req = $bdd->prepare('INSERT INTO ingredients(idingredient, nom, resume, description, unitemesure) VALUES(:idingredient ,:nom, :resume, :description, :unitemesure)');
                    $req->execute(array(
                            'idingredient' => '',
                            'nom' => $nom,
                            'resume' => $resume,
                            'description' => $description,
                            'unitemesure' => $unitemesure,
                        ));
            unset($nom, $resume, $description, $unitemesure);

            $result = "Ingrédient ajouté avec succès !";
        }
    }
}
?>