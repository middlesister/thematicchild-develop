<?php
/**
 * Test Thematic Develop branch theme
 * 
 * This theme's purpose is to test the bleeding edge develop branch 
 * of the Thematic Theme
 */



/**
 * Setup theme and all functionality
 */
function childtheme_setup() {
	
}
add_action( 'after_theme_setup', 'childtheme_setup' );


/**
 * Modify theme supports
 */
function childtheme_theme_supports() {
	//remove_theme_support('thematic_superfish');
}
add_action( 'thematic_child_init', 'childtheme_theme_supports');


/**
 * Test filter for changing style dependencies
 */
function childtheme_style_dependency( $dependencies ) {
	return array( 'thematic-style2' );
}
//add_filter( 'thematic_childtheme_style_dependencies', 'childtheme_style_dependency' );


/**
 * Test filter for changing the layout
 */
function childtheme_change_layout( $default_layout ) {
	if ( is_page('sample-page') )
		$default_layout = 'three-columns';
		
	return $default_layout;
}
add_filter( 'thematic_theme_layout', 'childtheme_change_layout' );
