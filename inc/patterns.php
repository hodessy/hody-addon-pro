<?php
/**
 * Hody Addon Pro: Block Patterns
 *
 * @since Hody Addon Pro 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Hody Addon Pro 1.0
 *
 * @return void
 */
function hodyaddon_register_block_patterns() {
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'hodyaddon' ) ),
		'footer'   => array( 'label' => __( 'Footers', 'hodyaddon' ) ),
		'header'   => array( 'label' => __( 'Headers', 'hodyaddon' ) ),
		'query'    => array( 'label' => __( 'Query', 'hodyaddon' ) ),
		'pages'    => array( 'label' => __( 'Pages', 'hodyaddon' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Hody Addon Pro 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'hodyaddon_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'cta-slim',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Hody Addon Pro 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'hodyaddon_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = HODY_CORE_INC_ALT . ' /patterns/' . $block_pattern . '.php' ;

		register_block_pattern(
			'hodyaddon/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'hodyaddon_register_block_patterns', 9 );
