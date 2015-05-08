<?php  
include("includes/connectionpdo.php");
session_start();

$result = "";
$titre = "";
$captcha = "";
$contenu = "";
$categorie = "";
$auteur = "";
$date = date("Y-m-d H:i:s");

$titre = (isset($_POST['titre'])) ? $_POST['titre'] : "";
$contenu = (isset($_POST['contenu'])) ? $_POST['contenu'] : "";
$categorie = (isset($_POST['categorie'])) ? $_POST['categorie'] : "";
$auteur = (isset($_POST['auteur'])) ? $_POST['auteur'] : "";
$captcha = (isset($_POST['g-recaptcha-response'])) ? $_POST['g-recaptcha-response'] : "";


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


    $test = 1;

    foreach($error as $err)
    { 
        if(!empty($err))
            $test = 0;
        else
            $test = $test * 1;
    }

    if($test == 1){


    $result = "Histoire envoyée ! Merci de t'être confessé(e).";

    $req = $bdd->prepare('INSERT INTO articles(id, titre, contenu, date, categorie, auteur) VALUES(:id ,:titre, :contenu, :date, :categorie, :auteur)');
                        $req->execute(array(
                                'id' => '',
                                'titre' => $titre,
                                'contenu' => $contenu,
                                'date' => $date,
                                'categorie' => $categorie,
                                'auteur' => $auteur,
                            ));

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
<div id="content">

    <!-- page-banner
        ================================================== -->
    <div class="section-content page-banner error-page-banner">
        <div class="container">
            <h1>Rédigez votre histoire</h1>
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
                            <input type="text" required class="form-control" name="titre" id="titre" placeholder="Le titre de votre histoire" value="<?php if(isset($titre)) echo $titre; ?>" autofocus>
                            <?php if(isset($error['titre'])) echo $error['titre']; ?>
                        </div>

                        <div class="form-group">
                            <label>Histoire</label><br>
                            <textarea col="120" rows="6" required placeholder="Votre histoire" name="contenu" id="contenu" value="<?php if(isset($contenu)) echo $contenu; ?>" class="form-control"></textarea>
                            <?php if(isset($error['contenu'])) echo $error['contenu']; ?>
                        </div>

                        <div class="form-group">
                            <label>Catégorie</label><br>
                            <select class="form-control" name="categorie">
                                <option value="soirée">Soirée</option>
                                <option value="coquin">Coquin</option>
                                <option value="études">Études</option>
                                <option value="travail">Travail</option>
                                <option value="sport">Sport</option>
                                <option value="jeux">Jeux</option>
                                <option value="autre">Autre</option>
                            </select>
                            <?php if(isset($error['categorie'])) echo $error['categorie']; ?>
                        </div>

                        <div class="form-group">
                            <label>Auteur</label>
                            <input type="text" required class="form-control" name="auteur" id="auteur" placeholder="Votre pseudo (c'est anonyme) " value="<?php if(isset($auteur)) echo $auteur; ?>" >
                            <?php if(isset($error['auteur'])) echo $error['auteur']; ?>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LcEhwYTAAAAAD9BMmskM2H1kDgEisdj92d7yZmX"></div>
                        </div>

                        <input type="submit" class="btn btn-primary" name="submit" value="Envoyer">
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