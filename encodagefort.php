<?php  
require_once("erreurencodagefort.php");
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
            <h1>Encodage d'alcool fort</h1>
        </div>

    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(!empty($result)){ echo '<div class="alert alert-success alert-dismissible" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'; echo $result;  echo'</div>'; }?>

                    <form action="encodagefort.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" required class="form-control" name="nom" id="nom" placeholder="Le nom" value="<?php if(isset($nom)) echo $nom; ?>" autofocus>
                            <?php if(isset($error['resume'])) echo $error['resume']; ?>
                        </div>
                        <div class="form-group">
                            <label>Résumé/Slogan</label><br>
                            <input type="text" required placeholder="Le résumé" name="resume" id="resume" value="<?php if(isset($resume)) echo $resume; ?>" class="form-control">
                            <?php if(isset($error['resume'])) echo $error['resume']; ?>
                        </div>
                        <div class="form-group">
                            <label>Description</label><br>
                            <textarea col="120" required placeholder="La description" name="description" id="description" value="<?php if(isset($description)) echo $description; ?>" class="form-control"></textarea>
                            <?php if(isset($error['description'])) echo $error['description']; ?>
                        </div>

                        <div class="form-group">
                            <label>Unité de mesure</label><br>
                            <select class="form-control" name="unitemesure">
                                <option value="l">l</option>
                                <option value="cl">cl</option>
                                <option value="gr">gr</option>
                                <option value="pincées">pincées</option>
                                <option value="cuillères à café">cuillères à café</option>
                                <option value="cuillères à soupe">cuillères à soupe</option>
                                <option value="feuilles">feuilles</option>
                            </select>
                            <?php if(isset($error['unitemesure'])) echo $error['unitemesure']; ?>
                        </div>
                        <div class="form-group">
                            <label>Pourcentage d'alcool</label><br>
                            <input type="number" step="0.1" required placeholder="Le pourcentage d'alcool" name="pourcentage" id="pourcentage" value="<?php if(isset($pourcentage)) echo $pourcentage; ?>" class="form-control">
                            <?php if(isset($error['pourcentage'])) echo $error['pourcentage']; ?>
                        </div>
                        <div class="form-group">
                            <label>Prix au litre</label><br>
                            <input type="number" step="0.1" required placeholder="Le prix au litre" name="prixaulitre" id="prixaulitre" value="<?php if(isset($prixaulitre)) echo $prixaulitre; ?>" class="form-control">
                            <?php if(isset($error['prixaulitre'])) echo $error['prixaulitre']; ?>
                        </div>
                        <div class="form-group">
                            <label>Cote sur 5</label><br>
                            <input type="number" step="0.1" required placeholder="La cote sur 5" name="cote" id="cote" value="<?php if(isset($cote)) echo $cote; ?>" class="form-control">
                            <?php if(isset($error['cote'])) echo $error['cote']; ?>
                        </div>
                        <div class="form-group">
                            <label>Image 1</label><br>
                            <input type="file" required name="image1" id="image1" class="form-control">
                            <?php if(isset($error['image1'])) echo $error['image1']; ?>
                        </div>
                        <div class="form-group">
                            <label>Image 2</label><br>
                            <input type="file" required name="image2" id="image2" class="form-control">
                            <?php if(isset($error['image2'])) echo $error['image2']; ?>
                        </div>
                        <div class="form-group">
                            <label>Image 3</label><br>
                            <input type="file" required name="image3" id="image3" class="form-control">
                            <?php if(isset($error['image3'])) echo $error['image3']; ?>
                        </div>


                        <input type="submit" class="btn btn-primary" name="submit" value="Envoyer"><br><br>
                        <?php if(isset($_GET['ID']) || isset($_POST['ID'])) {
                            ?>
                            <input type="hidden" value='<?php if(isset($_GET['ID'])) echo $_GET['ID']; else echo $_POST['ID']; ?>' name="ID" id="ID" />
                            <?php }?>
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