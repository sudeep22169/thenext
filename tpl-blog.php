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
					echo '<div class="entry col-md-12">';?>
						<article id="<?php the_ID('second-article');?>" <?php post_class("text-left block");?>><?php
								get_template_part( 'template-parts/content', get_post_format() );
						echo '</article>';
					echo '</div>';
					$count++;
			endwhile;
			echo '
				</div>
			</section>';
		endif; wp_reset_postdata();
	?>
		<section id="grid-list" class="more-padding"> 
		  
		  <div class="more-posts-row">
		    
			<div class="entry col-md-12">
			  <article id="second-article" class="text-left block">
			    <div class="blog-header">
			      
				<div class="blog-date col-xs-1 col-md-1">25 <i>Dec</i></div>

				<h5 class="blog-title col-xs-11 col-md-10">
				  
				      <a href="0">Why you should consider getting a new website?</a>
				  
				</h5>
				
			    </div>
			    
			    <div class="blog-meta col-xs-12 col-md-10">
			      
				  <a href="#"><i class="icon icon-basic-pin2"></i> S. Azimi</a>
				  <a href="#"><i class="icon icon-basic-heart"></i> 24</a>
				  <a href="#"><i class="icon icon-basic-message"></i> 8</a>
			    </div>
			    
			  </article>
			</div>
			
			
			<div class="entry col-md-6">
			  <article id="third-article" class="text-left block">
			    <div class="blog-header">
			      
				<div class="blog-date col-xs-1 col-md-1">18 <i>Nov</i></div>

				<h5 class="blog-title col-xs-11 col-md-10">
				  
				      <a href="0">TheNext: the best website of 2016</a>
				  
				</h5>
				
			    </div>
			    
			    <div class="blog-meta col-xs-12 col-md-10">
			      
				  <a href="#"><i class="icon icon-basic-pin2"></i> S. Azimi</a>
				  <a href="#"><i class="icon icon-basic-heart"></i> 24</a>
				  <a href="#"><i class="icon icon-basic-message"></i> 8</a>
				</div>

			      
			  </article>
			</div>
			
			<div class="entry col-md-6">
			  <article id="first-article" class="text-left block">
			    <div class="blog-header">
			      
				<div class="blog-date col-xs-1 col-md-1">25 <i>Dec</i></div>

				<h5 class="blog-title col-xs-11 col-md-10">
				  
				      <a href="0">Why you should consider getting a new website?</a>
				  
				</h5>
				
			    </div>
			    
			    <div class="blog-meta col-xs-12 col-md-10">
			      
				  <a href="#"><i class="icon icon-basic-pin2"></i> S. Azimi</a>
				  <a href="#"><i class="icon icon-basic-heart"></i> 24</a>
				  <a href="#"><i class="icon icon-basic-message"></i> 8</a>
			    </div>
			    
			  </article>
			</div>
			
			
			<div class="entry col-md-6">
			  <article id="forth-article" class="text-left block">
			    <div class="blog-header">
			      
				<div class="blog-date col-xs-1 col-md-1">18 <i>Nov</i></div>

				<h5 class="blog-title col-xs-11 col-md-10">
				  
				      <a href="0">TheNext: the best website of 2016</a>
				  
				</h5>
				
			    </div>
			    
			    <div class="blog-meta col-xs-12 col-md-10">
			      
				  <a href="#"><i class="icon icon-basic-pin2"></i> S. Azimi</a>
				  <a href="#"><i class="icon icon-basic-heart"></i> 24</a>
				  <a href="#"><i class="icon icon-basic-message"></i> 8</a>
				</div>

			      
			  </article>
			</div>
			<div class="entry col-md-6">
			  <article id="fifth-article" class="text-left block">
			    <div class="blog-header">
			      
				<div class="blog-date col-xs-1 col-md-1">18 <i>Nov</i></div>

				<h5 class="blog-title col-xs-11 col-md-10">
				  
				      <a href="0">TheNext: the best website of 2016</a>
				  
				</h5>
				
			    </div>
			    
			    <div class="blog-meta col-xs-12 col-md-10">
			      
				  <a href="#"><i class="icon icon-basic-pin2"></i> S. Azimi</a>
				  <a href="#"><i class="icon icon-basic-heart"></i> 24</a>
				  <a href="#"><i class="icon icon-basic-message"></i> 8</a>
				</div>

			      
			  </article>
			</div>
		    </div>
		</section>	
	</section>
</section>
<?php
get_footer();
