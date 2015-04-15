<?php  
include("includes/connectionpdo.php");

$identre = "";

$identre = (isset($_POST['identre'])) ? $_POST['identre'] : "";


$error['image2'] = "";


/*Pour l'image*/
if(!empty($_FILES)){

    require("imgClass.php");
    $image2 = $_FILES['image2'];
    $ext = strtolower( substr($image2['name'], -3));
    $allow_ext = array("jpg");
    if(in_array($ext, $allow_ext)){
        move_uploaded_file($image2['tmp_name'], "images/".$image2['name']);
        Img::creerMin("images/".$image2['name'], "images/min", $image2['name'], 450, 250);
    }
    else{
        $error['image2'] = "Votre fichier n'est pas une image au bon format";
    }
    
}

/*Modification de la bd*/
if(!empty($_POST)){

$result = "Modification d'image réalisée avec succes";
    

$req = $bdd->prepare("UPDATE boissons SET image2 = :image2 WHERE idingredient = $identre");
                    $req->execute(array(
                            'image2' =>$image2['name'],
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
            <h1>Modification d'image 2</h1>
        </div>
    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(!empty($result)){ echo '<div class="alert alert-success alert-dismissible" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'; echo $result;  echo'</div>'; }?>

                    <form action="modificationimage2.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>ID de l'ingrédient</label>
                            <input type="number" required class="form-control" name="identre" id="identre" placeholder="L'id de l'ingrédient" value="<?php if(isset($identre)) echo $identre; ?>" autofocus>
                            <?php if(isset($error['identre'])) echo $error['identre']; ?>
                        </div>

                        <h3>La nouvelle image</h3>
                        <p>Note : les images doivent être au format jpg et leur titre ne doit pas comporter d'accent ni caractère spécial.</p>

                        <div class="form-group">
                            <label>Image 2</label><br>
                            <input type="file" required name="image2" id="image2" class="form-control">
                            <?php if(isset($error['image2'])) echo $error['image2']; ?>
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