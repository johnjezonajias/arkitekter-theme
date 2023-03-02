<?php
/**
 * Widget Name: Arkitekter Sort
 * Widget ID: arkitekter-sort
 * Author: Arkitekter
 * Author URI: http://2r-arkitekter.dk/
 */

class Arkitekter_Sort_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'arkitekter-sort',
			esc_html__( 'Arkitekter Sort', 'arkitekter' ),
			array(
				'description' => esc_html__( 'A custom widget for this theme.', 'arkitekter' )
			),
			array(),
			array(
				'sort-list' => array(
					'type' => 'repeater',
			        'label' => __( 'Sort List' , 'arkitekter' ),
			        'item_name'  => __( 'Sort Item', 'arkitekter' ),
			        'fields' => array(
						'title' => array(
							'type' 	=> 'text',
							'label' => esc_html__( 'Title', 'arkitekter' ),
						),
						'description' => array(
							'type' 	=> 'text',
							'label' => esc_html__( 'Description', 'arkitekter' ),
						),
						'link' => array(
							'type' 	=> 'link',
							'label' => esc_html__( 'Link', 'arkitekter' ),
						),
						'sort_category' => array(
					        'type' => 'select',
					        'multiple' => true,
							'label' => esc_html__( 'Select Sort Category', 'arkitekter' ),
					        'prompt' => esc_html__( 'Select sort category.', 'widget-form-fields-text-domain' ),
					        'default' => 'skoler-institutioner',
					        'options' => array(
					        	'skoler-institutioner' => esc_html__( 'Skoler & Institutioner', 'arkitekter' ),
					        	'bolig' => esc_html__( 'Bolig', 'arkitekter' ),
					        	'erhverv' => esc_html__( 'Erhverv', 'arkitekter' )
					        )
					    ),
						'image' => array(
					        'type' 		=> 'media',
					        'label' 	=> esc_html__( 'Choose An Image', 'arkitekter' ),
					        'choose' 	=> esc_html__( 'Choose image', 'arkitekter' ),
					        'update' 	=> esc_html__( 'Set image', 'arkitekter' ),
					        'library'	=> 'image',
					        'fallback' 	=> true
					    )
					)
				)
			),
			ARKITEKTER_WIDGET_FOLDER_URI
		);
	}

	function initialize() {
		$this->register_frontend_scripts(
			array(
				array(
					'arkitekter-isotope-js',
					ARKITEKTER_WIDGET_FOLDER_URI . basename( dirname( __FILE__ ) ) . '/js/isotope.pkgd.min.js',
					array( 'jquery' ),
					'',
					true
				),
				array(
					'arkitekter-sort-js',
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
					'arkitekter-sort',
					ARKITEKTER_WIDGET_FOLDER_URI . basename( dirname( __FILE__ ) ) . '/css/style.css',
					array(),
					ARKITEKTER_WIDGET_VERSION
				)
			)
		);
	}
}
siteorigin_widget_register( 'arkitekter-sort', __FILE__, 'Arkitekter_Sort_Widget' );
