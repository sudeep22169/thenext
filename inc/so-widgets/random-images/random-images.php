<?php

class TheNext_Random_Images_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'thenext-random-images',
			__( 'TheNext: Random Tile og Images', 'thenext' ),
			array(
				'description' => __( 'A simple title and subtitle widget.', 'thenext' ),
			),
			array(),
			array(
				'random_images' => array(
					'type' => 'section',
					'label' => __( 'A section containing related fields.' , 'widget-form-fields-text-domain' ),
					'hide' => true,
					'fields' => array(
						'grouped_text' => array(
							'type' => 'text',
							'label' => __( 'A grouped text field', 'widget-form-fields-text-domain' )
							),
						'grouped_checkbox' => array(
							'type' => 'checkbox',
							'label' => __( 'A grouped checkbox', 'widget-form-fields-text-domain' )
							)
						)
					),

				'primary_title' => array(
					'type'  => 'text',
					'label' => __( 'Primary Title', 'thenext' ),
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

siteorigin_widget_register( 'thenext-random-images', __FILE__, 'TheNext_Random_Images_Widget' );
