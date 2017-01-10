<?php

$post_number = esc_attr( $instance['post_number'] );
$qargs = array(
'posts_per_page' => (isset( $post_number ) ? $post_number : -1),
'no_found_rows'  => true,
);
$all_posts = get_posts( $qargs );
?>
<section id="blog-list" class="col-xs-12 main-section-margins">
	<section class="container text-center">
		<section id="grid-list" class="more-padding">
			<div class="blog-list-row">
					<?php global $post;  $i = 1; ?>
					<?php foreach ( $all_posts as $key => $post ) :
					setup_postdata( $post );
					$img_url                  = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full'); //get img
					$src                      = aq_resize( $img_url[0], $width = 1110, $height = 270, $crop = true, $single = true, $upscale = true );
					$formatted_post_date      = get_the_date( $format, $post->ID);
					$month_with_three_letters = substr($formatted_post_date, 0, 3 );
					$archive_day              = get_the_time('d');
					if( $i == 1): ?>
					<div class="entry">
						<article id="first-article" class="text-left block latest-post" style="background: url('<?php echo $src ?>');">
							<div class="blog-header col-xs-12">
								<div class="blog-date col-xs-1 col-md-1"><?php echo esc_attr(  $archive_day ); ?> <i><?php echo esc_attr( $month_with_three_letters );?></i></div>
								<h5 class="blog-title col-xs-11 col-md-9">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h5>
							</div>
							<div class="blog-meta col-xs-12 col-md-10">
								<a href="#"><i class="icon icon-basic-pin2"></i><?php the_author(); ?></a>
								<a href="#"><i class="icon icon-basic-heart"></i> 24</a>
								<a href="#"><i class="icon icon-basic-message"></i> 8</a>
							</div>
						</article>
					</div>
				<?php endif;?>
				<div class="entry col-md-6">
		  			<article id="second-article" class="text-left block" style="background: url('<?php echo $src ?>');">
		    			<div class="blog-header">
							<div class="blog-date col-xs-1 col-md-1"><?php echo esc_attr(  $archive_day ); ?> <i><?php echo esc_attr( $month_with_three_letters );?></i></div>
								<h5 class="blog-title col-xs-11 col-md-10">
								      <a href="0"><?php the_title(); ?></a>
								</h5>
		    			</div>
					    <div class="blog-meta col-xs-12 col-md-10">
						  	<a href="<?php the_permalink(); ?>"><i class="icon icon-basic-pin2"></i><?php the_author(); ?></a>
						  	<a href="#"><i class="icon icon-basic-heart"></i> 24</a>
						  	<a href="#"><i class="icon icon-basic-message"></i> 8</a>
					    </div>

		  			</article>
				</div>
				<?php $i++; endforeach; ?>
			</div>
		</section>
	</section>
</section>