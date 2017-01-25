<?php // Exit if accessed directly
if (!defined('ABSPATH')) {echo '<h3>Forbidden</h3>'; exit();} 
global $next_options;
$pageid=get_the_ID();
if(is_singular()){
    $bc_image=get_template_directory_uri().'/assets/images/photo11.jpg';
    $bc_style=0;$bc_style_theme=0;
    if(!empty($next_options['single_banner']['url'])):
        $bc_image=esc_url($next_options['single_banner']['url']);
    endif;
    ?>
    <section id="banner-blog-single" class="col-xs-12 banner-sm" style="background: url('<?php echo esc_url($bc_image); ?>') no-repeat 50% fixed;background-size: cover;">
        <section class="container banner-title-2">
            <?php if($next_options['single_title']):?>
                <h1 class="title text-uppercase white transition"><?php echo esc_attr($next_options['single_title']);?></h1>
            <?php endif; if($next_options['single_subtitle']):?>
                <p class="lead white text-uppercase"><?php echo wp_kses_post($next_options['single_subtitle']);?></p>
            <?php endif;?>         
        </section>       
        <section class="bread-crumb">
            <section class="container">     
                <ul><?php next_breadcrumb();?></ul>
            </section>
        </section>
    </section>
<?php
}
else{
$bc_image=get_template_directory_uri().'/assets/images/minimal.jpg';
$bc_style=0;$bc_style_theme=0;
if(!empty($next_options['breadcrumb_image']['url'])):
    $bc_image=esc_url($next_options['breadcrumb_image']['url']);
endif;
$page_bc_image=get_post_meta( $pageid, 'page_header_image',true); 
if(!empty($page_bc_image)):
    $bc_image=esc_url($page_bc_image);
endif;?>


<section id="banner-blog" class="banner-600 col-xs-12" style="background: url('<?php echo esc_url($bc_image); ?>') no-repeat 50% fixed;background-size: cover;">
    <?php
    
    $page_setting_title=get_post_meta( $pageid, 'page_header_title',true);
    $page_setting_subtitle=get_post_meta( $pageid, 'page_header_subtitle',true);
    ?>
    <section class="container">
        <section class="col-sm-12 banner-title">
        <?php
            if ( isset($page_setting_title) && $page_setting_title!='') :?>
            <h1 class="title text-uppercase"><?php echo  wp_kses_post($page_setting_title); ?></h1>
            <?php elseif (is_home()) :?>
            <h1 class="title text-uppercase"><?php _e('BLOG', 'next'); ?></h1>
            <?php elseif (is_single()) :?>
            <h1 class="title text-uppercase"><?php echo get_the_title(); ?></h1>
            <?php elseif (is_page()) : ?>
            <h1 class="title text-uppercase"><?php echo get_the_title(); ?></h1>
            <?php elseif (is_author()) : ?>
            <h1 class="title text-uppercase"><?php _e('AUTHOR', 'next'); ?></h1>
            <?php elseif (is_search()) : ?>
            <h1 class="title text-uppercase"><?php _e('SEARCH', 'next'); ?></h1>
            <?php elseif (is_category()) : ?>
            <h1 class="title text-uppercase"><?php _e('CATEGORY', 'next'); ?></h1>
            <?php elseif (is_tag()) : ?>
            <h1 class="title text-uppercase"><?php _e('TAG', 'next'); ?></h1>
            <?php elseif (is_archive()) : ?>
            <?php if (get_post_type() == 'product') : ?>
            <h1 class="title text-uppercase"><?php _e('PRODUCTS', 'next'); ?></h1>
            <?php elseif(is_tax( 'portfolio_filter')): ?>
            <h1 class="title text-uppercase"><?php _e('Portfolio Filter', 'next'); ?></h1>
            <?php else: ?>
            <h1 class="title text-uppercase"><?php _e('ARCHIVE', 'next'); ?></h1>
            <?php endif; ?>
            <?php elseif (get_post_type() == 'product') : ?>
            <h1 class="title text-uppercase"><?php _e('PRODUCTS', 'next'); ?></h1>
            <?php else : ?>
            <h1 class="title text-uppercase"><?php _e('PAGE NOT FOUND', 'next'); ?></h1>
            <?php endif; ?>
            <span><?php echo wp_kses_post($page_setting_subtitle); ?></span>
        </section>
    </section>

    <section class="bread-crumb">
    <section class="container">     
        <ul><?php next_breadcrumb();?></ul>
    </section>
    </section>
</section>
<?php }
?>