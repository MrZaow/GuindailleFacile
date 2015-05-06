<?php  

include("includes/connectionpdo.php");
session_start();

if(!isset($_SESSION['pseudo']))
{
    header('Location: index.php');
}
else
{

$a = "A";
$nom = "";
$result = "";
$identre = "";



$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$identre = (isset($_POST['identre'])) ? $_POST['identre'] : "";


if(!empty($_POST)){

$result = "Ajout d'avantage réalisé avec succes";

$req = $bdd->prepare('INSERT INTO avantagesinconvenients(idavantage, nom, avantageouinconvenient) VALUES(:idavantage ,:nom, :avantageouinconvenient)');
                    $req->execute(array(
                            'idavantage' => '',
                            'nom' => $nom,
                            'avantageouinconvenient' => $a,
                        ));
            unset($nom, $a);

$req = $bdd->prepare('INSERT INTO avoir(idingredient, idavantage) VALUES(:idingredient ,(SELECT idavantage FROM avantagesinconvenients ORDER BY idavantage DESC LIMIT 1))');
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
            <h1>Encodage d'avantage</h1>
        </div>
    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(!empty($result)){ echo '<div class="alert alert-success alert-dismissible" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'; echo $result;  echo'</div>'; }?>

                    <form action="encodageavantage.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>ID de l'ingrédient</label>
                            <input type="number" required class="form-control" name="identre" id="identre" placeholder="L'id de l'ingrédient" value="<?php if(isset($identre)) echo $identre; ?>" autofocus>
                            <?php if(isset($error['identre'])) echo $error['identre']; ?>
                        </div>

                        <div class="form-group">
                            <label>Texte de l'avantage</label>
                            <input type="text" required class="form-control" name="nom" id="nom" placeholder="Le nom" value="<?php if(isset($nom)) echo $nom; ?>" >
                            <?php if(isset($error['nom'])) echo $error['nom']; ?>
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