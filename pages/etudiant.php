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

						<?php foreach(App\Table\Article::getLast() as $post): ?>

						<div class="blog-post masonry triggerAnimation animated" data-animate="slideInUp" ">
							<div class="post-content <?= $post->categorie; ?> ">
								<?= $post->Date; ?>

								<div class="content-data">
									<?= $post->Titre; ?>
									<?= $post->Auteur; ?>
								</div>
								<?= $post->Extrait; ?>

							</div>
						</div>
						<?php endforeach; ?>

					</div>
					<div class="col-md-3">
						<div class="sidebar triggerAnimation animated" data-animate="slideInUp">
							<div class="search-widget widget">
								<form>
									<input type="search" placeholder="Rechercher"/>
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
							<div class="category-widget widget">
								<h3>Catégories</h3>
								<ul class="category-list filter">
									<li><a href="blog-rightsidebar.html#" data-filter="*">Tout</a></li>
									<?php foreach(App\Table\Categorie::getAll() as $categorie): ?>
									<li><a href="#" data-filter=".<?= $categorie->titre; ?>"><?= ucfirst($categorie->titre); ?></a></li>
									<?php endforeach; ?>
								</ul>
							</div>
							<div class="popular-widget widget">
								<h3>Articles populaires</h3>
								<ul class="popular-list">
									<?php foreach (App\Table\Article::getPopular() as $post): ?>
									<li>
										<img alt="" src="upload/blog/b1.jpg">
										<div class="side-content">
											<?= $post->Titre; ?>
											<?= $post->Date; ?>
										</div>
									</li>
									<?php endforeach; ?>
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
