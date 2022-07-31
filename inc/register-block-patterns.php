<?php
/**
 * Filters
 *
 * @package hody-addon
 * @since 1.0.0
 */

/**
 * Show '(No title)' if a post has no title.
 *
 * @since 1.0.0
 */

 /**
 * Registers block patterns and block pattern categories.
 *
 * @since 1.0.0
 *
 * @return void
 */
function hody_addon_core_register_block_patterns() {

	/**
	 * Register theme block pattern category.
	 *
	 * @since 1.0.0
	 */
	register_block_pattern_category(
		'cta',
		array( 'label' => esc_html__( 'CTA', 'hody-addon' ) )
	);

}
add_action( 'init', 'hody_addon_core_register_block_patterns', 9 );
