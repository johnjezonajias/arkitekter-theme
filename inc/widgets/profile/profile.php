<?php
/**
 * Widget Name: Arkitekter Profile
 * Widget ID: arkitekter-profile
 * Author: Arkitekter
 * Author URI: http://2r-arkitekter.dk/
 */

class Profile_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'arkitekter-profile',
			esc_html__( 'Arkitekter Profile', 'arkitekter' ),
			array(
				'description' => esc_html__( 'A custom widget for this theme.', 'arkitekter' )
			),
			array(),
			array(
				'name' => array(
					'type' 	=> 'text',
					'label' => esc_html__( 'Name', 'arkitekter' ),
				),
				'image' => array(
			        'type' 		=> 'media',
			        'label' 	=> esc_html__( 'Choose An Image', 'arkitekter' ),
			        'choose' 	=> esc_html__( 'Choose image', 'arkitekter' ),
			        'update' 	=> esc_html__( 'Set image', 'arkitekter' ),
			        'library'	=> 'image',
			        'fallback' 	=> true
			    ),
				'role' => array(
					'type' 	=> 'text',
					'label' => esc_html__( 'Role', 'arkitekter' ),
				),
				'phone' => array(
					'type' 	=> 'text',
					'label' => esc_html__( 'Phone', 'arkitekter' ),
				),
				'email' => array(
					'type' 	=> 'text',
					'label' => esc_html__( 'Email', 'arkitekter' ),
				),
				'cv' => array(
					'type' 	=> 'media',
					'label' 	=> esc_html__( 'Choose A File', 'arkitekter' ),
					'description' => esc_html__( 'eg. .PDF or .docx filetype.', 'arkitekter' ),
			        'choose' 	=> esc_html__( 'Choose file', 'arkitekter' ),
			        'update' 	=> esc_html__( 'Set file', 'arkitekter' ),
			        'library' => 'application',
			        'fallback' 	=> true
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
					'arkitekter-profile',
					ARKITEKTER_WIDGET_FOLDER_URI . basename( dirname( __FILE__ ) ) . '/css/style.css',
					array(),
					ARKITEKTER_WIDGET_VERSION
				),
			)
		);
	}
}
siteorigin_widget_register( 'arkitekter-profile', __FILE__, 'Profile_Widget' );
