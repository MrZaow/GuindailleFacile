<?php 

include("includes/connectionpdo.php");

$error['nom'] = "";
$error['remarques'] = "";
$error['resume'] = "";
$error['paroles'] = "";
$error['type'] = "";
$error['popularite'] = "";
$error['image1'] = "";

$result = "";

$ID = "";

$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$resume = (isset($_POST['resume'])) ? $_POST['resume'] : "";
$remarques = (isset($_POST['remarques'])) ? $_POST['remarques'] : "";
$paroles = (isset($_POST['paroles'])) ? $_POST['paroles'] : "";
$type = (isset($_POST['type'])) ? $_POST['type'] : "";
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


if(!empty($_POST))
{
	if(empty($nom))
		$error['nom'] = "Le nom ne peut pas être vide";

	if(empty($resume))
		$error['resume'] = "Veuillez remplir le résumé";

	if(empty($paroles))
		$error['paroles'] = "Veuillez remplir les paroles";

	if(empty($type))
		$error['type'] = "Veuillez remplir le type";

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
            $result = "Chant ajouté avec succès !";

            $req = $bdd->prepare('INSERT INTO chants(idchant, nom, resume, paroles, type, popularite, image1, remarques) VALUES
      				(:idjeu ,:nom, :resume, :paroles, :type, :popularite, :image1, :remarques)');
                    $req->execute(array(
                            'idjeu' => '',
                            'nom' => $nom,
                            'resume' => $resume,
                            'paroles' => $paroles,
                            'type' => $type,
                            'popularite' => $popularite,
                            'image1' =>$image1['name'],
                            'remarques' =>$remarques,
                        ));
            unset($nom, $resume, $paroles, $type, $popularite, $remarques);
            
        }
    }
}
?>