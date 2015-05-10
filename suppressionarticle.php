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
$identre = $_GET['id'];


if(!empty($identre)){

$bdd->exec("UPDATE articles SET supprime = 1 WHERE id = $identre");

header('Location: etudiant.php');
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


</div>
    <?php include("includes/footer.php") ?>

</div>
<!-- End Container -->
<?php include("includes/script.php") ?>

</body>
</html>
<?php } ?>