<?php
class TheNext_Team_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(

			'thenext-team',

			__( 'TheNext: Team', 'thenext' ),

			array(

				'description' => __('Display Team Details with Image ', 'thenext' ),

				),

			array(),

			array(

				'style' => array(

					'type' => 'select',

					'label' => __( 'Choose a Style ', 'thenext' ),

					'default'=> 'list-centered',

					'options'=> array(

						'slider' => __( 'Slider', 'thenext' ),

						'list-alternate' => __( 'Lists Alternate', 'thenext' ),

						'list-centered' => __( 'Lists Centered', 'thenext' )

						)
				),

				'background_color' => array(

					'type' => 'color',

					'label' => __( 'Background Color', 'thenext' ),

					'description' => __( 'Adds a background to member details section with opacity 0.8', 'thenext' )
				),

				'team_repeater' => array(

					'type'  => 'repeater',

					'label' => __('Team Details.', 'thenext'),

					'item_name' => __('Team Member', 'thenext'),

					'fields' => array(

						'member_image'=>  array(

							'type'  => 'media',

							'label' => __( 'Team Member Image', 'thenext' )

						),

						'member_name'=>  array(

							'type'  => 'textarea',

							'rows' => 5,

							'label' => __( 'Member Name', 'thenext' )

						),

						'member_designation'=>  array(

							'type'  => 'text',

							'label' => __( 'Member Designation', 'thenext' )

						),


						'member_description'=>  array(

							'type'  => 'textarea',

							'label' => __( 'Member Description', 'thenext' )

						),


						'member_social_link_one'=>  array(

							'type'  => 'section',

							'hide'  => true,

							'label' => __( 'First Site Details ', 'thenext' ),

							'fields' => array(

								'site_icon' => array(

									'type' => 'icon',

									'label' =>  __( 'Site Icon ', 'thenext' )

								),

								'site_link' => array(

									'type' => 'text',

									'label' =>  __( 'Site Link', 'thenext' )

								)

							)

						),

						'member_social_link_two'=>  array(

							'type'  => 'section',

							'hide'  => true,

							'label' => __( 'Second Site Details ', 'thenext' ),

							'fields' => array(

								'site_icon' => array(

									'type' => 'icon',

									'label' =>  __( 'Site Icon ', 'thenext' ),

								),

								'site_link' => array(

									'type' => 'text',

									'label' =>  __( 'Site Link', 'thenext' ),

								)

							)

						),

						'member_social_link_three'=>  array(

							'type'  => 'section',

							'hide'  => true,

							'label' => __( 'Third Site Details ', 'thenext' ),

							'fields' => array(

								'site_icon' => array(

									'type' => 'icon',

									'label' =>  __( 'Site Icon ', 'thenext' ),

								),

								'site_link' => array(

									'type' => 'text',

									'label' =>  __( 'Site Link', 'thenext' ),

								)

							)

						),
					),

				),
			)

		);
	}
	function get_template_name( $instance ) {
		$template_name = '';

		if( $instance['style'] == 'slider' ) {
			$template_name  = 'default';
		}
		elseif( $instance['style'] == 'list-centered') {
			$template_name = 'default_centered';
		}
		else {
			$template_name = 'default_alternate';
		}
		return $template_name;
	}
}
siteorigin_widget_register('thenext-team', __FILE__,'TheNext_Team_Widget');

