<?php
if( 'thick' === $instance['primary_title_options'] ){
	$font_style = 'vthick';
}
else
{
	$font_style = '';
}
?>
<section class="container text-center">
	<div class="col-xs-12 col-sm-12 col-md-4 text-left">
		<?php if( !empty( $instance['primary_title'] ) ) :?>
		<h4 class="lead-title <?php echo esc_attr( $font_style ); ?> border-full"><?php echo esc_attr( $instance['primary_title'] ); ?></h4>
		<?php endif; ?>
	</div>
</section>
