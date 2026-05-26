<?php 
//THEME SUPPORTS
add_action( 'after_setup_theme', function(){
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
});


//THEME EXTRAS
//require_once get_template_directory() . '/inc/post-types.php';
//require_once get_template_directory() . '/inc/spa.php';
//require_once get_template_directory() . '/inc/ajax.php';
require_once get_template_directory() . '/inc/theme-image.php';



//THEME MENUS
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
	register_nav_menu( 'main', 'Top Menu' );
}


//THEME STYLES & SCRIPTS
add_action( 'wp_enqueue_scripts', 'theme_styles_and_scripts' );	

function theme_styles_and_scripts() {
	$ver = '0.01';
	$css_url = get_template_directory_uri() . '/css/';
	$js_url = get_template_directory_uri() . '/js/';
	
	//Enqueue main theme style
	wp_enqueue_style( 'css-main', get_stylesheet_uri(), array(), $ver);
	
	//Enqueue additional .css files
	wp_enqueue_style( 'css-variables', $css_url . 'variables.css', array(), $ver);
	wp_enqueue_style( 'css-normalize', $css_url . 'normalize.css', array(), $ver);	

	//Enqueue .js files	
    wp_enqueue_script( 'main-js', $js_url . 'main.js', array('jquery'), $ver);
}


//ENABLING - DISABLING GUTENBERG FOR CERTAIN POST TYPES
add_filter( 'use_block_editor_for_post_type', 'theme_gutenberg_support_for_post_types', 10, 2 );

function theme_gutenberg_support_for_post_types( $use_block_editor, $post_type ){
	// Enable Gutenberg for posts AND pages
	if ($post_type == 'post' || $post_type == 'page') { 
		return true;
	} else { 
		return false; 
	}
}


//REGISTER BLOCK PATTERNS CATEGORY
add_action( 'init', 'theme_register_pattern_categories' );

function theme_register_pattern_categories() {
	register_block_pattern_category(
		'theme-sections',
		array( 'label' => __( 'Секции сайта', 'theme' ) )
	);
}


//ENQUEUE EDITOR STYLES
add_action( 'enqueue_block_editor_assets', 'theme_editor_styles' );

function theme_editor_styles() {
	wp_enqueue_style( 
		'theme-editor-css', 
		get_template_directory_uri() . '/css/editor.css', 
		array(), 
		'1.0' 
	);
}




