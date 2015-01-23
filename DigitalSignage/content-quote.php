<?php 
/**  
* The template for displaying quote posts  
*  
*/ 
?>
<?php echo '<div style="background:#' . get_post_meta($post->ID, '_digitalsign_bgcolor', true) . '; height:900px; width:1920px; color:#' . get_post_meta($post->ID, '_digitalsign_pcolor', true) . ';">' ?>
			<div <?php post_class( '', $post_id ); ?>>
				<h1><?php the_content(); ?></h1><br><h2>- <em><?php the_title(); ?></em></h2>
			</div>
			</div>