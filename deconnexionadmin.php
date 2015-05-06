<?php 
session_start();

if(!isset($_SESSION['pseudo']))
{
	header('Location: index.php');
}
else
{

unset($_SESSION);

session_destroy();

header('location: index.php');
}
?>