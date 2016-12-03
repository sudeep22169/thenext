<?php

class Fi_Print_Banner_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'thenext-banner',
			__( 'TheNext: Banner', 'thenext' ),
			array(
				'description' => __( 'A simple banner widget with image and title.', 'thenext' ),
			),
			array(),
			array(
				'image' => array(
					'type'  => 'media',
					'label' => __( 'Banner Title', 'thenext' ),
				),

				'title' => array(
					'type'  => 'text',
					'label' => __( 'Banner Title', 'thenext' ),
				),

				'subtitle' => array(
					'type'  => 'text',
					'label' => __( 'Secondary Subtitle', 'thenext' ),
				),

			)
		);
	}



	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'thenext-banner', __FILE__, 'Fi_Print_Banner_Widget' );
