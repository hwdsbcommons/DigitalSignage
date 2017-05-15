<?php

/**
 * Functions
 *
 * Core functionality and initial theme setup
 *
 */

/**
 * Initiate Foundation, for WordPress
 */

function digitalsignage_setup() {

	// Language Translations
	load_theme_textdomain( 'digitalsignage', get_template_directory() . '/languages' );

	// Custom Editor Style Support
	add_editor_style();

	// Support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Automatic Feed Links & Post Formats
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array( 'image', 'video', 'gallery', 'quote' ) );

}

add_filter( 'the_content', 'my_quote_content' );

function my_quote_content( $content ) {

	/* Check if we're displaying a 'quote' post. */
	if ( has_post_format( 'quote' ) ) {

		/* Match any <blockquote> elements. */
		preg_match( '/<blockquote.*?>/', $content, $matches );

		/* If no <blockquote> elements were found, wrap the entire content in one. */
		if ( empty( $matches ) )
			$content = "<blockquote>{$content}</blockquote>";
	}

	return $content;
}

add_action( 'after_setup_theme', 'digitalsignage_setup' );


//#######################
//
// EXECUTE PHP IN WIDGETS
//
//***********************
function php_execute($html){
if(strpos($html,"<"."?php")!==false){ ob_start(); eval("?".">".$html);
$html=ob_get_contents();
ob_end_clean();
}
return $html;
}
add_filter('widget_text','php_execute',100);
add_filter('get_the_content','php_execute',100);




//########################
//
// COUNT THE WIDGETS
//
//########################
function count_sidebar_widgets( $sidebar_id, $echo = true ) {
    $the_sidebars = wp_get_sidebars_widgets();
    if( !isset( $the_sidebars[$sidebar_id] ) )
        return __( 'Invalid sidebar ID' );
    if( $echo )
        echo count( $the_sidebars[$sidebar_id] );
    else
        return count( $the_sidebars[$sidebar_id] );
}
//$widget_count = (int) (12 / count_sidebar_widgets( 'dock', false ));
	if (count_sidebar_widgets( 'dock', false ) > 0){
		$widget_count = (int) (12 / count_sidebar_widgets( 'dock', false ));
	}
	else {
		$widget_count = 1;
	}

//########################
//
// CREATE DOCK WIDGET AREA
//
//########################
$sidebars = array('Dock');
foreach ($sidebars as $dock) {
	register_sidebar(array('name'=> $dock,
		'id' => 'dock',
		'before_widget' => '<div class="large-' . $widget_count . ' columns">',
		'after_widget' => '</div>',
		'before_title' => '<h6>',
		'after_title' => '</h6>'
	));
}