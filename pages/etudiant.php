
<!-- content
			================================================== -->
		<div id="content">

			<!-- page-banner 
				================================================== -->
			<div class="section-content page-banner blog-page-banner">
				<div class="container">
					<h1>Le Coin Étudiant</h1>
				</div>
			</div>

			<div class="categorize-blog">
				<div class="title-section">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Posts récents</h1>
						<ul class="filter">

							<li><a href="blog-fullwidth.html#" data-filter="*">Tous</a></li>
							<li><a href="blog-fullwidth.html#" data-filter=".drague">Drague</a></li>
							<li><a href="blog-fullwidth.html#" data-filter=".bapteme">Baptême</a></li>
							<li><a href="blog-fullwidth.html#" data-filter=".video">Vidéo</a></li>

						</ul>
					</div>
				</div>				
			</div>

			<!-- blog-section 
				================================================== -->
			<div class="section-content blog-section second-style">
				<div class="container">
          			<div class="blog-box masonry one-col triggerAnimation animated" data-animate="slideInUp">
						<?php foreach($db->query('SELECT * FROM articles ORDER BY date DESC', 'App\Table\Article') as $post): ?>

						<div class="blog-post <?= $post->categorie; ?>">
							<?= $post->Date; ?>

							<div class="post-content">
								<div class="content-data">
									<?= $post->Titre; ?>
									<?= $post->Auteur; ?>
								</div>
								<?= $post->Extrait; ?>

							</div>
						</div>
					 <?php endforeach; ?>
					</div>

					<div class="buttons">
						<a class="button-third view-more" href="blog-fullwidth.html#"><i class="fa fa-arrow-circle-o-down"></i>View more posts</a>
					</div>
          		</div>
          		<a class="go-top" href="blog-fullwidth.html#"><i class="fa fa-arrow-circle-o-up"></i></a>
			</div>


		</div>
		<!-- End content -->