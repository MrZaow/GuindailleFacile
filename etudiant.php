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
		<div class="section-content page-banner blog-page-banner">
			<div class="container">
				<h1>Le coin étudiant</h1>
			</div>
		</div>

		<!-- blog-section
	        ================================================== -->
		<div class="section-content blog-section with-sidebar">
			<div class="container">
				<div class="blog-box">
					<div class="row">
						<div class="col-md-9">


							<div class="blog-post masonry triggerAnimation animated" data-animate="slideInUp" >
								<div class="post-content  ">
									Date

									<div class="content-data">
										Titre
										Auteur
									</div>
									Extrait

								</div>
							</div>

						</div>
						<div class="col-md-3">
							<div class="sidebar triggerAnimation animated" data-animate="slideInUp">
								<div class="search-widget widget">
									<form>
										<input type="search" placeholder="Chercher un article"/>
										<button type="submit">
											<i class="fa fa-search"></i>
										</button>
									</form>
								</div>
								<div class="category-widget widget">
									<h3>Catégories</h3>
									<ul class="category-list filter">
										<li><a href="blog-rightsidebar.html#" data-filter="*">Tout</a></li>
										
										<li></li>
										
									</ul>
								</div>
								<div class="popular-widget widget">
									<h3>Articles populaires</h3>
									<ul class="popular-list">
										<li>
											<img alt="" src="upload/blog/b1.jpg">
											<div class="side-content">
												Titre
												Date
											</div>
										</li>
									</ul>
								</div>


							</div>
						</div>
					</div>


				</div>
			</div>
			<a class="go-top" href="blog-rightsidebar.html#"><i class="fa fa-arrow-circle-o-up"></i></a>
		</div>


	</div>
	<!-- content
				================================================== -->
<?php include("includes/footer.php") ?>

</div>
<!-- End Container -->
<?php include("includes/script.php") ?>

</body>
</html>