<?php
// defines constant for javascript stylesheet_directory
define("JSFOLDER", get_stylesheet_directory_uri() . '/js/');
define("CSSFOLDER", get_stylesheet_directory_uri() . '/css/');
// defines constant for javascript stylesheet_directory
// define(CSSFOLDER, get_stylesheet_directory_uri() . '/css//');
// Above is not relevant as css is not in its own folder
// 
function bst_secondary_menu() {
	register_nav_menus( array(
		'secondary' => __( 'Secondary Menu', 'lsx' ),
	) );
}
add_action( 'init', 'bst_secondary_menu' );
/**
 * Enqueues all scripts and stylsheets
 * @return null
 */	
function bst_register_scripts() {
	
 }

add_action( 'wp_enqueue_scripts', 'bst_register_scripts' );



function bst_register_sidebars() {
	register_sidebar( array(
		'name'          => __( 'Home', 'lsx' ),
		'id'            => 'home',
		'before_widget' => '<div class="styler"><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside></div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
}
add_action( 'widgets_init', 'bst_register_sidebars' );

