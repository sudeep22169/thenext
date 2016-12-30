<?php

class The_Next_Latest_Post_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'thenext-latest-post',
			__( 'TheNext: Latest Post', 'thenext' ),
			array(
				'description' => __('Display Latest Post', 'thenext' ),

				),
			array(),
			array(

				'title' => array(
					'type'  => 'text',
					'label' => __( 'widget Title', 'thenext' )
				),
				'sub_title' => array(
					'type'  => 'text',
					'label' => __( 'Widget Subtitle', 'thenext' )
				),

				'post_number'=> array(
					'type'  => 'text',
					'label' => __( 'Post Number', 'thenext' )

				),
				'post_style' => array(
					'type'     => 'select',
					'label'    => __( 'Post  Style', 'thenext' ),
					'default'  => 'one',
					'options'  => array(
						'one' => __( 'Style One', 'thenext' ),
						'two'  => __( 'Style Two', 'thenext' ),
					),
				),


			)
		);
	}
	function get_template_name($instance){
		return 'default';
	}

}
siteorigin_widget_register('thenext-latest-post', __FILE__,'The_Next_Latest_Post_Widget');
