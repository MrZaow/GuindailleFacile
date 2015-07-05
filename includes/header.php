<?php
$alcoolrecherche = "";
$error['alcoolrecherche'] = "";
if(isset($_GET["alcoolrecherche"])) 
{ 
$alcoolrecherche = htmlspecialchars($_GET["alcoolrecherche"]); 
}
if(!empty($_GET)){
    if(empty($alcoolrecherche))
        $error['alcoolrecherche'] = "Entrez un alcool à rechercher";
    $test = 1;
    foreach($error as $err)
    { 
        if(!empty($err))
            $test = 0;
        else
            $test = $test * 1;
    }
    if($test == 1){
		$req = $bdd->prepare('INSERT INTO recherchealcool(id, alcoolrecherche) VALUES(:id ,:alcoolrecherche)');
                        $req->execute(array(
                                'id' => '',
                                'alcoolrecherche' => $alcoolrecherche,
                            ));
        $sql= "SELECT id
		FROM recherchealcool
		ORDER BY id DESC LIMIT 1";
	 	foreach($bdd->query($sql) as $row) :
        header("Location: resultatrecherche.php?id=".$row['id']);
        endforeach;
    }
}
	?>
<header class="clearfix">
	<!-- Static navbar -->
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="navbar-heade">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><img alt="Guindaille Facile" src="images/logo8.png"></a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="active" href="index.php">Accueil</a></li>

							<?php if(isset($_SESSION['pseudo'])) { ?>

							<li><a href="#">Admin</a>
			  <ul class="drop-down">
				<li class="drop"><a href="#">Ajout</a>
					<ul class="drop-down level3">
							<li><a href="encodageingredient.php">Ingrédient</a></li>
					  <li><a href="encodagebiere.php">Bière</a></li>
					  <li><a href="encodagecocktail.php">Mélanges</a></li>
					  <li><a href="encodagefort.php">Alcool fort</a></li>
					  <li><a href="encodagejeux.php">Jeu d'alcool</a></li>
					  <li><a href="encodagechants.php">Chant de guindaille</a></li>
					  <li><a href="encodageavantage.php">Avantage</a></li>
					  <li><a href="encodageinconvenient.php">Inconvenient</a></li>
					  <li><a href="encodagemeilleuralcool.php">Meilleur alcool</a></li>
					  <li><a href="encodageingredientcocktail.php">Ingrédient pour cocktail</a></li>
										</ul>
									</li>
									<li class="drop"><a href="#">Suppression</a>
										<ul class="drop-down level3">
											<li><a href="suppressionbiere.php">Bière</a></li>
											<li><a href="suppressioncocktail.php">Mélange</a></li>
											<li><a href="suppressionfort.php">Alcool fort</a></li>
										</ul>
									</li>
									<li class="drop"><a href="#">Modification</a>
					<ul class="drop-down level3">
						<li><a href="modificationimage1.php">Image 1 d'une boisson</a></li>
											<li><a href="modificationimage2.php">Image 2 d'une boisson</a></li>
											<li><a href="modificationimage3.php">Image 3 d'une boisson</a></li>
											<li><a href="modificationimage1jeux.php">Image 1 d'un jeu</a></li>
											<li><a href="modificationimage2jeux.php">Image 2 d'un jeu</a></li>
											<li><a href="modificationimage3jeux.php">Image 3 d'un jeu</a></li>
										</ul>
									</li>
									<li><a href="deconnexionadmin.php">Déconnexion</a></li>
								</ul>
							</li>
							<?php } ?>

							
							<li><a href="biere.php">Bières</a></li>
							<li><a href="#">Alcools</a>
								<ul class="drop-down">
									<li><a href="cocktail.php">Mélanges</a></li>
									<li><a href="fort.php">Alcools forts</a></li>
								</ul>
							</li>
							<li><a href="jeux.php">Jeux d'alcool</a></li>
							<li><a href="#">Outils</a>
								<ul class="drop-down">
									<li><a href="limite.php">Le Bibinomètre</a></li>
									
								</ul>
							</li>
							
							<?php
								include("includes/connectionpdo.php");
								
								$sql8 = "SELECT nom
								FROM ingredients INNER JOIN boissons
								ON ingredients.idingredient = boissons.idingredient
								INNER JOIN cocktails
								ON boissons.idingredient = cocktails.idingredient
								UNION
								SELECT nom
								FROM ingredients INNER JOIN boissons
								ON ingredients.idingredient = boissons.idingredient
								INNER JOIN bieres
								ON boissons.idingredient = bieres.idingredient
								UNION
								SELECT nom
								FROM ingredients INNER JOIN boissons
								ON ingredients.idingredient = boissons.idingredient
								INNER JOIN alcoolsforts
								ON boissons.idingredient = alcoolsforts.idingredient
								UNION
								SELECT nom
								FROM jeux
								ORDER BY nom;
								";
							?>
					
							<li class="drop"><a href="#" class="open-search"><i class="fa fa-search"> <label for="alcoolrecherche" >Chercher</label></i></a>
								<form class="form-search" action="resultatrecherche.php" method="get">
									<input type="search" list="alcools" name="alcoolrecherche" id="alcoolrecherche" placeholder="Alcool ou jeu d'alcool" />
									<datalist id="alcools" >
										<?php
											foreach($bdd->query($sql8) as $row)
											{
												?>
													<option value=<?php echo '"'.$row['nom'].'"'; ?> />
												<?php
											}
										?>
										
									</datalist>
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>