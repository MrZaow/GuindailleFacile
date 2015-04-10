<?php  
include("includes/connectionpdo.php");


$result = "";
$titre = "";
$contenu = "";
$categorie = "";
$auteur = "";
$date = date("Y-m-d H:i:s");

$titre = (isset($_POST['titre'])) ? $_POST['titre'] : "";
$contenu = (isset($_POST['contenu'])) ? $_POST['contenu'] : "";
$categorie = (isset($_POST['categorie'])) ? $_POST['categorie'] : "";
$auteur = (isset($_POST['auteur'])) ? $_POST['auteur'] : "";


if(!empty($_POST)){

$result = "Histoire envoyée ! Les admins vont vérifier qu'elle est correcte (si ils ne sont pas saouls) puis elle sera postée.";

$req = $bdd->prepare('INSERT INTO articles(id, titre, contenu, date, categorie, auteur) VALUES(:id ,:titre, :contenu, $date, :categorie, :auteur)');
                    $req->execute(array(
                            'id' => '',
                            'titre' => $titre,
                            'contenu' => $contenu,
                            'categorie' => $categorie,
                            'auteur' => $auteur,
                        ));



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
                                <option value="Soirée">soirée</option>
                                <option value="Bourré">bourré</option>
                                <option value="Coquin">coquin</option>
                                <option value="Études">études</option>
                            </select>
                            <?php if(isset($error['categorie'])) echo $error['categorie']; ?>
                        </div>

                        <div class="form-group">
                            <label>Auteur</label>
                            <input type="text" required class="form-control" name="auteur" id="auteur" placeholder="Votre pseudo (c'est anonyme) " value="<?php if(isset($auteur)) echo $auteur; ?>" >
                            <?php if(isset($error['auteur'])) echo $error['auteur']; ?>
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