<?php
/**
 * Component for displaying main navigation.
 *
 * @package Arkitekter
 */
?>

<nav id="site-navigation" class="main-navigation" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->
