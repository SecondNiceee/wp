<?php 
/**
 * Block Theme - PIXEL WAVE Festival
 * Full Site Editing Theme
 */

//THEME SUPPORTS
add_action( 'after_setup_theme', function(){
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	
	// Add editor style
	add_editor_style( 'style.css' );
});


//THEME EXTRAS
require_once get_template_directory() . '/inc/theme-image.php';


//THEME STYLES & SCRIPTS
add_action( 'wp_enqueue_scripts', 'theme_styles_and_scripts' );	

function theme_styles_and_scripts() {
	$ver = '0.01';
	$css_url = get_template_directory_uri() . '/css/';
	$js_url = get_template_directory_uri() . '/js/';
	
	// Enqueue main theme style
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), $ver );
	
	// Enqueue additional .css files
	wp_enqueue_style( 'css-variables', $css_url . 'variables.css', array(), $ver );
	wp_enqueue_style( 'css-normalize', $css_url . 'normalize.css', array(), $ver );	

	// Enqueue .js files	
	wp_enqueue_script( 'main-js', $js_url . 'main.js', array(), $ver, true );
}


//REGISTER BLOCK PATTERNS CATEGORY
add_action( 'init', 'theme_register_pattern_categories' );

function theme_register_pattern_categories() {
	register_block_pattern_category(
		'theme-sections',
		array( 
			'label' => __( 'Секции сайта', 'theme' ),
			'description' => __( 'Готовые секции для лендинга', 'theme' )
		)
	);
	
	register_block_pattern_category(
		'featured',
		array( 
			'label' => __( 'Избранные', 'theme' )
		)
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
