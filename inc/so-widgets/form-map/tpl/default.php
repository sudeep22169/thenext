<?php 

$latitude= esc_attr($instance['latitude']);

$longitude= esc_attr($instance['longitude']);

$marker_url=wp_get_attachment_image_src( $instance['marker'], 'full');

$description=wp_kses_post($instance['description']);

$shortcode=$instance['contact_form'];

?>

<section class="form-map">

<?php  echo do_shortcode($shortcode);?>

<div id="contact-map" style="height: 500px"></div>

</section>
<?php
// Register the script
wp_register_script( 'some_handle', get_template_directory_uri().'/assets/js/myscript.js' );

// Localize the script with new data
$translation_array = array(
    'google_api' => esc_attr($instance['google_api'], 'fi-print' ),
    'latitude' => esc_attr( $latitude , 'fi-print' ),
    'longitude' => esc_attr( $longitude , 'fi-print' ),
    'marker_url' => esc_attr( $marker_url[0] , 'fi-print' ),
    'description' => esc_attr( $description, 'fi-print' ),
    'a_value' => '10'
);
wp_localize_script( 'some_handle', 'object_name', $translation_array );

// Enqueued script with localized data.
wp_enqueue_script( 'some_handle' );
