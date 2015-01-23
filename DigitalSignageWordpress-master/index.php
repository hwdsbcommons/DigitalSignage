<?php
/**
 * Index
 *
 * Standard loop for the front-page
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */

get_header(); ?>
<div class="row">
    <!-- Main Content -->
    <div class="fade" role="content">
			<?php $args=array(
	                'post_type' => 'post',
	                'post_status' => 'publish',
	                'orderby' => 'rand'
	            );
	            $the_query = new WP_Query($args);
	            if($the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php
			endwhile;
	        endif;
			wp_reset_query();
	        ?>
			</div>
	</div>
</div>
    <!-- End Main Content -->

<?php get_footer(); ?>