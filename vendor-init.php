<?php
/**
 * Define and import vendors
 *  ### Vendor List and Existing Versions ###
 *  Lazy Block by nK (https://wordpress.org/plugins/lazy-blocks/) V 2.3.4 
 * 	Metabox, by metabox.io (none yet)
 */

 /**
  *     Variables to define path and URL to the LZB plugin.
  */

define( 'HODYADDON_LZB_PATH', __DIR__ .'/vendor/lzb/' );
define( 'HODYADDON_LZB_URL',plugins_url( 'vendor/lzb/', __FILE__ ) );
define( 'HODYADDON_BLOCK_DIR', __DIR__ .'/blocks' );
define( 'HODYADDON_BLOCK_URL',plugins_url( 'blocks/', __FILE__ ) );

/**
 * Include LZB Plugin
 */

if ( file_exists( HODYADDON_LZB_PATH . 'lazy-blocks.php' ) ) {
	require_once HODYADDON_LZB_PATH . 'lazy-blocks.php';
}

/**
 * 	 Customize the url setting to fix incorrect asset URLs.
 */

add_filter( 'lzb/plugin_url', 'hodyaddon_lzb_url' );
function hodyaddon_lzb_url( $url ) {
return HODYADDON_LZB_URL;
}

//Initiate a list of custom blocks
if ( file_exists( HODYADDON_BLOCK_DIR . '/hody-lazyblocks.php' ) ) {
	require_once HODYADDON_BLOCK_DIR . '/hody-lazyblocks.php';
}


/**
 * Hide Menu Items for LZB
 */
if ( file_exists( '/wp-content/plugins/lazy-blocks/lazy-blocks.php' ) ) {
	//add_filter( 'lzb/show_admin_menu', '__return_false' );
};

/*
// Method 1
function hody_lzb_block_render_include_template( $template, $attributes, $block, $context ) {
    // Custom template for all blocks
   return ( plugin_dir_path( __FILE__ ) . 'blocks/lazyblock-templates.php' );
}

add_filter( 'lzb/block_render/include_template', 'hody_lzb_block_render_include_template', 10, 4 );
*/

// Method 
function accordion_hody_lzb_block_render_include_template( $template, $attributes, $block, $context ) {
    // Custom template for all blocks
   return ( plugin_dir_path( __FILE__ ) . 'blocks/lazyblocks/accordion.php' );
}

add_filter( 'lazyblock/accordion/include_template', 'accordion_hody_lzb_block_render_include_template', 10, 4 );

function team_hody_lzb_block_render_include_template( $template, $attributes, $block, $context ) {
  // Custom template for all blocks
 return ( plugin_dir_path( __FILE__ ) . 'blocks/lazyblocks/team.php' );
}

add_filter( 'lazyblock/team/include_template', 'team_hody_lzb_block_render_include_template', 10, 4 );
