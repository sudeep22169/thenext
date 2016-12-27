<?php

class TheNext_Random_Images_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'thenext-random-images',
			__( 'TheNext: Random Tile og Images', 'thenext' ),
			array(
				'description' => __( 'A simple title and subtitle widget.', 'thenext' ),
			),
			array(),
			array(
				'random_images' => array(
					'type' => 'repeater',
					'label' => __( 'Input Images.' , 'widget-form-fields-text-domain' ),
					'hide' => true,
					'fields' => array(
						'image' => array(
							'type' => 'media',
							'label' => __( 'Select Image', 'widget-form-fields-text-domain' )
							),
						'text' => array(
							'type' => 'text',
							'label' => __( 'Text Alternative', 'widget-form-fields-text-domain' )
							)
						)
					),

			)
		);
	}


	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'thenext-random-images', __FILE__, 'TheNext_Random_Images_Widget' );
