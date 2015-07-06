<?php  
include("includes/connectionpdo.php");
session_start();
if(!isset($_SESSION['pseudo']))
{
    header('Location: index.php');
}
else{

$result = "";
$titre = "";
$captcha = "";
$contenu = "";
$resume = "";
$categorie = "";
$auteur = "";
$date = date("Y-m-d H:i:s");

$titre = (isset($_POST['titre'])) ? $_POST['titre'] : "";
$contenu = (isset($_POST['contenu'])) ? $_POST['contenu'] : "";
$resume = (isset($_POST['resume'])) ? $_POST['resume'] : "";
$categorie = (isset($_POST['categorie'])) ? $_POST['categorie'] : "";
$auteur = (isset($_POST['auteur'])) ? $_POST['auteur'] : "";
$captcha = (isset($_POST['g-recaptcha-response'])) ? $_POST['g-recaptcha-response'] : "";

$error['titre'] = "";
$error['captcha'] = "";
$error['contenu'] = "";
$error['categorie'] = "";
$error['auteur'] = "";
$error['resume'] = "";
$error['taillecontenu'] = "";
$error['image1'] = "";

/*Pour les images*/
if(!empty($_FILES)){
	require("imgClass.php");
	$image1 = $_FILES['image1'];
	$ext = strtolower( substr($image1['name'], -3));
	$allow_ext = array("jpg", 'png', 'gif');
	if(in_array($ext, $allow_ext)){
		move_uploaded_file($image1['tmp_name'], "images/".$image1['name']);
		Img::creerMin("images/".$image1['name'], "images/min", $image1['name'], 640, 310);
	}
	else{
		$error['image1'] = "Votre fichier n'est pas une image au bon format";
	}
}


if(!empty($_POST)){

    if(empty($titre))
        $error['titre'] = "Le titre ne peut pas être vide";
    if(empty($captcha))
        $error['captcha'] = "Veuillez remplir le captcha";
    if(empty($contenu))
        $error['contenu'] = "Veuillez remplir le contenu";
    if(empty($categorie))
        $error['categorie'] = "Veuillez remplir la catégorie";
    if(empty($auteur))
        $error['auteur'] = "Veuillez remplir l'auteur";
    if(empty($resume))
        $error['resume'] = "Veuillez remplir le resume";

    if(strlen($contenu) < 30)
        $error['taillecontenu'] = "Veuillez entrer une histoire d'au minimum 30 caractères";


    $test = 1;

    foreach($error as $err)
    { 
        if(!empty($err))
            $test = 0;
        else
            $test = $test * 1;
    }

    if($test == 1){


    $result = "Article envoyé !";

    $req = $bdd->prepare('INSERT INTO articles(id, titre, contenu, date, categorie, auteur, image1, resume) VALUES(:id ,:titre, :contenu, :date, :categorie, :auteur, :image1, :resume)');
                        $req->execute(array(
                                'id' => '',
                                'titre' => $titre,
                                'contenu' => $contenu,
                                'date' => $date,
                                'categorie' => $categorie,
                                'auteur' => $auteur,
                                'image1' =>$image1['name'],
                                'resume' =>$resume,
                            ));

    }

    header("Location: blog.php");

}

?>
<!doctype html>

<html lang="fr" class="no-js">
<?php include("includes/head.php") ?>

<body>
<!-- Container -->
<div id="container">

    <?php include("includes/header.php") ?>
<div id="content">

    <!-- page-banner
        ================================================== -->
    <div class="section-content page-banner error-page-banner">
        <div class="container">
            <h1>Rédigez votre article</h1>
        </div>
    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(!empty($result)){ echo '<div class="alert alert-success alert-dismissible" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'; echo $result;  echo'</div>'; }?>

                    <form action="encodagearticle.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Titre</label>
                            <input type="text" required class="form-control" name="titre" id="titre" placeholder="Le titre de l'article" value="<?php if(isset($titre)) echo $titre; ?>" autofocus>
                            <?php if(isset($error['titre'])) echo $error['titre']; ?>
                        </div>

                        <div class="form-group">
                            <label>Article</label><br>
                            <textarea col="120" rows="6" required placeholder="Votre article" name="contenu" id="contenu" value="<?php if(isset($contenu)) echo $contenu; ?>" class="form-control"></textarea>
                            <?php if(isset($error['contenu'])) echo $error['contenu']; ?>
                            <?php if(isset($error['taillecontenu'])) echo $error['taillecontenu']; ?>
                        </div>
                        <div class="form-group">
                            <label>Résumé apéritif</label><br>
                            <textarea col="120" rows="6" required placeholder="Le résumé apéritif" name="resume" id="resume" value="<?php if(isset($resume)) echo $resume; ?>" class="form-control"></textarea>
                            <?php if(isset($error['resume'])) echo $error['resume']; ?>
                        </div>

                        <div class="form-group">
                            <label>Catégorie</label><br>
                            <select class="form-control" name="categorie">
                                <option value="conseils">Conseils</option>
                                <option value="bières">Avis</option>
                                <option value="autre">Autre</option>
                            </select>
                            <?php if(isset($error['categorie'])) echo $error['categorie']; ?>
                        </div>
                        <h3>L'image</h3>
                        <p>Note : les images doivent être au format jpg et leur titre ne doit pas comporter d'accent ni caractère spécial.</p>
                        <div class="form-group">
                            <label>Image 1</label><br>
                            <input type="file" required name="image1" id="image1" class="form-control">
                            <?php if(isset($error['image1'])) echo $error['image1']; ?>
                        </div>
                        <div class="form-group">
                            <label>Auteur</label>
                            <input type="text" required class="form-control" name="auteur" id="auteur" placeholder="Votre prénom " value="<?php if(isset($auteur)) echo $auteur; ?>" >
                            <?php if(isset($error['auteur'])) echo $error['auteur']; ?>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LdvCAgTAAAAAOXQiJr7qt9em2lhq53ST_kf8zMZ"></div>
                        </div>

                        <input type="submit" class="btn btn-primary button-coloration" name="submit" value="Envoyer">
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
    <?php include("includes/footer.php") ?>

</div>
<!-- End Container -->
<?php include("includes/script.php") ?>

</body>
</html>
<?php } ?>