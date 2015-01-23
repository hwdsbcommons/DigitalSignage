<?php 
/**  
* The template for displaying image posts  
*  
*/ 
?>
<?php echo '<div style="background:#' . get_post_meta($post->ID, '_digitalsign_bgcolor', true) . '; height:900px; width:1920px; color:#' . get_post_meta($post->ID, '_digitalsign_pcolor', true) . ';">' ?>
				<div <?php post_class( '', $post_id ); ?>>
				<?php the_content(); ?>
				</div>
			</div>