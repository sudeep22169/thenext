<?php

class Fi_Print_Testimonial_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'fi-print-testimonial',
			__( 'Fi Print: Simple Sliding Testimonial', 'fi-print' ),
			array(
				'description' => __('Fi Print Testimonial', 'fi-print' ),

				),
			array(),
			array(


				'testimonial_repeater' => array(
					'type'  => 'repeater',
					'label' => __('Testimonial Details.', 'fi-print'),
					'fields' => array(

						'testimonial_client_name'=>  array(
							'type'  => 'text',
							'label' => __( 'Client Name and Designation', 'fi-print' )
						),

						'testimonial_client_site'=>  array(
							'type'  => 'text',
							'label' => __( 'Testimonial Content', 'fi-print' )

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
siteorigin_widget_register('fi-print-testimonial', __FILE__,'Fi_Print_Testimonial_Widget');
