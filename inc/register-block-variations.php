<?php
/**
 * Block Variations
 *
 * @package gdgecuador
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
function gdgecuador_register_block_variation() {
	wp_enqueue_script(
		'gdgecuador-block-variations',
		get_template_directory_uri() . '/assets/js/block-variation.js',
		array( 'wp-blocks' ),
		GDGECUADOR_VERSION,
		true
	);
}
add_action( 'enqueue_block_assets', 'gdgecuador_register_block_variation' );
