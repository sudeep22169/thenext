<?php
$image = wp_get_attachment_image_src($instance['image'], 'full');
$title = $instance['title'];
$subtitle = $instance['subtitle'];
?>
<section id="banner-about-home" class="col-xs-12 banner-200" style="background-image: url('<?php echo $image[0]; ?>')">
	<section class="container">
		<section class="col-sm-12 banner-title">
		<?php if( !empty( $title) ) :?>
			<h1 class="title text-uppercase"><?php echo esc_attr( $title );?></h1>
		<?php endif; ?>	
		<?php if( !empty( $subtitle) ) :?>
			<span><?php echo esc_attr( $subtitle );?></span>
		<?php endif; ?>		
		</section>
	</section>
</section>