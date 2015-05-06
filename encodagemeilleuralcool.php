<?php  
session_start();
if(!isset($_SESSION['pseudo']))
{
    header('Location: index.php');
}
else
{
include("includes/connectionpdo.php");

$prixlitre = "";
$nom = "";
$result = "";
$identre = "";


$prixlitre = (isset($_POST['prixlitre'])) ? $_POST['prixlitre'] : "";
$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$identre = (isset($_POST['identre'])) ? $_POST['identre'] : "";


if(!empty($_POST)){

$result = "Ajout de meilleur alcool réalisé avec succes";

$req = $bdd->prepare('INSERT INTO meilleursalcools(idmeilleuralcool, nom, prixlitre) VALUES(:idmeilleuralcool ,:nom, :prixlitre)');
                    $req->execute(array(
                            'idmeilleuralcool' => '',
                            'nom' => $nom,
                            'prixlitre' => $prixlitre,
                        ));
            unset($nom, $a);

$req = $bdd->prepare('INSERT INTO exemplariser(idingredient, idmeilleuralcool) VALUES(:idingredient ,(SELECT idmeilleuralcool FROM meilleursalcools ORDER BY idmeilleuralcool DESC LIMIT 1))');
                    $req->execute(array(
                            'idingredient' => $identre,
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
            <h1>Encodage de meilleur alcool</h1>
        </div>
    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(!empty($result)){ echo '<div class="alert alert-success alert-dismissible" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'; echo $result;  echo'</div>'; }?>

                    <form action="encodagemeilleuralcool.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>ID de l'ingrédient</label>
                            <input type="number" required class="form-control" name="identre" id="identre" placeholder="L'id de l'ingrédient" value="<?php if(isset($identre)) echo $identre; ?>" autofocus>
                            <?php if(isset($error['identre'])) echo $error['identre']; ?>
                        </div>

                        <div class="form-group">
                            <label>Nom de cet alcool</label>
                            <input type="text" required class="form-control" name="nom" id="nom" placeholder="Le nom" value="<?php if(isset($nom)) echo $nom; ?>" autofocus>
                            <?php if(isset($error['nom'])) echo $error['nom']; ?>
                        </div>

                        <div class="form-group">
                            <label>Prix au litre</label>
                            <input type="number" step="0.1"  required class="form-control" name="prixlitre" id="prixlitre" placeholder="Le prix au litre" value="<?php if(isset($prixlitre)) echo $prixlitre; ?>" autofocus>
                            <?php if(isset($error['prixlitre'])) echo $error['prixlitre']; ?>
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
<?php } ?>