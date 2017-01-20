<?php

class TheNext_Gallery_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'thenext-gallery-images',
			__( 'TheNext: Gallery of Images ', 'thenext' ),
			array(
				'description' => __( 'A simple gallery widget.', 'thenext' ),
			),
			array(),
			array(
				'gallery_images' => array(
					'type' => 'repeater',
					'label' => __( 'Select Images.' , 'thenext' ),
					'hide' => true,
					'fields' => array(
						'image' => array(
							'type' => 'media',
							'label' => __( 'Select Image', 'thenext' )
							),
						'text' => array(
							'type' => 'text',
							'label' => __( 'Text Alternative', 'thenext' )
							)
						)
					),

			)
		);
	}

	function initialize() {

        $this->register_frontend_scripts(
            array(
                array(
                    'thenext-lightgallerymin',
                   get_template_directory_uri() . '/assets/js/lightgallery.js',
                    array('jquery'),
                    20151215
                ),
            )
        );
        $this->register_frontend_scripts(
            array(
                array(
                    'thenext-lightslidermin',
                   get_template_directory_uri() . '/assets/js/lightslider.min.js',
                    array('jquery'),
                    20151215
                ),
            )
        );



        $this->register_frontend_styles(
            array(
                array(
                    'thenext-lightgallerymin',
                   get_template_directory_uri() . '/assets/css/lightgallery.min.css'

                ),
            )
        );


         $this->register_frontend_styles(array(
            array(
                'thenext-lightslidermin',
               get_template_directory_uri(). '/assets/css/lightslider.min.css'
            )
        ));

    }


	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'thenext-gallery-images', __FILE__, 'TheNext_Gallery_Widget' );
