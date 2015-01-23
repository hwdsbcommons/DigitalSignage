<?php
/**
 * Content
 *
 * Standard loop for the content
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */

get_header(); ?>
<div class="row">
    <!-- Main Content -->
    <div class="large-12 columns" role="content">
			<!-- <ul data-orbit>
	            <?php
	            $args=array(
	                'post_type' => 'post',
	                'post_status' => 'publish',
	                'orderby' => 'rand'
	            );
	            $the_query = new WP_Query($args);
	            if($the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post();
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
	
					echo '<li class="post-box large-12 columns" style="background:#' . get_post_meta($post->ID, '_digitalsign_bgcolor', true) . ';">',
						'<div class="row">',
						'<p class="large-7 columns copy end" style="color:#' . get_post_meta($post->ID, '_digitalsign_pcolor', true) . ';">' . do_shortcode( get_the_content() ) . '</p>',
						'</div>',
						'</li>';
	            endwhile;
	            endif;
				wp_reset_query();
	            ?>		
			</ul> -->
			<div class="fade" style="height:880px; width:1920px;">
			<?php
	            $args=array(
	                'post_type' => 'post',
	                'post_status' => 'publish',
	                'orderby' => 'rand'
	            );
	            $the_query = new WP_Query($args);
	            if($the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post();
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
					$format = get_post_format();
					get_template_part( 'format', $format );
					
					echo '<div style="background:#' . get_post_meta($post->ID, '_digitalsign_bgcolor', true) . ';">',
						'<p "class=' . post_class() . '; style="color:#' . get_post_meta($post->ID, '_digitalsign_pcolor', true) . ';">' . do_shortcode( get_the_content() ) . '</p>',
						'</div>';
	            endwhile;
	            endif;
				wp_reset_query();
	            ?>
			</div>
	</div>
</div>
    <!-- End Main Content -->

<?php get_footer(); ?>