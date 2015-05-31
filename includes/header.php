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
							<a class="navbar-brand" href="index.php"><img alt="" src="images/logo8.png"></a>
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
		                                        <li><a href="encodagecocktail.php">Cocktail</a></li>
		                                        <li><a href="encodagefort.php">Alcool fort</a></li>
		                                        <li><a href="encodagejeux.php">Jeu d'alcool</a></li>
		                                        <li><a href="encodageavantage.php">Avantage</a></li>
		                                        <li><a href="encodageinconvenient.php">Inconvenient</a></li>
		                                        <li><a href="encodagemeilleuralcool.php">Meilleur alcool</a></li>
		                                        <li><a href="encodageingredientcocktail.php">Ingrédient pour cocktail</a></li>
											</ul>
										</li>
										<li class="drop"><a href="#">Suppression</a>
                                    		<ul class="drop-down level3">
												<li><a href="suppressionbiere.php">Bière</a></li>
												<li><a href="suppressioncocktail.php">Cocktail</a></li>
												<li><a href="suppressionfort.php">Alcool fort</a></li>
											</ul>
										</li>
										<li class="drop"><a href="#">Modification</a>
                                    		<ul class="drop-down level3">
                                    			<li><a href="modificationimage1.php">Image 1</a></li>
												<li><a href="modificationimage2.php">Image 2</a></li>
												<li><a href="modificationimage3.php">Image 3</a></li>
											</ul>
										</li>
										<li><a href="deconnexionadmin.php">Déconnexion</a></li>
                                    </ul>
                                </li>
								<?php } ?>

								<li><a href="etudiant.php">Coin guindaille</a></li>
								<li><a href="#">Alcools</a>
									<ul class="drop-down">
										<li><a href="cocktail.php">Cocktails</a></li>
										<li><a href="biere.php">Bières</a></li>
										<li><a href="fort.php">Alcools forts</a></li>
									</ul>
								</li>
                                <li><a href="#">Outils</a>
                                    <ul class="drop-down">
                                        <li><a href="limite.php">Le Bibinomètre</a></li>
                                    </ul>
                                </li>
                                <li><a href="jeux.php">Jeux d'alcool</a></li>
                                

								<li class="drop"><a href="#" class="open-search"><i class="fa fa-search"></i></a>
									<form class="form-search" action="resultatrecherche.php" method="get">
										<input type="search" name="alcoolrecherche" id="alcoolrecherche" placeholder="Alcool ou jeu d'alcool"/>
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