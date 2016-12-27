<!-- PROGRESS BARS -->
<section class="progress-bars col-xs-12 col-sm-8 col-sm-offset-2">
	<div class="vc-text">

		<?php
		if( !empty( $instance['skill_repeater'] ) ) :

		foreach ($instance['skill_repeater']as $progress ) :
		?>
		<section class="progress custom-progress">
			<div class="progress-bar progress-bar-alt text-uppercase" role="progressbar" aria-valuenow="<?php echo esc_attr( $progress['skill_percent'])?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_attr( $progress['skill_percent'])?>%">
				<h5 class="gray-text"><?php if( !empty( $progress['skill_title']) ) echo esc_attr( $progress['skill_title']);?> </h5>
			</div>
		</section>

	<?php endforeach; ?>
<?php endif; ?>
</div>

</section>

