<section class="col-xs-12 client-logo">
	<section class="container">

		<div class="transition col-sm-4 counter-container">
			<?php if( !empty( $instance['client_number'] ) ):?>
			<span class="counter project-counter"><?php echo esc_attr( $instance['client_number'] );?></span>
			<?php endif; ?>
			<?php if( !empty( $instance['client_text'] ) ):?>
			<span><?php echo esc_attr( $instance['client_text'] );?> </span>
			<?php endif; ?>

		</div>
		<div class="col-sm-7 col-sm-offset-1">
			<?php   foreach ( $instance['client_repeater'] as $client_repeater ):

       		$image_url = wp_get_attachment_image_src( $client_repeater['client_title'], 'full'); ?>

			<figure class="col-xs-6 col-md-4">
				<a href="<?php echo esc_url( $client_repeater['client_url']);?>"><img src="<?php echo esc_url( $image_url[0] );?>" class="img-responsive" alt="client"></a>
			</figure>

			<?php endforeach; ?>

			</div>
		</section>
</section>