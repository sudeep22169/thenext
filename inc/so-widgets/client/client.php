<?php
class TheNext_Client_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'thenext-client',
			__( 'TheNext: Client', 'thenext' ),
			array(
				'description' => __('Display Client Logos', 'thenext' ),
				),
			array(),
			array(

				'client_repeater' => array(
					'type'  => 'repeater',
					'label' => __('Client Details.', 'thenext'),
					'fields' => array(
						'client_title'=>  array(
							'type'  => 'media',
							'label' => __( 'Client Image', 'thenext' )
						),
						'client_url'=>  array(
							'type'  => 'text',
							'label' => __( 'Client URL', 'thenext' )
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
siteorigin_widget_register('thenext-client', __FILE__,'TheNext_Client_Widget');
