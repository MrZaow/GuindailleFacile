<?php  
session_start();
if(!isset($_SESSION['pseudo']))
{
    header('Location: index.php');
}
else
{
require_once("erreurencodageingredient.php");
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
            <h1>Encodage d'ingrédient</h1>
        </div>

    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(!empty($result)){ echo '<div class="alert alert-success alert-dismissible" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'; echo $result;  echo'</div>'; }?>
                    

                    <form action="encodageingredient.php" method="post">
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
                        </div>
                        <?php if(isset($error['unitemesure'])) echo $error['unitemesure']; ?>
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
<?php } ?>