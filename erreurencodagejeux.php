<?php 

include("includes/connectionpdo.php");

$error['nom'] = "";
$error['resume'] = "";
$error['description'] = "";
$error['nbjoueursmin'] = "";
$error['type'] = "";
$error['cote'] = "";
$error['popularite'] = "";
$error['image1'] = "";
$error['image2'] = "";
$error['image3'] = "";

$result = "";

$ID = "";

$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$resume = (isset($_POST['resume'])) ? $_POST['resume'] : "";
$description = (isset($_POST['description'])) ? $_POST['description'] : "";
$nbjoueursmin = (isset($_POST['nbjoueursmin'])) ? $_POST['nbjoueursmin'] : "";
$type = (isset($_POST['type'])) ? $_POST['type'] : "";
$cote = (isset($_POST['cote'])) ? $_POST['cote'] : "";
$popularite = (isset($_POST['popularite'])) ? $_POST['popularite'] : "";

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


if(!empty($_POST))
{
	if(empty($nom))
		$error['nom'] = "Le nom ne peut pas être vide";

	if(empty($resume))
		$error['resume'] = "Veuillez remplir le résumé";

	if(empty($description))
		$error['description'] = "Veuillez remplir la description";

	if(empty($nbjoueursmin))
		$error['nbjoueursmin'] = "Veuillez remplir l'unité de mesure";

	if(empty($type))
		$error['type'] = "Veuillez remplir le type";

	if(empty($cote))
		$error['cote'] = "Veuillez remplir la cote";

	if(empty($popularite))
		$error['popularite'] = "Veuillez remplir la popularite";

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
            $result = "Jeu ajouté avec succès !";

            $req = $bdd->prepare('INSERT INTO jeux(idjeu, nom, resume, nbjoueursmin, description, type, cotesur5, popularite, image1, image2, image3) VALUES
      				(:idjeu ,:nom, :resume, :nbjoueursmin, :description, :type, :cotesur5, :popularite, :image1, :image2, :image3)');
                    $req->execute(array(
                            'idjeu' => '',
                            'nom' => $nom,
                            'resume' => $resume,
                            'nbjoueursmin' => $nbjoueursmin,
                            'description' => $description,
                            'type' => $type,
                            'cotesur5' => $cote,
                            'popularite' => $popularite,
                            'image1' =>$image1['name'],
                            'image2' =>$image2['name'],
                            'image3' =>$image3['name'],
                        ));
            unset($nom, $resume, $nbjoueursmin, $description, $type, $cote, $popularite);
            
        }
    }
}
?>