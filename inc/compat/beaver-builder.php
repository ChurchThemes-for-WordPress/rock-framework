<?php
/**
 * Beaver Builder compatibility.
 *
 * @package Rock
 * @since   1.0.0
 */

/**
 * Use full-width layout by default on Page Builder posts.
 *
 * @action add_post_meta
 * @global Rock_Customizer_Layouts $rock_customizer_layouts
 * @since  1.0.0
 *
 * @param int    $post_id
 * @param string $meta_key
 * @param mixed  $meta_value
 */
function rock_bb_layout( $post_id, $meta_key, $meta_value ) {

	if ( '_fl_builder_draft' === $meta_key ) {

		global $rock_customizer_layouts;

		if ( isset( $rock_customizer_layouts->layouts['one-column-wide'] ) ) {

			update_post_meta( $post_id, 'rock_layout', 'one-column-wide' );

		}

	}

}
add_action( 'add_post_meta', 'rock_bb_layout', 10, 3 );

/**
 * Add color scheme targets for Beaver Builder elements.
 *
 * @filter rock_colors
 * @since  1.0.0
 *
 * @param  array $colors
 *
 * @return array
 */
function rock_bb_colors( $colors ) {

	$bb_colors = array(
		'primary_text_color' => array(
			'css' => array(
				'.fl-callout-text,
				.fl-rich-text' => array(
					'color' => '%1$s',
				),
			),
		),
		'button_color' => array(
			'css' => array(
				'a.fl-button,
				a.fl-button:visited,
				.content-area .fl-builder-content a.fl-button,
				.content-area .fl-builder-content a.fl-button:visited' => array(
					'background-color' => '%1$s',
					'border-color'     => '%1$s',
				),
			),
			'rgba_css' => array(
				'a.fl-button:hover,
				a.fl-button:active,
				a.fl-button:focus,
				a.fl-button:visited:hover,
				a.fl-button:visited:active,
				a.fl-button:visited:focus,
				.content-area .fl-builder-content a.fl-button:hover,
				.content-area .fl-builder-content a.fl-button:active,
				.content-area .fl-builder-content a.fl-button:focus,
				.content-area .fl-builder-content a.fl-button:visited:hover,
				.content-area .fl-builder-content a.fl-button:visited:active,
				.content-area .fl-builder-content a.fl-button:visited:focus' => array(
					'background-color' => 'rgba(%1$s, 0.8)',
					'border-color'     => 'rgba(%1$s, 0.8)',
				),
			),
		),
		'button_text_color' => array(
			'css' => array(
				'a.fl-button
				a.fl-button:hover,
				a.fl-button:active,
				a.fl-button:focus,
				a.fl-button:visited,
				a.fl-button:visited:hover,
				a.fl-button:visited:active,
				a.fl-button:visited:focus,
				.content-area .fl-builder-content a.fl-button,
				.content-area .fl-builder-content a.fl-button *,
				.content-area .fl-builder-content a.fl-button:visited,
				.content-area .fl-builder-content a.fl-button:visited *' => array(
					'color' => '%1$s',
				),
			),
		),
	);

	return rock_array_replace_recursive( $colors, $bb_colors );

}
add_filter( 'rock_colors', 'rock_bb_colors' );
