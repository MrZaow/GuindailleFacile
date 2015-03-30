<div id="content">

    <!-- page-banner
        ================================================== -->
    <div class="section-content page-banner blog-page-banner">
        <div class="container">
            <h1>Le Coin Étudiant</h1>
        </div>
    </div>

    <!-- blog-section
        ================================================== -->
    <div class="section-content blog-section with-sidebar">
        <div class="container">
            <div class="blog-box">
                <div class="row">
                    <div class="col-md-12">

                        <div class="blog-post single-post triggerAnimation animated" data-animate="slideInUp">
                            <!---<img alt="" src="upload/blog/blog2/blog1.jpg"> --->

                            <!-- J'ai donc une variable $posts qui contient les articles y a plus qu'a boucler avec un foreach  -->
                            <?php foreach($posts as $post): ?>
                                <div class="post-content">

                                    <?= $post->date; ?>

                                    <div class="content-data">
                                        <?= $post->titre ; ?>
                                        <?= $post->auteur; ?>
                                    </div>
                                    <?= $post->contenu; ?>

                                    <div class="share-tag-box">
                                        <span>Partager cette article sur</span>
                                        <ul class="social-box">
                                            <li><a class="facebook" href="single-post.html#"><i class="fa fa-facebook"></i></a></li>
                                        </ul>
                                    </div>
                            <?php endforeach; ?>
                            </div>

                        </div>
                        <div class="col-md-3">

                        </div>
                    </div>
                </div>
            </div>
            <a class="go-top" href="single-post.html#"><i class="fa fa-arrow-circle-o-up"></i></a>
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