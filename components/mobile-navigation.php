<?php
/**
 * Component for displaying mobile navigation.
 *
 * @package Arkitekter
 */
?>

<div class="hmenu-wrapper">
	<button class="hamburger hamburger--emphatic" type="button">
	  <span class="hamburger-box">
	    <span class="hamburger-inner"></span>
	  </span>
	</button>
</div>

<nav id="mobile-navigation" class="mobile-navigation" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'mobile-menu', 'depth' => 3 ) ); ?>
</nav><!-- #mobile-navigation -->
