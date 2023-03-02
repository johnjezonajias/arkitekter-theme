<?php
/**
 * Widget Name: Arkitekter Editor
 * Widget ID: arkitekter-editor
 * Author: Arkitekter
 * Author URI: http://2r-arkitekter.dk/
 */

class Arkitekter_Editor_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'arkitekter-editor',
			esc_html__( 'Arkitekter Editor', 'arkitekter' ),
			array(
				'description' => esc_html__( 'A custom widget for this theme.', 'arkitekter' )
			),
			array(),
			array(
				'title' => array(
					'type' 	=> 'text',
					'label' => esc_html__( 'Text', 'arkitekter' ),
				),
				'content' => array(
					'type' 	=> 'tinymce',
					'label' => esc_html__( 'Editor', 'arkitekter' ),
				)
			),
			ARKITEKTER_WIDGET_FOLDER_URI
		);
	}

	function initialize() {
		$this->register_frontend_styles(
			array(
				array(
					'arkitekter-fonts',
					ARKITEKTER_WIDGET_FONTS,
					array(),
					ARKITEKTER_WIDGET_VERSION
				),
				array(
					'arkitekter-editor',
					ARKITEKTER_WIDGET_FOLDER_URI . basename( dirname( __FILE__ ) ) . '/css/style.css',
					array(),
					ARKITEKTER_WIDGET_VERSION
				),
			)
		);
	}
}
siteorigin_widget_register( 'arkitekter-editor', __FILE__, 'Arkitekter_Editor_Widget' );
