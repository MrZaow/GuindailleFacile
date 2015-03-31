<!-- THE SCRIPT INITIALISATION -->
<!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.migrate.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/plugins-scroll.js"></script>
<script type="text/javascript" src="js/waypoint.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>

<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>


<script type="text/javascript">

    var revapi;

    jQuery(document).ready(function() {

        revapi = jQuery('.tp-banner').revolution(
            {
                delay:9000,
                startwidth:1170,
                startheight:738,
                hideThumbs:10,
                fullWidth:"on",
                forceFullWidth:"on",
                navigationType:"none",
                navigationArrows:"none",
                onHoverStop:"off"
            });

        var slideThumb = $('.slide-thumbs');

        slideThumb.on('click', function(){
            var btn = $(this);
            revapi.revshowslide(btn.data('slide'));

        });
        revapi.bind("revolution.slide.onchange", function (e,data) {
            slideThumb.parent('li').removeClass('active');
            $('#slidethumb' + data.slideIndex).parent('li').addClass('active');
        });

    });	//ready

</script>

<!-- END REVOLUTION SLIDER -->