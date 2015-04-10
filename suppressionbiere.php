<?php  
include("includes/connectionpdo.php");


$result = "";
$identre = "";


$identre = (isset($_POST['identre'])) ? $_POST['identre'] : "";


if(!empty($_POST)){

$result = "Suppression de la bière réalisée avec succès";

$bdd->exec('DELETE FROM avoir WHERE idingredient = $identre');
$bdd->exec('DELETE FROM contenir WHERE idingredient = $identre');
$bdd->exec('DELETE FROM bieres WHERE idingredient = $identre');
$bdd->exec('DELETE FROM boissons WHERE idingredient = $identre');
$bdd->exec('DELETE FROM ingredients WHERE idingredient = $identre');

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
            <h1>Suppression de bière</h1>
        </div>
    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(!empty($result)){ echo '<div class="alert alert-success alert-dismissible" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'; echo $result;  echo'</div>'; }?>

                    <form action="suppressionbiere.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>ID de la bière</label>
                            <input type="number" required class="form-control" name="identre" id="identre" placeholder="L'id de la bière" value="<?php if(isset($identre)) echo $identre; ?>" autofocus>
                            <?php if(isset($error['identre'])) echo $error['identre']; ?>
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