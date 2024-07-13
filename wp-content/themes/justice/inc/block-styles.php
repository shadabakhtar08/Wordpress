<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Justice1.0
	 *
	 * @return void
	 */
	function justice_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'justice-columns-overlap',
				'label' => esc_html__( 'Overlap', 'justice' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'justice-border',
				'label' => esc_html__( 'Borders', 'justice' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'justice-border',
				'label' => esc_html__( 'Borders', 'justice' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'justice-border',
				'label' => esc_html__( 'Borders', 'justice' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'justice-image-frame',
				'label' => esc_html__( 'Frame', 'justice' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'justice-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'justice' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'justice-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'justice' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'justice-border',
				'label' => esc_html__( 'Borders', 'justice' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'justice-separator-thick',
				'label' => esc_html__( 'Thick', 'justice' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'justice-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'justice' ),
			)
		);
	}
	add_action( 'init', 'justice_register_block_styles' );
}
