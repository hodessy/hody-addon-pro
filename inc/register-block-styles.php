<?php
/**
 * Block styles.
 *
 * @package hody-addon
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */

function hody_addon_core_register_block_styles() {

    register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'hody-addon-sticky-part',
			'label' => __( 'Sticky header', 'hody-addon' ),
		)
	);

    register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'hody-addon-flat-button-with-icon',
			'label' => __( '→ Icon', 'hody-addon' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'hodyaddon-text-button-link',
			'label' => __( 'Text Link', 'hody-addon' ),
		)
	);


	register_block_style(
		'core/gallery',
		array(
			'name' => 'hody-addon-hero-grid-gallery',
			'label' => __('Hero Grid 1', 'hody-addon')
		)
	);

	register_block_style(
		'core/image',
		array(
			'name' => 'hodyaddon-icon-image',
			'label' => __('Icon Image', 'hody-addon')
		)
	);

	register_block_style(
		'core/image',
		array(
			'name' => 'hodyaddon-icon-image-overlap',
			'label' => __('Icon Overlap', 'hody-addon')
		)
	);

	register_block_style(
		'core/group',
		array(
			'name' => 'hodyaddon-group-box-shadow',
			'label' => __('Has Box Shadow', 'hody-addon')
		)
	);


}
add_action( 'init', 'hody_addon_core_register_block_styles' );