<?php  
session_start();
if(!isset($_SESSION['pseudo']))
{
    header('Location: index.php');
}
else
{
include("includes/connectionpdo.php");


$identre = "";

$identre = (isset($_POST['identre'])) ? $_POST['identre'] : "";


$error['image3'] = "";


/*Pour l'image*/
if(!empty($_FILES)){

    require("imgClass.php");
    $image3 = $_FILES['image3'];
    $ext = strtolower( substr($image3['name'], -3));
    $allow_ext = array("jpg");
    if(in_array($ext, $allow_ext)){
        move_uploaded_file($image3['tmp_name'], "images/".$image3['name']);
        Img::creerMin("images/".$image3['name'], "images/min", $image3['name'], 450, 250);
    }
    else{
        $error['image3'] = "Votre fichier n'est pas une image au bon format";
    }
    
}

/*Modification de la bd*/
if(!empty($_POST)){

$result = "Modification d'image réalisée avec succes";
    

$req = $bdd->prepare("UPDATE jeux SET image3 = :image3 WHERE idjeu = $identre");
                    $req->execute(array(
                            'image3' =>$image3['name'],
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
            <h1>Modification d'image 3</h1>
        </div>
    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(!empty($result)){ echo '<div class="alert alert-success alert-dismissible" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'; echo $result;  echo'</div>'; }?>

                    <form action="modificationimage3jeux.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>ID du jeu</label>
                            <input type="number" required class="form-control" name="identre" id="identre" placeholder="L'id du jeu" value="<?php if(isset($identre)) echo $identre; ?>" autofocus>
                            <?php if(isset($error['identre'])) echo $error['identre']; ?>
                        </div>

                        <h3>La nouvelle image</h3>
                        <p>Note : les images doivent être au format jpg (ex : pyramide1.jpg) et leur titre ne doit pas comporter d'accent ni caractère spécial.</p>

                        <div class="form-group">
                            <label>Image 3</label><br>
                            <input type="file" required name="image3" id="image3" class="form-control">
                            <?php if(isset($error['image3'])) echo $error['image3']; ?>
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