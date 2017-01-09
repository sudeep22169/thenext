<?php



class Fi_Print_Team_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(

			'fi-print-team',

			__( 'Fi Print: Team', 'fi-print' ),

			array(

				'description' => __('Display Team Details with Image ', 'fi-print' ),

				),

			array(),

			array(

				'style'=>  array(

							'type'  => 'select',

							'label' => __( 'Widget Style', 'fi-print' ),

							'options'=> array(

								'single' => __('Single row style', 'fi-print'),
								
								'grid' => __('Grid style', 'fi-print') ,

							), 

							'default' => 'single',

						),

				'team_repeater' => array(

					'type'  => 'repeater',

					'label' => __('Team Details.', 'fi-print'),

					'fields' => array(



						'team_title'=>  array(

							'type'  => 'media',

							'label' => __( 'Team Image', 'fi-print' )

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

siteorigin_widget_register('fi-print-team', __FILE__,'Fi_Print_Team_Widget');

