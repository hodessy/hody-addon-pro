<?php 
/*
*
*	***** Hody Addon pro *****
*
*	This file initializes all HODY Core components
*	
*/
// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if
// Define Our Constants
define( 'HODY_CORE_INC_ALT', __DIR__ .'/inc' );
define( 'HODY_CORE_VENDORS', __DIR__ .'/vendor' );
define( 'HODY_CORE_INC',dirname( __FILE__ ).'inc/' );
define( 'HODY_CORE_IMG',plugins_url( 'assets/img/', __FILE__ ) );
define( 'HODY_CORE_CSS',plugins_url( '/assets/css/', __FILE__ ) );
define( 'HODY_CORE_JS',plugins_url( 'assets/js/', __FILE__ ) );
$baseDIR = trailingslashit( dirname( plugin_basename( __FILE__ ) ) ) . '/';
define( 'HODY_CORE_BLOCK_ALT', __DIR__ .'/blocks' );


/*
*
*  Register CSS
*
*/
function hody_register_core_css(){
wp_enqueue_style('hody-core', HODY_CORE_CSS . 'hody-core.css',null,time(),'all');
//wp_enqueue_style('hody-blocks', HODY_CORE_CSS . 'lazyblock.min.css',null,time(),'all');
};
add_action( 'wp_enqueue_scripts', 'hody_register_core_css' );   

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
/**
 * Add Editor Style
 * add additional editor style for my-plugin
 * 
 * @since 0.1.0
 */

add_action( 'after_setup_theme', 'hody_core_style_setup' );
function hody_core_style_setup() {
	//add_theme_support( 'wp-block-styles' );
	//add_editor_style( './assets/css/style-shared.min.css' );
	//add_editor_style( HODY_CORE_CSS, 'lazyblocks.min.css');

	
    /*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 'button', 'gallery' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "hody-core-$block_name",
			'src'    => plugins_url(  "assets/css/blocks/$block_name.min.css", __FILE__ ),
			'path'   => plugin_dir_path( "assets/css/blocks/$block_name.min.css", __FILE__ ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}


/**
 * Custom styles for LazyBock Generated blocks
 * Style only contains global style for block without variations
 * 
 * Dynamic styles are added inline in block template page
 */
add_action( 'after_setup_theme', 'hody_lazyblock_style_setup' );
function hody_lazyblock_style_setup() {

	$styled_lazyblocks = [ 'accordion','team' ];
	foreach ( $styled_lazyblocks as $lazyblock_name ) {
		$args = array(
			'handle' => "hody-core-$lazyblock_name",
			'src'    => plugins_url(  "assets/css/blocks/$lazyblock_name.min.css", __FILE__ ),
			'path'   => plugin_dir_path( "assets/css/blocks/$lazyblock_name.min.css", __FILE__ ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "lazyblock/$lazyblock_name", $args );
	}

}

/*
*
*  Register JS/Jquery Ready
*
*/
function hody_register_core_js(){
// Register Core Plugin JS	
wp_enqueue_script('hody-core', HODY_CORE_JS . 'hody-core.js','jquery',time(),true);
};
add_action( 'wp_enqueue_scripts', 'hody_register_core_js' );    



/*
*
*  Includes
*
*/ 
// Load the Functions
if ( file_exists( HODY_CORE_INC . 'hody-core-functions.php' ) ) {
	require_once HODY_CORE_INC . 'hody-core-functions.php';
}     
// Load the ajax Request
//if ( file_exists( HODY_CORE_INC . 'hody-ajax-request.php' ) ) {
//	require_once HODY_CORE_INC . 'hody-ajax-request.php';
//} 

// Load the Shortcodes
if ( file_exists( HODY_CORE_INC . 'hody-shortcodes.php' ) ) {
	require_once HODY_CORE_INC . 'hody-shortcodes.php';
}

// Filters.
if ( file_exists( HODY_CORE_INC_ALT . '/filters.php' ) ) {
	require_once HODY_CORE_INC_ALT . '/filters.php';
}

// Block variation .
if ( file_exists( HODY_CORE_INC_ALT . '/register-block-variations.php' ) ) {
	require_once HODY_CORE_INC_ALT . '/register-block-variations.php';
}
// Block style .
if ( file_exists( HODY_CORE_INC_ALT . '/register-block-styles.php' ) ) {
	require_once HODY_CORE_INC_ALT . '/register-block-styles.php';
}

//include_once  __DIR__ . '/inc/register-block-styles.php';
// Block pattern and block category.
if ( file_exists( HODY_CORE_INC_ALT . '/register-block-patterns.php' ) ) {
	require_once HODY_CORE_INC_ALT . '/register-block-patterns.php';
}
if ( file_exists( HODY_CORE_INC_ALT . '/patterns.php' ) ) {
	require_once HODY_CORE_INC_ALT . '/patterns.php';
}

//Include Vendors
//include_once  __DIR__ . '/vendor-init.php';
if ( file_exists( plugin_dir_path( __FILE__ ) . 'vendor-init.php' ) ) {
	require_once( plugin_dir_path( __FILE__ ) . 'vendor-init.php' );
};
