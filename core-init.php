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
define('HODY_CORE_INC',dirname( __FILE__ ).'/assets/inc/');
define('HODY_CORE_IMG',plugins_url( 'assets/img/', __FILE__ ));
define('HODY_CORE_CSS',plugins_url( 'assets/css/', __FILE__ ));
define('HODY_CORE_JS',plugins_url( 'assets/js/', __FILE__ ));
/*
*
*  Register CSS
*
*/
function hody_register_core_css(){
wp_enqueue_style('hody-core', HODY_CORE_CSS . 'hody-core.css',null,time(),'all');
};
add_action( 'wp_enqueue_scripts', 'hody_register_core_css' );    
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
if ( file_exists( HODY_CORE_INC . 'hody-ajax-request.php' ) ) {
	require_once HODY_CORE_INC . 'hody-ajax-request.php';
} 
// Load the Shortcodes
if ( file_exists( HODY_CORE_INC . 'hody-shortcodes.php' ) ) {
	require_once HODY_CORE_INC . 'hody-shortcodes.php';
}