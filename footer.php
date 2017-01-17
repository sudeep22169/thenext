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
		<li><a href="<?php echo esc_url();?>"><i class="fa fa-facebook"></i>Facebook</a></li>
		<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
		<li><a href="#"><i class="fa fa-dribbble"></i>Dribbble</a></li>
		<li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
	</ul>
</section>
	
	
      <footer class="col-xs-12 copyright dark-bg">
	    <div class="col-xs-12">
		  <div>theNEXT © 2016 - All rights reserved. </div>
	    </div>
      </footer>

</section>

<?php wp_footer(); ?>

</body>
</html>
