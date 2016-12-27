<?php
$allowed_html =  array(
     'strong' => array(),
	);
if( 'one' === $instance['style']):
?>
<div class="text-left">
    <?php if ( ! empty( $instance['primary_title'] ) ) : ?>
		<h5 class="lead-title"><?php echo wp_kses( $instance['primary_title'], $allowed_html); ?></h5>
    <?php endif; ?>
    <?php if ( ! empty( $instance['title_content'] ) ) : ?>
		<p class="lead-border-left border-black"><?php echo esc_attr( $instance['title_content'] );?></p>
    <?php endif; ?>
</div>
<?php else: ?>

<section class="col-xs-12 text-right">
    <?php if ( ! empty( $instance['primary_title'] ) ) : ?>
    <h4 class="lead-title lead-border-bottom border-black"><?php echo wp_kses( $instance['primary_title'], $allowed_html); ?></h4>
    <?php endif; ?>
    <?php if ( ! empty( $instance['title_content'] ) ) : ?>
  	<p><?php echo esc_attr( $instance['title_content'] );;?></p>
    <?php endif; ?>
  </section>
<?php endif;?>