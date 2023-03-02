<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arkitekter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page-wrapper" class="site <?php if( is_front_page() ): echo 'home-page'; elseif( is_single() ): echo 'single-page'; else: echo 'inner-page'; endif; ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'arkitekter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrap">
			<?php get_template_part( 'components/site', 'branding' ); ?>
			<?php get_template_part( 'components/main', 'navigation' ); ?>
			<?php get_template_part( 'components/mobile', 'navigation' ); ?>
		</div>
	</header><!-- #masthead -->

	<?php get_template_part( 'components/site', 'slider' ); ?>

	<?php if( ! is_front_page() ) : ?>
		<div id="content" class="site-content">
			<div class="wrap">
	<?php endif; ?>
