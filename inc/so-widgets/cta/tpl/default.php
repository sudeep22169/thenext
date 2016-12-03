<section class="section-xs bg-img">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-9">
				<header class="section-header border-left m-b-0">

					<?php 
					$allowed_html = array(
						'mark' => array()
						);
						?> 
						<h3><?php echo  wp_kses($instance['primary_title'], $allowed_html); ?></h3> 
						<small><?php echo esc_html( $instance['secondary_title'] ); ?></small>
					</header>
				</div>

				<div class="col-xs-12 col-md-3 text-xs-right m-t-1">
					<p><a <?php echo esc_attr($instance['target']?'target="_blank"':'');?> class="btn btn-lg btn-secondary-only" href="<?php echo esc_url( $instance['btnurl'] ); ?>"><?php echo esc_attr( $instance['btntext'] ); ?></a></p>
				</div>
			</div>
		</div>
	</section>