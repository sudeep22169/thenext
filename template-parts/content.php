<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thenext
 */

?><?php $author_id=$post->post_author; ?>
 <article id="blog-post">
 	<div class="col-xs-12 text-left post-meta-details">		  
	    <ul class="col-sm-6">
	      <li><span class="icon icon-basic-calendar"></span><span><?php echo get_the_date('d F, Y') ?></span></li>
	      <li><span class="icon icon-basic-sheet-pencil"></span><span><?php echo the_author_meta(  'user_nicename' , $author_id ); ?></span></li>
	      
	    </ul>
	    <ul class="col-sm-6">
	      <li><span class="icon icon-basic-folder-multiple"></span><span><?php the_category( ' | ', '', $post->ID ); ?></span></li>
	      
	      <li><span class="icon icon-basic-bookmark"></span><span><?php echo get_the_tag_list( '',' | ', '', $post->ID ); ?></span></li>
	    </ul>
	</div>
	<div>
		  <?php the_content();?>
	</div>
	<div class="blog-meta col-xs-12 col-md-10">          
	    <a href="<?php echo get_author_posts_url($author_id); ?>""><i class="icon icon-basic-pin2"></i> <?php echo the_author_meta(  'user_nicename' , $author_id ); ?> </a>
	    <a href="#"><i class="icon icon-basic-heart"></i> 24</a>
	    <a href="<?php comments_link(); ?>"><i class="icon icon-basic-message"></i><?php comments_number( '0', '1', '%' ); ?></a>
	</div>  
	<?php 	$thumbnail = get_post_thumbnail_id($post->ID);
	        $img_url = wp_get_attachment_image_src( $thumbnail,'full');
	        $alt = get_post_meta($thumbnail, '_wp_attachment_image_alt', true);
	if($thumbnail):?>
		<figure>
		    <img src="<?php echo esc_url($img_url[0]);?>" alt="photo" class="<?php echo esc_attr($alt);?>">
		</figure> 
	<?php endif;?>
</article>
<section class="one-col-team col-xs-12 no-padding blog-post-author">
  <!-- right column -->
 <div class="col-xs-12 each-team">
  <figure class="col-xs-6 col-sm-6 col-md-4">
    <img src="images/team4.jpg" alt="team" class="img-responsive img-circle transition grayscale">    
  </figure>
 
  <div class="col-xs-6 col-sm-8 col-sm-offset-3 col-md-8 col-md-offset-3 transparent-white-bg member-info">

  <h3 class="heading-sm">Christina<span>Silvaroti</span></h3>
  <span class="position-2">Author</span>
 
  
  <p class="member-desc">Lorem ipsum dolor sit amet, sed ne rebum summo.
  Probo sonet id his, pro ut modo ipsum delicatissimi.
  Tantas persius alterum vis ea, eros duis est ad, te pri euismod alienum reprehendunt.
      
  </p>
  
  <div class="social-icons">
       <a href="#"><span class="fa fa-facebook"></span></a>
       <a href="#"><span class="fa fa-twitter"></span></a>
       <a href="#"><span class="fa fa-github"></span></a>
  </div>
  </div>
  
  
</div>
</section>