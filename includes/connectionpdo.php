<?php
try
{
    $bdd = new PDO('mysql:host=guindailwpmrzaow.mysql.db;dbname=guindailwpmrzaow;charset=utf8', 'guindailwpmrzaow', 'PONpon230695');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>