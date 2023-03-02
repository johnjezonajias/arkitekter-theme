<?php
/**
 * Widget Name: Arkitekter Projekt Information Box
 * Widget ID: arkitekter-project-box
 * Author: Arkitekter
 * Author URI: http://2r-arkitekter.dk/
 */

class Project_Box_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'arkitekter-project-box',
			esc_html__( 'Arkitekter Projekt Information Box', 'arkitekter' ),
			array(
				'description' => esc_html__( 'A custom widget for this theme.', 'arkitekter' )
			),
			array(),
			array(
				'row-list' => array(
					'type' => 'repeater',
			        'label' => __( 'Detail Lists' , 'arkitekter' ),
			        'item_name'  => __( 'Details', 'arkitekter' ),
			        'fields' => array(
						'label' => array(
							'type' 	=> 'text',
							'label' => esc_html__( 'Label', 'arkitekter' ),
						),
						'text' => array(
							'type' 	=> 'textarea',
							'label' => esc_html__( 'Text', 'arkitekter' ),
						)
					)
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
					'arkitekter-project-box',
					ARKITEKTER_WIDGET_FOLDER_URI . basename( dirname( __FILE__ ) ) . '/css/style.css',
					array(),
					ARKITEKTER_WIDGET_VERSION
				),
			)
		);
	}
}
siteorigin_widget_register( 'arkitekter-project-box', __FILE__, 'Project_Box_Widget' );
