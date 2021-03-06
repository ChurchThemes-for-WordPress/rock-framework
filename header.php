<?php
/**
 * The template for displaying the header.
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Rock
 * @since   1.0.0
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php
	/**
	 * Fires inside the `<body>` element.
	 *
	 * @since 1.0.0
	 */
	do_action( 'rock_body' );
	?>

	<div id="page" class="hfeed site">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rock' ); ?></a>

		<?php
		/**
		 * Fires before the `<header>` element.
		 *
		 * @since 1.0.0
		 */
		do_action( 'rock_before_header' );
		?>

		<header id="masthead" class="site-header" role="banner">

			<div class="site-header-wrapper">

				<?php
				/**
				 * Fires inside the `<header>` element.
				 *
				 * @since 1.0.0
				 */
				do_action( 'rock_header' );
				?>

			</div><!-- .site-header-wrapper -->

			<?php
			/**
			 * Fires inside the `<div class="site-header-wrapper">` element.
			 *
			 * @since 1.0.0
			 */
			do_action( 'rock_after_site_header_wrapper' );
			?>

		</header><!-- #masthead -->

		<!-- HERE I AM -->

		<?php
		/**
		 * Fires after the `<header>` element.
		 *
		 * @since 1.0.0
		 */
		do_action( 'rock_after_header' );
		?>

		<div id="content" class="site-content">
