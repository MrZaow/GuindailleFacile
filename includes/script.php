<!-- THE SCRIPT INITIALISATION -->
	<!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
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