<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thenext
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">	
<?php wp_head(); ?>
</head>
<?php global $next_options;
if($next_options['search']==1 && isset($next_options['search']) && $next_options['header-style']!="hamburger"){
	add_filter('wp_nav_menu_items','next_add_search_box_to_menu', 10, 2);
}?>
<body <?php body_class(); ?>>

<?php if ( isset( $next_options['preloader'] )  && $next_options['preloader'] == 1 ) : ?>
		 <!-- page loader -->
	<div id="loader-container">
	  <div class="clear-loading loading-effect-3">
	      <div><span></span></div>
	  </div>
	</div>
<?php endif ;
$header_style=(isset($next_options['header-style']) && $next_options['header-style']=="hamburger")?'transparent':$next_options['header-style'];
?>
<header id="section-header" class="navbar-fixed-top transition page-header page-header-<?php echo esc_attr($header_style);?>">
	<?php if($next_options['header-style']!="hamburger"):?>
	<section class="container">
		<div class="navbar-header">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if($next_options['logo']['url']!=""):?>
	                <img src="<?php echo esc_url($next_options['logo']['url']);?>" data-at2x="<?php echo esc_url($next_options['retina']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo">
	            <?php else:?>
	                <?php bloginfo( 'name' ); ?>
	            <?php endif;?>
			</a>
			<button id="openMenuMobile" class="menu-icon icon-left" data-toggle="collapse" data-target=".navHeaderCollapse">
			      <span class="icon icon-arrows-hamburger1 transition"></span>
			</button>
		</div>
			<!-- Collect the nav links for toggling -->
	    <nav class="collapse navbar-collapse navHeaderCollapse">
			<?php
	            wp_nav_menu( array(
	            'theme_location'    => 'primary',
	            'container'         => '',
	            'container_class'   => '',
	            'container_id'      => 'bs-example-navbar-collapse-1',
	            'menu_class'        => 'nav navbar-nav navbar-right transition',
	            'fallback_cb'       => 'next_bootstrap_navwalker::fallback',
	            'walker'            => new next_bootstrap_navwalker())
	            );
	        ?>      
			<!-- end of mega menu -->		
	    </nav><!-- /.navbar-collapse -->		
    </section>
	<?php else:?>
		<section class="container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if($next_options['logo']['url']!=""):?>
	                <img src="<?php echo esc_url($next_options['logo']['url']);?>" data-at2x="<?php echo esc_url($next_options['retina']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo">
	            <?php else:?>
	                <?php bloginfo( 'name' ); ?>
	            <?php endif;?>
			</a>
			<span id="openMenu" class="menu-icon">
				<i class="icon icon-arrows-hamburger1"></i>
				<span class="menu-name"><?php _e('Menu','next');?></span>
		    </span>
	    </section>
	    <nav class="menu-container menu-container-top" id="menu">
        
			<div id="closeMenu" class="text-left col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-4">
			  <span class="icon icon-arrows-remove transition"></span>
			</div>
			
			<div class="vc-text">   
			  <!-- first column on the left -->
			  <div class="menu-title col-xs-2 col-sm-3 col-md-4">
			    <span><?php _e('home','next');?></span>
			     
			  </div>
			  	<div class="col-xs-10 col-sm-9 col-md-8 menu-list">
				  <?php
		            wp_nav_menu( array(
		            'theme_location'    => 'primary',
		            'container'         => '',
		            'container_class'   => '',
		            'container_id'      => 'bs-example-navbar-collapse-1',
		            'menu_class'        => 'menu-item-links text-left',
		            'fallback_cb'       => 'next_bootstrap_navwalker_hamburger::fallback',
		            'walker'            => new next_bootstrap_navwalker_hamburger())
		            );
		        ?>    
		        </div>  
			</div>
		</nav>
	<?php endif;?>
</header>
<?php get_search_form();?>
<!-- BODY SECTION -->
<section id="section-body">
<?php 
get_template_part('partials/breadcrumb'); 
?>
