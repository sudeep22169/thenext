<?php

class Fi_Print_Title_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'thenext-title',
			__( 'TheNext: Title', 'thenext' ),
			array(
				'description' => __( 'A simple title and subtitle widget.', 'thenext' ),
			),
			array(),
			array(
				'primary_title' => array(
					'type'  => 'text',
					'label' => __( 'Primary Title', 'thenext' ),
				),
				'primary_title_options' => array(
					'type' => 'select',
					'label' => __( 'Choose Title style', 'thenext' ),
					'default' => 'the_other_thing',
					'options' => array(
						'thick' => __( 'Thick', 'thenext' ),
						'thin' => __( 'Thin', 'thenext' ),
					)
				),

				'secondary_title' => array(
					'type'  => 'text',
					'label' => __( 'Secondary Title', 'thenext' ),
				),

				'title_content' => array(
					'type'  => 'textarea',
					'label' => __( 'Sub Title', 'thenext' ),
				),
				'text_align' => array(
					'type' => 'select',
					'label' => __( 'Text Align', 'thenext' ),
					'default' => 'center',
					'options' => array(
						'right' => __( 'Right', 'thenext' ),
						'left' => __( 'Left', 'thenext' ),
						'center' => __( 'Center', 'thenext' ),
						)
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

siteorigin_widget_register( 'thenext-title', __FILE__, 'Fi_Print_Title_Widget' );
