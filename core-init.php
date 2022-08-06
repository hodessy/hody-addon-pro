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


/*
*
*  Register CSS
*
*/
function hody_register_core_css(){
wp_enqueue_style('hody-core', HODY_CORE_CSS . 'hody-core.css',null,time(),'all');
};
add_action( 'wp_enqueue_scripts', 'hody_register_core_css' );   

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
add_action( 'after_setup_theme', 'hody_core_style_setup' );
function hody_core_style_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( './assets/css/style-shared.min.css' );
	//add_editor_style( './assets/css/style-shared.css' );

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
/*
if ( file_exists( HODY_CORE_VENDORS . '/genesis-custom-blocks/genesis-custom-blocks.php' ) ) {
	require_once HODY_CORE_VENDORS . '/genesis-custom-blocks/genesis-custom-blocks.php';
}*/
// Genesis Blocks Config
// add_filter( 'genesis_custom_blocks_show_pro_nag', '__return_false' );

/**
 * Define and import vendors
 *  ### Vendor List and Existing Versions ###
 *  Lazy Block by nK (https://wordpress.org/plugins/lazy-blocks/) V 2.3.4 
 * 	Metabox, by metabox.io (none yet)
 */
// Define path and URL to the LZB plugin.
define( 'HODYADDON_LZB_PATH', HODY_CORE_VENDORS . '/lzb/lazy-blocks/' );
//define( 'HODYADDON_LZB_URL', HODY_CORE_VENDORS . '/lzb/lazy-blocks/' );
//define( 'HODYADDON_LZB_URL', __DIR__ .'/vendor/lzb/lazy-blocks/' );
define( 'HODYADDON_LZB_URL',plugins_url( 'vendor/lzb/lazy-blocks/', __FILE__ ) );
// Include the LZB plugin.
//require_once HODYADDON_LZB_PATH . 'lazy-blocks.php';
if ( file_exists( HODYADDON_LZB_PATH . 'lazy-blocks.php' ) ) {
	require_once HODYADDON_LZB_PATH . 'lazy-blocks.php';
}

// Hide menu item
add_filter( 'lzb/show_admin_menu', '__return_false' );

// Customize the url setting to fix incorrect asset URLs.

add_filter( 'lzb/plugin_url', 'hodyaddon_lzb_url' );
function hodyaddon_lzb_url( $url ) {
return HODYADDON_LZB_URL;
}

//Initiate a list of custom blocks
if ( file_exists( HODY_CORE_INC_ALT . '/hody-lazyblocks.php' ) ) {
	require_once HODY_CORE_INC_ALT . '/hody-lazyblocks.php';
}


// Find template in another directory
$customBlockName = array(
	'bootstrap-alert',
);
define( 'HODYADDON_BLOCK_DIR', __DIR__ .'/blocks' );
function hodyaddon_lzb_block_render_include_template( $template, $attributes, $block, $context ) {
    // Custom template for block "lazyblock/my-custom-block"
    return 'blocks/' . $customBlockName . '/block.php' ;
}

add_filter( 'lazyblock/' . $customBlockName . '/include_template', 'hodyaddon_lzb_block_render_include_template', 10, 4 );


/**
* Gets an alternate template path.
*
* @param string $path The template path.
* @return string An alternate template path.
*/
/*
function hodyaddon_alternate_gcb_template_path( $path ) {
	unset( $path );
	return __DIR__;
	}
	
	add_filter( 'genesis_custom_blocks_template_path', 'hodyaddon_alternate_gcb_template_path' );

*/