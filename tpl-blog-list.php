<?php
/**
 * Template Name: List Blog Page
 */

get_header(); 
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$args = array(
	'posts_per_page' => get_option('posts_per_page'),
	'post_type' => 'post',
	'paged' => $paged,
);
$the_query = new WP_Query( $args );?>
	<?php $count=1;
		if($the_query->have_posts()):
			echo '				
		<section id="blog-list" class="col-xs-12 main-section-margins">	
			<section class="container text-center">
				<section id="grid-list" class="more-padding"> 			  
				  	<div class="blog-list-row">';
					while($the_query->have_posts()):
						$the_query->the_post();?>
						<div class="entry"><?php
						/**
						 * Hook - blog_listing.
						 *
						 * @hooked: blog_listing - 10
						 */
							do_action('blog_listing',get_the_ID(),$count,$post,'list',10,2);	?>					
						</div><?php
						$count++;
				endwhile;echo '
					</div>
				</section>
			</section>
		</section>
			';?>
		<section class="container page-pagination main-section-paddings">	
			<div class="col-xs-8 col-sm-3">
				<a href="index01.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="List"><i class="icon icon-arrows-squares transition"></i></a>
				<a href="index01.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Random"><i class="icon icon-arrows-rotate transition"></i></a>
	
      		</div>
			<div class="col-xs-8 col-sm-6 text-center">
				<nav>
					<?php $big = 999999999; 
					$paginate_links =paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $the_query->max_num_pages,
					'next_text'=>'',
					'prev_text'=>'',
					'type'      => 'array'
					) );
					if ( ! empty( $paginate_links ) ) : ?>
						<ul class="pagination">
							<?php foreach ( $paginate_links as $key => $page_link ) : ?>
								<li class="<?php if ( strpos( $page_link, 'current' ) !== false ) { echo ' active'; } ?>"><span><?php echo $page_link ?></span></li>
							<?php endforeach ?>
						</ul>
					<?php endif ?>	      
				</nav>
			</div>
      		<div class="col-xs-8 col-sm-3 text-right">
				<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Prev"><i class="icon icon-arrows-slim-left transition"></i></a>
				<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Next"><i class="icon icon-arrows-slim-right transition"></i></a>
      		</div>
    	</section><?php
	endif; wp_reset_postdata();
	?>	
<?php
get_footer();
