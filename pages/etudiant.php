<div id="content">

	<!-- page-banner
        ================================================== -->
	<div class="section-content page-banner blog-page-banner">
		<div class="container">
			<h1>Our Blog</h1>
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
									<input type="search" placeholder="Search:"/>
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
							<div class="category-widget widget">
								<h3>Category</h3>
								<ul class="category-list filter">
									<li><a href="blog-rightsidebar.html#" data-filter="*">Tout</a></li>
									<li><a href="blog-rightsidebar.html#" data-filter=".Sexe">Sexe</a></li>
									<li><a href="blog-rightsidebar.html#" data-filter=".tests">Videos</a></li>
									<li><a href="blog-rightsidebar.html#">Lifestyle</a></li>
									<li><a href="blog-rightsidebar.html#">Technology</a></li>
								</ul>
							</div>
							<div class="popular-widget widget">
								<h3>Popular Post</h3>
								<ul class="popular-list">
									<li>
										<img alt="" src="upload/blog/b1.jpg">
										<div class="side-content">
											<h2><a href="single-post.html">Alius est amet cons tanter finis </a></h2>
											<p>April 27, 2014</p>
										</div>
									</li>
									<li>
										<img alt="" src="upload/blog/b2.jpg">
										<div class="side-content">
											<h2><a href="single-post.html">Probo artium studiose rosa </a></h2>
											<p>April 27, 2014</p>
										</div>
									</li>
									<li>
										<img alt="" src="upload/blog/b3.jpg">
										<div class="side-content">
											<h2><a href="single-post.html">Alius est amet cons tanter finis </a></h2>
											<p>April 27, 2014</p>
										</div>
									</li>
								</ul>
							</div>

							<div class="category-widget widget">
								<h3>Archives</h3>
								<ul class="category-list">
									<li><a href="blog-rightsidebar.html#">April 2013</a></li>
									<li><a href="blog-rightsidebar.html#">December 2013</a></li>
									<li><a href="blog-rightsidebar.html#">Octomber 2012</a></li>
									<li><a href="blog-rightsidebar.html#">November 2012</a></li>
									<li><a href="blog-rightsidebar.html#">March 2014</a></li>
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
