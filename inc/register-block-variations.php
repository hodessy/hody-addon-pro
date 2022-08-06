<?php
/**
 * Block Variations
 *
 * @package hodyaddon
 * @since 1.0.0
 */

/**
 * This is an example of how to register a block variation.
 * Type /full or use the block inserter to insert a full width group block.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
 *
 * @since 1.0.0
 *
 * @return void
 */
$dir = plugin_dir_path( __FILE__ );
function hodyaddon_register_block_variation() {
	wp_enqueue_script(
		'hodyaddon-block-variations',
		plugins_url ('/assets/js/block-variation.js', __DIR__),
        
		array( 'wp-blocks' )
	);
}
add_action( 'enqueue_block_editor_assets', 'hodyaddon_register_block_variation' );
