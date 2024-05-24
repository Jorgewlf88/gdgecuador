<?php
/**
 * Block styles.
 *
 * @package gdgecuador
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function gdgecuador_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'gdgecuador-flat-button',
			'label' => __( 'Flat button', 'gdgecuador' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'gdgecuador-list-underline',
			'label' => __( 'Underlined list items', 'gdgecuador' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'gdgecuador-box-shadow',
			'label' => __( 'Box shadow', 'gdgecuador' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'gdgecuador-box-shadow',
			'label' => __( 'Box shadow', 'gdgecuador' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'gdgecuador-box-shadow',
			'label' => __( 'Box shadow', 'gdgecuador' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'gdgecuador-plus',
			'label' => __( 'Plus & minus', 'gdgecuador' ),
		)
	);
}
add_action( 'init', 'gdgecuador_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function gdgecuador_unregister_block_style() {
	wp_enqueue_script(
		'gdgecuador-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		GDGECUADOR_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'gdgecuador_unregister_block_style' );
