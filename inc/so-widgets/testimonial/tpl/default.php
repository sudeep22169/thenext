<section id="quote-solid" class="col-xs-12 main-section-paddings light-bg">
<div class="container quote">
<span>"</span>
<section class="col-xs-10 col-xs-offset-2 col-sm-8 col-sm-offset-3 testi-carousel">
<?php   foreach ( $instance['testimonial_repeater'] as $testimonial_repeater ) : ?>
<div class="owl-item">
<?php if ( ! empty( $testimonial_repeater['testimonial_client_name'] ) ) : ?>
<p><?php echo esc_attr( $testimonial_repeater['testimonial_client_name'] );?></p>
<?php  endif;?>
<?php if ( ! empty( $testimonial_repeater['testimonial_client_site'] ) ) : ?>
<h4 class="lead thick lead-border-left border-black"><?php echo esc_attr( $testimonial_repeater['testimonial_client_site'] );?></h4>
<?php  endif;?>
</div>
<?php endforeach; ?>
</section>
</div>
</section>