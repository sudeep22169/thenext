<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thenext
 */
global $next_options;
?>
</section><!--header section-->
	<section id="section-footer" class="col-xs-12">

  <div class="container">
      <?php get_template_part( 'partials/footer-layout'); ?>      
 </div>      
      
<section class="col-xs-12 footer-widget widget-social widget-social-h text-center">
	<ul>
	<?php if(!empty($next_options['next_facebook'])):?>
		<li><a href="<?php echo esc_url($next_options['next_facebook']);?>" target="_blank"><i class="fa fa-facebook"></i><?php esc_html_e('Facebook','next');?></a></li>
	<?php endif;if(!empty($next_options['next_twitter'])):?>
		<li><a href="<?php echo esc_url($next_options['next_twitter']);?>" target="_blank"><i class="fa fa-twitter"></i><?php esc_html_e('Twitter','next');?></a></li>
	<?php endif;if(!empty($next_options['next_dribbble'])):?>
		<li><a href="<?php echo esc_url($next_options['next_dribbble']);?>" target="_blank"><i class="fa fa-dribbble"></i><?php esc_html_e('Dribbble','next');?></a></li>
	<?php endif;if(!empty($next_options['next_instagram'])):?>
		<li><a href="<?php echo esc_url($next_options['next_instagram']);?>" target="_blank"><i class="fa fa-instagram"></i><?php esc_html_e('Instagram','next');?></a></li>
	<?php endif;?>
	</ul>
</section>	
<?php  if(!empty($next_options['next_footer_text'])):?>	
	<footer class="col-xs-12 copyright dark-bg">
		<div class="col-xs-12">
		  <div><?php echo esc_attr($next_options['next_footer_text']);?></div>
		</div>
	</footer>
<?php endif;?>
</section>

<?php wp_footer(); ?>

</body>
</html>
