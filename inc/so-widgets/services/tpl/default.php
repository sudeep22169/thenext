<?php
// var_dump($instance['services_repeater']);
?>
<section id="home-services" class="col-xs-12 minimal-block services">
	<section class="container">
		<?php   foreach ( $instance['services_repeater'] as $services_detail ) :
			$image_url = wp_get_attachment_image_src($services_detail['image'], 'full'); ?>
			<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0 text-left">
				<?php if ( ! empty( $services_detail['title'] ) ) : ?>
					<h4 class="lead-title black">
					<span class="icon icon-border">
					<?php echo siteorigin_widget_get_icon( $services_detail['image'])?>
					</span>
					<?php echo esc_attr( $services_detail['title'] );   ?>
					</h4>
				<?php endif; ?>
				<?php if ( ! empty( $services_detail['sub_title'] ) ) : ?>
					<p class="subtitle"><?php echo esc_attr($services_detail['sub_title']) ; ?></p>
				<?php endif ?>
				</div>
			<?php endforeach; ?>
	</section>
</section>