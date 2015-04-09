<?php 

include("includes/connectionpdo.php");

$error['nom'] = "";
$error['resume'] = "";
$error['description'] = "";
$error['unitemesure'] = "";
$error['pourcentage'] = "";
$error['prixaulitre'] = "";
$error['cote'] = "";
$error['image1'] = "";
$error['image2'] = "";
$error['image3'] = "";

$result = "";

$ID = "";

$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$resume = (isset($_POST['resume'])) ? $_POST['resume'] : "";
$description = (isset($_POST['description'])) ? $_POST['description'] : "";
$unitemesure = (isset($_POST['unitemesure'])) ? $_POST['unitemesure'] : "";
$pourcentage = (isset($_POST['pourcentage'])) ? $_POST['pourcentage'] : "";
$prixaulitre = (isset($_POST['prixaulitre'])) ? $_POST['prixaulitre'] : "";
$cote = (isset($_POST['cote'])) ? $_POST['cote'] : "";

/*Pour les images*/
if(!empty($_FILES)){
	require("imgClass.php");
	$image1 = $_FILES['image1'];
	$ext = strtolower( substr($image1['name'], -3));
	$allow_ext = array("jpg", 'png', 'gif');
	if(in_array($ext, $allow_ext)){
		move_uploaded_file($image1['tmp_name'], "images/".$image1['name']);
		Img::creerMin("images/".$image1['name'], "images/min", $image1['name'], 450, 250);
	}
	else{
		$error['image1'] = "Votre fichier n'est pas une image au bon format";
	}
}
if(!empty($_FILES)){
	$image2 = $_FILES['image2'];
	$ext = strtolower( substr($image2['name'], -3));
	$allow_ext = array("jpg", 'png', 'gif');
	if(in_array($ext, $allow_ext)){
		move_uploaded_file($image2['tmp_name'], "images/".$image2['name']);
		Img::creerMin("images/".$image2['name'], "images/min", $image2['name'], 450, 250);
	}
	else{
		$error['image2'] = "Votre fichier n'est pas une image au bon format";
	}
}
if(!empty($_FILES)){
	$image3 = $_FILES['image3'];
	$ext = strtolower( substr($image3['name'], -3));
	$allow_ext = array("jpg", 'png', 'gif');
	if(in_array($ext, $allow_ext)){
		move_uploaded_file($image3['tmp_name'], "images/".$image3['name']);
		Img::creerMin("images/".$image3['name'], "images/min", $image3['name'], 450, 250);
	}
	else{
		$error['image3'] = "Votre fichier n'est pas une image au bon format";
	}
}

/*Pour le non photo*/
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

	if(empty($pourcentage))
		$error['pourcentage'] = "Veuillez remplir le pourcentage";

	if(empty($prixaulitre))
		$error['prixaulitre'] = "Veuillez remplir le prix au litre";

	if(empty($cote))
		$error['cote'] = "Veuillez remplir la cote";

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
            $result = "Alcool fort ajouté avec succès !";

            $req = $bdd->prepare('INSERT INTO ingredients(idingredient, nom, resume, description, unitemesure) VALUES(:idingredient ,:nom, :resume, :description, :unitemesure)');
                    $req->execute(array(
                            'idingredient' => '',
                            'nom' => $nom,
                            'resume' => $resume,
                            'description' => $description,
                            'unitemesure' => $unitemesure,
                        ));
            unset($nom, $resume, $description, $unitemesure);

            $req = $bdd->prepare('INSERT INTO boissons(pourcentagealcool, prixlitre, cotesur5, image1, image2, image3, idingredient) VALUES(:pourcentagealcool ,:prixlitre, :cotesur5, :image1, :image2, :image3, (SELECT idingredient FROM ingredients ORDER BY idingredient DESC LIMIT 1))');
                    $req->execute(array(
                            'pourcentagealcool' => $pourcentage,
                            'prixlitre' => $prixaulitre,
                            'cotesur5' => $cote,
                            'image1' =>$image1['name'],
                            'image2' =>$image2['name'],
                            'image3' =>$image3['name'],
                        ));
            unset($pourcentage, $prixaulitre, $cote);

            $req = $bdd->prepare('INSERT INTO alcoolsforts(idingredient) VALUES((SELECT idingredient FROM ingredients ORDER BY idingredient DESC LIMIT 1))');
                    $req->execute(array(
                        ));
        }
    }
}
?>