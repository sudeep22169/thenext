<?php $rgb = thenext_hextorgb( $instance['background_color'] ); ?>
<style type="text/css">

    .transparent-team-bg {

    	<?php echo 'background:rgba('.$rgb['r'].', '.$rgb['g'].', '.$rgb['b'].', 0.8);';  ?>

    }
</style>
<section id="team" class="col-xs-12">
	<section class="container">
	  <!-- to have a numbered pagination carousel -->
	    <section class="one-col-team">
	    
	    <?php foreach ( $instance['team_repeater'] as  $i => $team_detail ) :

	    	$member_class = $i%2 == 0 ? 'col-sm-offset-3 col-md-8 col-md-offset-3' : 'col-sm-offset-1';

			$image_url = wp_get_attachment_image_src($team_detail['member_image'], 'full');
			?>
	    <!-- member 1 -->
	    <div class="col-xs-12 each-team <?php echo $i;?>">
		    <?php if( !empty( $image_url[0] ) && $i%2 == 0 ): ?>
		      <figure class="col-xs-6 col-sm-6 col-md-4">
			    <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php echo esc_attr(wp_strip_all_tags( $team_detail['member_name'], true ) );?>" class="img-responsive transition grayscale" />
		      </figure>
		    <?php endif; ?>  
	      
	        <div class="col-xs-6 col-sm-8 <?php echo $member_class; ?> transparent-team-bg member-info">

		      <?php if( !empty( $team_detail['member_name']) ): ?>
			    <h3 class="heading-sm"><?php echo wp_kses( $team_detail['member_name'] ); ?></h3>
			  <?php endif; ?>

			  <?php if( !empty( $team_detail['member_designation']) ): ?>
			    <span class="position-2"><?php echo esc_html($team_detail['member_designation'])?></span>
			  <?php endif; ?>

			  <?php if( !empty( $team_detail['member_description']) ): ?>
			    <p class="member-desc"><?php echo wp_kses($team_detail['member_description']);?></p>
			  <?php endif; ?>
		  	<?php if( !empty( $team_detail['member_social_link_one']['site_link'] ) || !empty( $team_detail['member_social_link_two']['site_link'] ) || !empty( $team_detail['member_social_link_three']['site_link'] ) ): ?>
			  <div class="social-icons">
				<?php if( !empty( $team_detail['member_social_link_one']['site_link'] ) ) {
					 echo '<a href="'.esc_url( $team_detail['member_social_link_one']['site_link'] ).'">'.siteorigin_widget_get_icon( $team_detail['member_social_link_one']['site_icon']).'</a>';
				}

				if( !empty( $team_detail['member_social_link_two']['site_link'] ) ) {
					 echo '<a href="'.esc_url( $team_detail['member_social_link_two']['site_link'] ).'">'.siteorigin_widget_get_icon( $team_detail['member_social_link_two']['site_icon']).'</a>';
				}

				if( !empty( $team_detail['member_social_link_three']['site_link'] ) ) {
					 echo '<a href="'.esc_url( $team_detail['member_social_link_three']['site_link'] ).'">'.siteorigin_widget_get_icon( $team_detail['member_social_link_three']['site_icon']).'</a>';
				}
				?>	 
			  </div>
			<?php endif;?>  
	        </div>

	        <?php if( !empty( $image_url[0] ) && $i%2 != 0 ): ?>
		      <figure class="col-xs-6 col-sm-6 col-sm-offset-6 col-md-4 col-md-offset-8">
			    <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php echo esc_attr(wp_strip_all_tags( $team_detail['member_name'], true ) );?>" class="img-responsive transition grayscale" />
		      </figure>
		    <?php endif; ?>  

	    </div>

	    <?php endforeach; ?>

	    </section>
    </section>
</section>

  

