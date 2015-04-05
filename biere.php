<?php include("includes/connectionpdo.php") ?>


<!doctype html>

<html lang="fr" class="no-js">
<?php include("includes/head.php") ?>

<body>
<!-- Container -->
<div id="container">
 

    <?php include("includes/header.php") ?>

		<div id="content">

			<div class="section-content page-banner portfolio-page-banner">
				<div class="container">
					<h1>Les Bières</h1>
				</div>
			</div>

			<div class="section-content portfolio-section">
				<div class="title-section white">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>La bière est la preuve indéniable que Dieu nous aime et veut nous voir heureux</h1>
						<p>Benjamin Franklin</p>
					</div>
				</div>
				<div class="portfolio-box">
					<ul class="filter center triggerAnimation animated" data-animate="bounceIn">
						<li class="item"><a href="portfolio-4col.html#" class="active" data-filter="*">Popuparité</a></li>
							<li class="item"><a href="#" class="active" data-filter=".">TYPE</a></li>
					</ul>
					<div class="masonry four-col triggerAnimation animated" data-animate="bounceIn">
							<div class="project-post web-design ">
								<div class="project-gal">
									<?php
									$dos = "images/min"; 
									$dir = opendir($dos);
									while($file = readdir($dir)){
										$allow_ext = array("jpg", 'png', 'gif');
										$ext = strtolower( substr($file, -3));
										if(in_array($ext, $allow_ext)){
											?>
											<img src="images/min/<?php echo $file; ?>" alt="">
											<?php  
										}
									}

									?>
									HOVER
								</div>
								<div class="project-content">
									<h2><a href=""><?php echo $file['name']; ?></a></h2>
									<p>RESUME</p>
								</div>
							</div>

					</div>
				</div>
			</div>

		</div>
		<!-- End content -->
    <?php include("includes/footer.php") ?>

</div>
<!-- End Container -->
<?php include("includes/script.php") ?>

</body>
</html>