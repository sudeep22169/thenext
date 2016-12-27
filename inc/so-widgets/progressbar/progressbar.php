<?php

class Fi_Print_Progress_Bar_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'thenext-progressbar',
			__( 'TheNext: Progress Bar', 'thenext' ),
			array(
				'description' => __('TheNext Progress_Bar', 'thenext' ),

				),
			array(),
			array(


				'skill_repeater' => array(
					'type'  => 'repeater',
					'label' => __('Progress Bar Details.', 'thenext'),
					'fields' => array(

						'skill_title'=>  array(
							'type'  => 'text',
							'label' => __( 'Progress Bar Title', 'thenext' )
						),

						'skill_percent'=>  array(
							'type'  => 'text',
							'label' => __( 'Progress Bar Percent', 'thenext' )

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
siteorigin_widget_register('thenext-progressbar', __FILE__,'Fi_Print_Progress_Bar_Widget');
