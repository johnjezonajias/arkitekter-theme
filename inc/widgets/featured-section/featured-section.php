<?php
/**
 * Widget Name: Arkitekter Featured Section
 * Widget ID: arkitekter-featured-section
 * Author: Arkitekter
 * Author URI: http://2r-arkitekter.dk/
 */

class Featured_Section_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'arkitekter-featured-section',
			esc_html__( 'Arkitekter Featured Section', 'arkitekter' ),
			array(
				'description' => esc_html__( 'A custom widget for this theme.', 'arkitekter' )
			),
			array(),
			array(
				'title' => array(
					'type' 	=> 'text',
					'label' => esc_html__( 'Title', 'arkitekter' ),
				),
				'featured_image' => array(
			        'type' 		=> 'media',
			        'label' 	=> esc_html__( 'Choose Featured Image', 'arkitekter' ),
			        'choose' 	=> esc_html__( 'Choose image', 'arkitekter' ),
			        'update' 	=> esc_html__( 'Set image', 'arkitekter' ),
			        'library'	=> 'image'
			    ),
				'content_1' => array(
					'type' 	=> 'tinymce',
					'label' => esc_html__( 'Content for Column 1', 'arkitekter' ),
				),
				'column_number' => array(
			        'type' => 'select',
					'label' => esc_html__( 'Select Column', 'arkitekter' ),
			        'prompt' => esc_html__( 'Select number of columns.', 'widget-form-fields-text-domain' ),
			        'default' => 'column-1',
			        'options' => array(
			        	'column-1' => esc_html__( '1 Column Content', 'arkitekter' ),
			        	'column-2' => esc_html__( '2 Column Content', 'arkitekter' )
			        )
			    ),
			    'content_2' => array(
					'type' 	=> 'tinymce',
					'label' => esc_html__( 'Content for Column 2', 'arkitekter' ),
					'description' => esc_html__( 'Add text if you choose 2 columns.', 'arkitekter' )
				),
				'margin_btm' => array(
					'type' 	=> 'text',
					'label' => esc_html__( 'Margin Bottom', 'arkitekter' ),
					'description' => esc_html__( 'eg. 100px/10%', 'arkitekter' )
				),
			),
			ARKITEKTER_WIDGET_FOLDER_URI
		);
	}

	function initialize() {
		$this->register_frontend_scripts(
			array(
				array(
					'arkitekter-anchor-js',
					ARKITEKTER_WIDGET_FOLDER_URI . basename( dirname( __FILE__ ) ) . '/js/scripts.js',
					array( 'jquery' ),
					'',
					true
				)
			)
		);

		$this->register_frontend_styles(
			array(
				array(
					'arkitekter-fonts',
					ARKITEKTER_WIDGET_FONTS,
					array(),
					ARKITEKTER_WIDGET_VERSION
				),
				array(
					'arkitekter-featured-section',
					ARKITEKTER_WIDGET_FOLDER_URI . basename( dirname( __FILE__ ) ) . '/css/style.css',
					array(),
					ARKITEKTER_WIDGET_VERSION
				),
			)
		);
	}
}
siteorigin_widget_register( 'arkitekter-featured-section', __FILE__, 'Featured_Section_Widget' );
