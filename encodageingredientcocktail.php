<?php  
include("includes/connectionpdo.php");


$nom = "";
$result = "";
$identre = "";
$qte = "";
$idcocktail = "";


$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$identre = (isset($_POST['identre'])) ? $_POST['identre'] : "";
$qte = (isset($_POST['qte'])) ? $_POST['qte'] : "";
$idcocktail = (isset($_POST['idcocktail'])) ? $_POST['idcocktail'] : "";

if(!empty($_POST)){

$result = "Ajout d'ingrédient pour cocktail réalisé avec succes";


$req = $bdd->prepare('INSERT INTO contenir(qte, idingredient, idingredient_INGREDIENTS) VALUES(:qte ,:idingredient , :idingredient_INGREDIENTS)');
                    $req->execute(array(
                            'qte' => $qte,
                            'idingredient' => $idcocktail,
                            'idingredient_INGREDIENTS' => $identre,
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
            <h1>Encodage d'ingrédient pour un cocktail</h1>
        </div>
    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(!empty($result)){ echo '<div class="alert alert-success alert-dismissible" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'; echo $result;  echo'</div>'; }?>

                    <form action="encodageingredientcocktail.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>ID du cocktail</label>
                            <input type="number" required class="form-control" name="idcocktail" id="idcocktail" placeholder="L'id du cocktail" value="<?php if(isset($idcocktail)) echo $idcocktail; ?>" autofocus>
                            <?php if(isset($error['idcocktail'])) echo $error['idcocktail']; ?>
                        </div>

                        <div class="form-group">
                            <label>ID de l'ingrédient</label>
                            <input type="number" required class="form-control" name="identre" id="identre" placeholder="L'id de l'ingrédient" value="<?php if(isset($identre)) echo $identre; ?>" >
                            <?php if(isset($error['identre'])) echo $error['identre']; ?>
                        </div>

                        <div class="form-group">
                            <label>Quantité</label>
                            <input type="number" step="0.1" required class="form-control" name="qte" id="qte" placeholder="La quantité" value="<?php if(isset($qte)) echo $qte; ?>" >
                            <?php if(isset($error['qte'])) echo $error['qte']; ?>
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