<?php

class TheNext_Services_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'the-next-services',
			__( 'TheNext: Services with Icon', 'the-next' ),
			array(
				'description' => __('The Next Services', 'the-next' ),

				),
			array(),
			array(

				'services_repeater' => array(
					'type'  => 'repeater',
					'label' => __('Services Details.', 'the-next'),
					'fields' => array(
						'image' => array(
							'type'  => 'icon',
							'label' => __( 'Select Services Image', 'the-next' )
						),
						'title' => array(
							'type'  => 'text',
							'label' => __( 'Services Title', 'the-next' )
						),
						'sub_title' => array(
							'type'  => 'text',
							'label' => __( 'Services Subtitle', 'the-next' )
						),

					),
				),

			)
		);
	}
	function get_template_name($instance){
		return 'default';
	}

}
siteorigin_widget_register('the-next-services', __FILE__,'TheNext_Services_Widget');
