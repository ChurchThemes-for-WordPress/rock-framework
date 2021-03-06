<?php
/**
 * Customizer Fonts functionality.
 *
 * @package Rock
 * @since   1.0.0
 */

class Rock_Customizer_Fonts {

	/**
	 * Array of available fonts.
	 *
	 * @since 1.0.0
	 *
	 * @var array
	 */
	protected $fonts = array();

	/**
	 * Array of available font types.
	 *
	 * @since 1.0.0
	 *
	 * @var array
	 */
	protected $font_types = array();

	/**
	 * Class constructor.
	 */
	public function __construct() {

		/**
		 * Filter the array of available fonts.
		 *
		 * @since 1.0.0
		 *
		 * @var array
		 */
		$this->fonts = (array) apply_filters( 'rock_fonts',
			array(
				'Architects Daughter',
				'Asap',
				'Cabin',
				'Droid Sans',
				'Droid Serif',
				'Josefin Sans',
				'Lato',
				'Merriweather',
				'Merriweather Sans',
				'Montserrat',
				'Open Sans',
				'Oswald',
				'Playfair Display',
				'PT Sans',
				'PT Serif',
				'Raleway',
				'Roboto',
				'Roboto Slab',
				'Source Sans Pro',
				'Source Serif Pro',
				'Ubuntu',
			)
		);

		if ( ! $this->fonts ) {

			return;

		}

		$this->fonts = array_unique( $this->fonts );

		sort( $this->fonts );

		/**
		 * Filter the array of available font types.
		 *
		 * @since 1.0.0
		 *
		 * @var array
		 */
		$this->font_types = (array) apply_filters( 'rock_font_types',
			array(
				'site_title_font' => array(
					'label'       => esc_html__( 'Site Title', 'rock' ),
					'description' => esc_html__( 'Site title text in the header.', 'rock' ),
					'default'     => 'Open Sans',
					'css'         => array(
						'.site-title' => array(
							'font-family' => '"%1$s", sans-serif',
						),
					),
				),
				'navigation_font' => array(
					'label'       => esc_html__( 'Navigation', 'rock' ),
					'description' => esc_html__( 'Primary menu links and button links.', 'rock' ),
					'default'     => 'Open Sans',
					'css'         => array(
						'.main-navigation ul li a, .main-navigation ul li a:visited,
						button, a.button, a.fl-button, input[type="button"], input[type="reset"], input[type="submit"]' => array(
							'font-family' => '"%1$s", sans-serif',
						),
					),
				),
				'heading_font' => array(
					'label'       => esc_html__( 'Headings', 'rock' ),
					'description' => esc_html__( 'Post titles, widget titles, form labels, and table headers.', 'rock' ),
					'default'     => 'Open Sans',
					'css'         => array(
						'h1, h2, h3, h4, h5, h6,
						label,
						legend,
						table th,
						dl dt,
						.entry-title,
						.widget-title' => array(
							'font-family' => '"%1$s", sans-serif',
						),
					),
				),
				'primary_font' => array(
					'label'       => esc_html__( 'Primary', 'rock' ),
					'description' => esc_html__( 'Paragraphs, lists, links, quotes, and tables.', 'rock' ),
					'default'     => 'Open Sans',
					'css'         => array(
						'body,
						p,
						ol li,
						ul li,
						dl dd,
						.fl-callout-text' => array(
							'font-family' => '"%1$s", sans-serif',
						),
					),
				),
				'secondary_font' => array(
					'label'       => esc_html__( 'Secondary', 'rock' ),
					'description' => esc_html__( 'Bylines, comment counts, reply links, post footers, and quote footers.', 'rock' ),
					'default'     => 'Open Sans',
					'css'         => array(
						'blockquote,
						.entry-meta,
						.entry-footer,
						.comment-list li .comment-meta .says,
						.comment-list li .comment-metadata,
						.comment-reply-link,
						#respond .logged-in-as' => array(
							'font-family' => '"%1$s", sans-serif',
						),
					),
				),
			)
		);

		if ( ! $this->font_types ) {

			return;

		}

		add_action( 'customize_register', array( $this, 'fonts' ), 11 );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_google_fonts' ), 11 );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_inline_css' ), 12 );

	}

	/**
	 * Register fonts section and settings.
	 *
	 * @action customize_registers
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Manager $wp_customize
	 */
	public function fonts( WP_Customize_Manager $wp_customize ) {

		if ( ! $this->fonts || ! $this->font_types ) {

			return;

		}

		$wp_customize->add_section(
			'fonts',
			array(
				'title'    => esc_html__( 'Fonts', 'rock' ),
				'priority' => 40,
			)
		);

		foreach ( $this->font_types as $name => $args ) {

			if ( empty( $name ) || empty( $args['default'] ) ) {

				continue;

			}

			$name = sanitize_key( $name );

			$wp_customize->add_setting(
				$name,
				array(
					'default'           => $args['default'],
					'sanitize_callback' => array( $this, 'sanitize_font' ),
				)
			);

			$fonts             = array_combine( $this->fonts, $this->fonts );
			$default           = $this->get_default_font( $name );
			$fonts[ $default ] = sprintf( esc_html_x( '%s (Default)', 'font name', 'rock' ), $default );

			$wp_customize->add_control(
				$name,
				array(
					'label'       => ! empty( $args['label'] ) ? $args['label'] : $name,
					'description' => ! empty( $args['description'] ) ? $args['description'] : null,
					'section'     => ! empty( $args['section'] ) ? $args['section'] : 'fonts',
					'priority'    => ! empty( $args['priority'] ) ? absint( $args['priority'] ) : null,
					'type'        => ! empty( $args['type'] ) ? $args['type'] : 'select',
					'choices'     => $fonts,
				)
			);

		}

	}

	/**
	 * Return a font by type.
	 *
	 * @since 1.0.0
	 *
	 * @param  string $font_type
	 *
	 * @return string
	 */
	public function get_font( $font_type ) {

		return $this->sanitize_font( get_theme_mod( $font_type, $this->get_default_font( $font_type ) ) );

	}

	/**
	 * Return the default font for a given font type.
	 *
	 * @since 1.0.0
	 *
	 * @param  string $font_type
	 *
	 * @return string
	 */
	public function get_default_font( $font_type ) {

		$defaults = array_combine(
			array_keys( $this->font_types ),
			wp_list_pluck( $this->font_types, 'default' )
		);

		$default = isset( $defaults[ $font_type ] ) ? $defaults[ $font_type ] : $this->fonts[0];

		return $this->sanitize_font( $default );

	}

	/**
	 * Sanitize a font.
	 *
	 * @since 1.0.0
	 *
	 * @param  string $font
	 *
	 * @return string
	 */
	public function sanitize_font( $font ) {

		return in_array( $font, $this->fonts ) ? $font : $this->fonts[0];

	}

	/**
	 * Return an array of weights for a font.
	 *
	 * @since 1.0.0
	 *
	 * @param  string $font
	 * @param  string $font_type
	 *
	 * @return array
	 */
	public function get_font_weights( $font, $font_type ) {

		/**
		 * Filter the array of weights for a font.
		 *
		 * @since 1.0.0
		 *
		 * @param string $font
		 * @param string $font_type
		 *
		 * @var array
		 */
		$weights = (array) apply_filters( 'rock_font_weights', array( 300, 400, 700 ), $font, $font_type );
		$weights = array_filter( array_map( 'absint', $weights ) );

		sort( $weights );

		return $weights;

	}

	/**
	 * Enqueue Google Fonts.
	 *
	 * @action wp_enqueue_scripts
	 * @since  1.0.0
	 */
	public function enqueue_google_fonts() {

		$font_families = array();

		foreach ( $this->font_types as $name => $args ) {

			if ( empty( $name ) ) {

				continue;

			}

			$font    = $this->get_font( $name );
			$weights = $this->get_font_weights( $font, $name );

			$font_families[ $font ] = isset( $font_families[ $font ] ) ? array_merge( $font_families[ $font ], $weights ) : $weights;

		}

		foreach ( $font_families as $font => &$weights ) {

			$weights = implode( ',', array_unique( $weights ) );
			$weights = sprintf( '%s:%s', $font, $weights );

		}

		$font_families = implode( '|', $font_families );

		/**
		 * Filter the Google Fonts query args.
		 *
		 * @since 1.0.0
		 *
		 * @var array
		 */
		$query_args = (array) apply_filters( 'rock_google_fonts_query_args',
			array(
				'family' => $font_families,
				'subset' => 'latin',
			)
		);

		wp_enqueue_style( Rock_Customizer::$stylesheet . '-fonts', add_query_arg( $query_args, '//fonts.googleapis.com/css' ), false );

	}

	/**
	 * Add inline CSS for the font customizations.
	 *
	 * @action wp_enqueue_scripts
	 * @since  1.0.0
	 */
	public function enqueue_inline_css() {

		foreach ( $this->font_types as $name => $args ) {

			if ( empty( $name ) || empty( $args['css'] ) ) {

				continue;

			}

			$css = sprintf(
				Rock_Customizer::parse_css_rules( $args['css'] ),
				$this->get_font( $name )
			);

			wp_add_inline_style( Rock_Customizer::$stylesheet . '-fonts', $css );

		}

	}

}

new Rock_Customizer_Fonts;
