
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
						<?php foreach(App\Table\biere::getCategories() as $categories): ?>
							<li class="item"><a href="#" class="active" data-filter=".<?= $categories->type; ?>"><?= $categories->type; ?></a></li>
						<?php endforeach; ?>
					</ul>
					<div class="masonry four-col triggerAnimation animated" data-animate="bounceIn">
						<?php foreach(App\Table\biere::getAll() as $post): ?>
							<div class="project-post web-design <?= $post->type; ?>">
								<div class="project-gal">
									<?= $post->getPhoto(1); ?>
									<?= $post->getHover(); ?>
								</div>
								<div class="project-content">
									<h2><a href="<?php $post->getLink(); ?>"><?= $post->nom; ?></a></h2>
									<p><?= $post->resume; ?></p>
								</div>
							</div>
					<?php endforeach; ?>

					</div>
				</div>
			</div>

		</div>
		<!-- End content -->
