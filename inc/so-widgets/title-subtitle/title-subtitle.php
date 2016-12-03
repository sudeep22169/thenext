<?php

class TheNext_Title_Subtitle_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'thenext-title-subtitle',
			__( 'TheNext: Title with Subtitle', 'thenext' ),
			array(
				'description' => __( 'A simple title and subtitle widget.', 'thenext' ),
			),
			array(),
			array(
				'primary_title' => array(
					'type'  => 'text',
					'label' => __( 'Primary Title', 'thenext' ),
				),


				'title_content' => array(
					'type'  => 'textarea',
					'label' => __( 'Sub Title', 'thenext' ),
				),
				'style' => array(
					'type' => 'select',
					'label' => __( 'Select Style', 'this_thing' ),
					'default' => 'two',
					'options' => array(
						'one' => __( 'Style One', 'this_thing' ),
						'two' => __( 'Style Two', 'this_thing' ),
						)
					),

				'settings' => array(
					'type'   => 'section',
					'label'  => __( 'Color Settings', 'thenext' ),
					'hide' => true,
					'fields' => array(
						'color_primary_title' => array(
							'type'    => 'color',
							'label'   => __( 'Primary Title Color', 'thenext' ),
							'default' => '#fff',
						),
						'color_secondary_title' => array(
							'type'    => 'color',
							'label'   => __( 'Secondary Title Color', 'thenext' ),
							'default' => '#fff',
						),
						'color_title_content' => array(
							'type'    => 'color',
							'label'   => __( 'Content Color', 'thenext' ),
							'default' => '#fff',
						),
	    			),
				),

			)
		);
	}

	function get_style_name( $instance ) {

		return 'thenext-title';
	}

	function get_less_variables( $instance ) {

		$less_vars = array();
		if ( ! empty( $instance['settings']['color_primary_title'] ) ) {
			$less_vars['color_primary_title'] = $instance['settings']['color_primary_title'];
		}
		if ( ! empty( $instance['settings']['color_secondary_title'] ) ) {
			$less_vars['color_secondary_title'] = $instance['settings']['color_secondary_title'];
		}
		if ( ! empty( $instance['settings']['color_title_content'] ) ) {
			$less_vars['color_title_content'] = $instance['settings']['color_title_content'];
		}
		return $less_vars;
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'thenext-title-subtitle', __FILE__, 'TheNext_Title_Subtitle_Widget' );
