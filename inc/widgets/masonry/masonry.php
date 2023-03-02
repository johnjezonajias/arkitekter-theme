<?php
/**
 * Widget Name: Arkitekter Masonry
 * Widget ID: arkitekter-masonry
 * Author: Arkitekter
 * Author URI: http://2r-arkitekter.dk/
 */

class Arkitekter_Masonry_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'arkitekter-masonry',
			esc_html__( 'Arkitekter Masonry', 'arkitekter' ),
			array(
				'description' => esc_html__( 'A custom widget for this theme.', 'arkitekter' )
			),
			array(),
			array(
				'masonry-list' => array(
					'type' => 'repeater',
			        'label' => __( 'Masonry List' , 'arkitekter' ),
			        'item_name'  => __( 'Masonry', 'arkitekter' ),
			        'fields' => array(
						'label_name' => array(
							'type' 	=> 'text',
							'label' => esc_html__( 'Label Name', 'arkitekter' ),
						),
						'article_date' => array(
							'type' 	=> 'text',
							'label' => esc_html__( 'Article Release Date', 'arkitekter' ),
						),
						'article_name' => array(
							'type' 	=> 'text',
							'label' => esc_html__( 'Article Name', 'arkitekter' ),
						),
						'link' => array(
							'type' 	=> 'link',
							'label' => esc_html__( 'Link', 'arkitekter' ),
						),
						'open_new_tab' => array(
					        'type' => 'checkbox',
					        'label' => esc_html__( 'Do you want to open url in new tab?', 'arkitekter' ),
					        'default' => false
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
					'arkitekter-masonry-js',
					ARKITEKTER_WIDGET_FOLDER_URI . basename( dirname( __FILE__ ) ) . '/js/masonry.min.js',
					array( 'jquery' ),
					'',
					true
				),
				array(
					'arkitekter-masonry-chocolat-js',
					ARKITEKTER_WIDGET_FOLDER_URI . basename( dirname( __FILE__ ) ) . '/js/lity.js',
					array( 'jquery' ),
					'',
					true
				),
				array(
					'arkitekter-masonry-main-js',
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
					'arkitekter-masonry-chocolat',
					ARKITEKTER_WIDGET_FOLDER_URI . basename( dirname( __FILE__ ) ) . '/css/lity.css',
					array(),
					ARKITEKTER_WIDGET_VERSION
				),
				array(
					'arkitekter-masonry',
					ARKITEKTER_WIDGET_FOLDER_URI . basename( dirname( __FILE__ ) ) . '/css/style.css',
					array(),
					ARKITEKTER_WIDGET_VERSION
				)
			)
		);
	}
}
siteorigin_widget_register( 'arkitekter-masonry', __FILE__, 'Arkitekter_Masonry_Widget' );
