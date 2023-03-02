<?php
/**
 * Functions to add SiteOrigin Widget framework.
 *
 * @package Arkitekter
 */

// Define didget version
define( 'ARKITEKTER_WIDGET_VERSION', '1.0.0' );

// Define base widget folder url.
define( 'ARKITEKTER_WIDGET_FOLDER_URI', get_template_directory_uri() . '/inc/widgets/' );

// Define theme font.
define ( 'ARKITEKTER_WIDGET_FONTS', 'http://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i' );

/**
 * Add new widgets list.
 *
 * @return array
 */
function arkitekter_widgets_collection( $folders ) {
	// Get widgets folder.
	$folders[] = get_template_directory() . '/inc/widgets/';

	// Return folders list.
    return $folders;
}
add_filter( 'siteorigin_widgets_widget_folders', 'arkitekter_widgets_collection' );
