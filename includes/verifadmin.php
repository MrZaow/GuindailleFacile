<?php

	$error = "";
	$pseudo = (isset($_POST['pseudo'])) ? $_POST['pseudo'] : "";
	$password = (isset($_POST['password'])) ? $_POST['password'] : "";

	include("includes/connectionpdo.php");

	if(!empty($_POST) && (empty($pseudo) || empty($password)))
			$result="Veuillez remplir le pseudo et mot de passe !";

	elseif(!empty($_POST))
	{

			$stmt = $bdd->prepare("SELECT pseudo, password FROM admins WHERE pseudo = :name AND password = :password");
			$stmt->bindParam(':name', $pseudo);
			$stmt->bindParam(':password', $password);
			$stmt->execute();

			if($stmt->rowCount() > 0)
			{
				$_SESSION['pseudo'] = $pseudo;
				header('Location: index.php');
			}
			else
				$result = "Erreur avec le mot de passe et le pseudo !";

	}