<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */
?>
		<div class="content-dock"></div>
            </div> <!-- /.content -->


	<div class="row dock">

		<?php dynamic_sidebar("Dock"); ?>
	</div>
	<?php wp_footer(); ?>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js" integrity="sha256-4Cr335oZDYg4Di3OwgUOyqSTri0jUm2+7Gf2kH3zp1I=" crossorigin="anonymous"></script>
<script type="text/javascript">

        $(document).ready(function(){
            $('.fade').slick({
  autoplay: true,
  arrows:true,
  autoplaySpeed: 15000,
  infinite: true,
  speed: 2000,
  fade: true,
  slide: 'div',
  cssEase: 'ease',
  draggable: false,
  focusOnSelect: true,
  slidesToShow:1
});

        });
    </script>
    <script type="text/javascript">

        function onInit {
  event.target.playVideo();
}
    </script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/vendor/app.js"></script>
 </body>
</html>
