<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thenext
 */

?>
	<div class="blog-header">                  
	<div class="blog-date col-xs-1 col-md-1"><?php echo get_the_date('d') ?> <i><?php echo get_the_date('M') ?></i></div>
	    <h5 class="blog-title col-xs-11 col-md-10">                  
	        <a href="<?php the_permalink();?>"><?php next_post_title();?></a>                  
	    </h5>        
	</div>
	<?php $author_id=$post->post_author; ?>
	<div class="blog-meta col-xs-12 col-md-10">          
	    <a href="<?php echo get_author_posts_url($author_id); ?>""><i class="icon icon-basic-pin2"></i> <?php echo the_author_meta(  'user_nicename' , $author_id ); ?> </a>
	    <a href="#"><i class="icon icon-basic-heart"></i> 24</a>
	    <a href="<?php comments_link(); ?>"><i class="icon icon-basic-message"></i><?php comments_number( '0', '1', '%' ); ?></a>
	</div>   
