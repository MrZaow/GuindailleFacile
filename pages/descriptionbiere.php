<?php

$post = App\App::getDB()->prepare('SELECT *
                                    FROM bieres AS b INNER JOIN ingredients AS i
                                    ON b.idingredient = i .idingredient
                                    INNER JOIN boissons AS b2
                                    ON b.idingredient = b2.idingredient
                                    WHERE b.idingredient = ?', [$_GET['i']],'App\Table\biere' ,true);

?>		<div id="content">

			<!-- page-banner 
				================================================== -->
			<div class="section-content page-banner portfolio-page-banner">
				<div class="container">
					<h1>Les bières</h1>

				</div>
			</div>

			<!-- single project -section 
				================================================== -->
			<div class="single-project">
				<div class="container">


					<div class="title-section white">
						<div class="container triggerAnimation animated" data-animate="bounceIn">
							<h1><?= $post->nom; ?></h1>
							<p><?= $post->resume; ?></p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-7">
							<div class="project-block triggerAnimation animated" data-animate="slideInLeft">
								<div class="row">
									<div class="col-md-12">
										<div class="single-project-content">
											<h1>À propos</h1>
											<h3>La <?= $post->nom; ?> est une bière <?= $post->type; ?> <?= $post->couleur; ?> originaire de <?= $post->paysorigine; ?>.
											Elle contient <?= $post->pourcentagealcool; ?> % d'alcool et coûte en moyenne <?= $post->prixlitre; ?> euros/litre en magasin.</h3>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="single-project-content">
											<h1>Avantages </h1>
											<ul class="feature-list2">
												<br>
												<li>
													<div class="list">
														<h3>- Défonce rapidement</h3>
													</div>
												</li>
												<li>
													<div class="list">
														<h3>- Bon goût</h3>
													</div>
												</li>
												<li>
													<div class="list">
														<h3>- Patrimoine culturel</h3>
													</div>
												</li>
											</ul>

										</div>
									</div>
									<div class="col-md-6 ">
										<div class="single-project-content">
											<h1>Inconvénients </h1>
											
											<ul class="feature-list2">
												<br>
												<li>
													<div class="list">
														<h3>- Lourde à boire</h3>
													</div>
												</li>
												<li>
													<div class="list">
														<h3>- Honéreuse</h3>
													</div>
												</li>
											</ul>

										</div>
									</div>
								</div>
								<div class="single-project-content">
									<p><?= $post->getDescription(); ?></p>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="single-project-content">
											<h1>Note des guindailleurs</h1>

											<ul class="feature-list2">
												<br>
												<li>
													<span><i class="fa fa-star"></i></span>
													<div class="list-cont">
														<h3><?= $post->cotesur5; ?>/5</h3>
													</div>
												</li>
											</ul>

										</div>

									</div>
								</div>

							</div>
						</div>

						<div class="col-md-5">
							<?= $post->getSlider() ;?>
						</div>
					</div>

					<div class="row">

					</div>
				</div>

			</div>

			<!-- portfolio-section 
				================================================== -->
			<div class="section-content portfolio-section">
				<div class="title-section">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Bières similaires</h1>
					</div>
				</div>
				<div class="portfolio-box triggerAnimation animated" data-animate="bounceIn">
					<div id="owl-demo" class="owl-carousel owl-theme">

						<div class="item project-post">
							<div class="project-gal">
								<img alt="" src="upload/portfolio/img1.jpg">
								<div class="hover-box">
									<a class="zoom" href="single-project.html#"><i class="fa fa-search-plus"></i></a>
									<a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="project-content">
								<h2>Aliquam tincidunt mauris eu risus.</h2>
								<p>Vestibulum auctor dapibus neque.</p>
							</div>
						</div>

						<div class="item project-post">
							<div class="project-gal">
								<img alt="" src="upload/portfolio/img2.jpg">
								<div class="hover-box">
									<a class="zoom" href="single-project.html#"><i class="fa fa-search-plus"></i></a>
									<a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="project-content">
								<h2>Aliquam tincidunt mauris eu risus.</h2>
								<p>Vestibulum auctor dapibus neque.</p>
							</div>
						</div>

						<div class="item project-post">
							<div class="project-gal">
								<img alt="" src="upload/portfolio/img3.jpg">
								<div class="hover-box">
									<a class="zoom" href="single-project.html#"><i class="fa fa-search-plus"></i></a>
									<a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="project-content">
								<h2>Aliquam tincidunt mauris eu risus.</h2>
								<p>Vestibulum auctor dapibus neque.</p>
							</div>
						</div>

						<div class="item project-post">
							<div class="project-gal">
								<img alt="" src="upload/portfolio/img4.jpg">
								<div class="hover-box">
									<a class="zoom" href="single-project.html#"><i class="fa fa-search-plus"></i></a>
									<a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="project-content">
								<h2>Aliquam tincidunt mauris eu risus.</h2>
								<p>Vestibulum auctor dapibus neque.</p>
							</div>
						</div>

						<div class="item project-post">
							<div class="project-gal">
								<img alt="" src="upload/portfolio/img5.jpg">
								<div class="hover-box">
									<a class="zoom" href="single-project.html#"><i class="fa fa-search-plus"></i></a>
									<a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="project-content">
								<h2>Aliquam tincidunt mauris eu risus.</h2>
								<p>Vestibulum auctor dapibus neque.</p>
							</div>
						</div>

						<div class="item project-post">
							<div class="project-gal">
								<img alt="" src="upload/portfolio/img6.jpg">
								<div class="hover-box">
									<a class="zoom" href="single-project.html#"><i class="fa fa-search-plus"></i></a>
									<a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="project-content">
								<h2>Aliquam tincidunt mauris eu risus.</h2>
								<p>Vestibulum auctor dapibus neque.</p>
							</div>
						</div>

						<div class="item project-post">
							<div class="project-gal">
								<img alt="" src="upload/portfolio/img7.jpg">
								<div class="hover-box">
									<a class="zoom" href="single-project.html#"><i class="fa fa-search-plus"></i></a>
									<a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="project-content">
								<h2>Aliquam tincidunt mauris eu risus.</h2>
								<p>Vestibulum auctor dapibus neque.</p>
							</div>
						</div>

					</div>
					<div class="buttons">
						<a class="owl-prev button-third" href="single-project.html#"><i class="fa fa-angle-left"></i></a>
						<a class="button-third" href="single-project.html#">Voir toutes les bières</a>
						<a class="owl-next button-third" href="single-project.html#"><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<div class="container comment-section">
				<h3>4 Commentaires</h3>

				<ul class="comment-tree">
					<li>
						<div class="comment-box">
							<img alt="" src="upload/testim1.jpg">
							<div class="comment-content">
								<h4>John Doe</h4>
								<span>July 6, 2013. 8:30 pm.</span>
								<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
								<a href="single-post.html#">Reply</a>
							</div>
						</div>
					</li>

					<li>
						<div class="comment-box">
							<img alt="" src="upload/testim1.jpg">
							<div class="comment-content">
								<h4>John Doe</h4>
								<span>July 6, 2013. 8:30 pm.</span>
								<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
								<a href="single-post.html#">Reply</a>
							</div>
						</div>
					</li>

					<li>
						<div class="comment-box">
							<img alt="" src="upload/testim3.jpg">
							<div class="comment-content">
								<h4>John Doe</h4>
								<span>July 6, 2013. 8:30 pm.</span>
								<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
								<a href="single-post.html#">Reply</a>
							</div>
						</div>
					</li>
				</ul>
				<form class="comment-form">
					<h3>Laisser un commentaire</h3>
					<div class="row">
						<div class="col-md-6">
							<input name="name" id="name" type="text" placeholder="Nom">
						</div>
						<div class="col-md-6">
							<input name="mail" id="mail" type="text" placeholder="Prenom">
						</div>
					</div>
					<textarea name="comment" id="comment" placeholder="Votre commentaire par rapport à la Chimay bleue"></textarea>
					<input type="submit" id="submit_contact" value="Envoyer">
				</form>
			</div>


		</div>
		<!-- End content -->