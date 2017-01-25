<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package thenext
 */

get_header(); ?>

<section id="primary" class="col-xs-12 main-section-margin-top">
	<section class="container" role="main">
		<div id="blog-post-container" class="col-xs-12 col-md-8">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
	</section><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
