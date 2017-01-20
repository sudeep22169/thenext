<section id="content-about" class="col-xs-12 main-section-margin-bottom">
	<section class="container">
		<section class="col-xs-12 col-lg-7">
			<ul id="lightSlider2">
				<?php
				$i = 1;
				foreach ( $instance['gallery_images'] as $image ){
					$image_url = wp_get_attachment_image_src( $image['image'], 'full');

					?>

					<li data-thumb="<?php echo esc_url( $image_url[0]) ?>" data-src="<?php echo esc_url( $image_url[0]) ?>">
						<img src="<?php echo esc_url( $image_url[0]) ?>" class="img-responsive" alt=" " />
					</li>
					<?php $i++;  } ?>

				</ul>
		</section>
	</section>
</section>

