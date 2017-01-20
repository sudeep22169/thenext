<?php
if( 'thick' === $instance['primary_title_options'] ){
	$font_style = 'vthick';
}
else
{
	$font_style = '';
}
?>
<section class="text-<?php echo esc_attr( $instance['text_align']);?>">
	<div class="col-xs-12 col-sm-12">
		<?php if( !empty( $instance['primary_title'] ) ) :?>
		<h4 class="lead-title <?php echo esc_attr( $font_style ); ?> border-full"><?php echo esc_attr( $instance['primary_title'] ); ?></h4>
		<?php endif; ?>
	</div>
</section>
