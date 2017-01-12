<?php
/**
 * Template Name: Blog Page
 */

get_header(); 
query_posts('post_type=post&post_status=publish&order=ASC&paged='. get_query_var('paged'));?>
<section id="blog-list" class="col-xs-12 main-section-margins">
	<section class="container text-center">
	<?php $count=1;
		if(have_posts()):
			echo '
			<section id="grid-list" class="more-padding"> 			  
			  	<div class="more-posts-row">';
				while(have_posts()):
					the_post();
					echo '<div class="entry col-md-12">';
						do_action('blog_listing',$arg=get_the_ID(),10,1);						
					echo '</div>';
					$count++;
			endwhile;
			echo '
				</div>
			</section>';
		endif; wp_reset_postdata();
	?>	
	</section>
</section>
<?php
get_footer();
