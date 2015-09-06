<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package rock
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<?php do_action( 'rock_body_inside' ); ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'rock' ); ?></a>

	<?php do_action( 'rock_header_before' ); ?>

	<header id="masthead" class="site-header header-constraint-<?php echo get_theme_mod( 'header_constraint', 'default' ); ?>" role="banner">

		<?php do_action( 'rock_header' ); ?>

	</header><!-- #masthead -->

	<?php do_action( 'rock_header_after' ); ?>

	<div id="content" class="site-content">
