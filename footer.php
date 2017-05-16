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

<script>
var iframeHeight = window.getComputedStyle(document.querySelector('iframe'),null).getPropertyValue('height');
document.getElementById('footer-dock').style.top = iframeHeight;
</script>

</body>
</html>
