<?php
/**
 * Component for displaying page slider.
 *
 * @package Arkitekter
 */
?>

<?php if ( get_field( 'site_slider' ) ) echo '<div id="slider" class="site-slider">' . do_shortcode( get_field( 'site_slider' ) ) . '</div>'; ?>

<?php 
	if ( get_field( 'landing_slider' ) ) {
		echo '<div id="page-slider-wrap" class="page-slider">' . do_shortcode( get_field( 'landing_slider' ) ) . '</div>';
	} else {
		echo '<div id="page-slider-wrap"></div>';
	}
?>