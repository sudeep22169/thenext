<?php // Exit if accessed directly
if (!defined('ABSPATH')) {echo '<h1>Forbidden</h1>'; exit();} ?>
<?php  global $next_options; if(isset($next_options['footer-layout'])): ?>
 <?php if(esc_attr($next_options['footer-layout'])=='1'): ?>
        <section class="col-sm-12 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-1')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>  
        </section>
 <?php endif; if(esc_attr($next_options['footer-layout'])=='2'): ?>
        <section class="col-sm-6 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-1')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>  
        </section>

        <section class="col-sm-6 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-2')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>
 <?php endif; if(esc_attr($next_options['footer-layout'])=='3'): ?>
        <section class="col-sm-8 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-1')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>  
        </section>

        <section class="col-sm-4 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-2')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>
 <?php endif; if(esc_attr($next_options['footer-layout'])=='4'): ?>
        <section class="col-sm-4 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-1')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>  
        </section>

        <section class="col-sm-8 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-2')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>
 <?php endif;  if(esc_attr($next_options['footer-layout'])=='5'): ?>
        <section class="col-sm-3 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-1')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>  
        </section>

        <section class="col-sm-9 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-2')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>
 <?php endif;  if(esc_attr($next_options['footer-layout'])=='6'): ?>
        <section class="col-xs-12 col-sm-6 col-md-4 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-1')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>  
        </section>

        <section class="col-xs-12 col-sm-6 col-md-4 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-2')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>

        <section class="col-xs-12 col-md-4 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-3')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>
 <?php endif; if(esc_attr($next_options['footer-layout'])=='7'): ?>
        <section class="col-sm-6 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-1')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>  
        </section>

        <section class="col-sm-3 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-2')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>

        <section class="col-sm-3 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-3')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>
 <?php endif;  if(esc_attr($next_options['footer-layout'])=='8'): ?>
        <section class="col-sm-3 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-1')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>  
        </section>

        <section class="col-sm-3 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-2')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>

        <section class="col-sm-6 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-3')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>
 <?php endif;  if(esc_attr($next_options['footer-layout'])=='9'): ?>
        <section class="col-sm-3 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-1')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>  
        </section>

        <section class="col-sm-6 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-2')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>

        <section class="col-sm-3 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-3')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>
<?php endif;  if(esc_attr($next_options['footer-layout'])=='10'): ?>
        <section class="col-sm-3 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-1')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>  
        </section>

        <section class="col-sm-3 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-2')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>

        <section class="col-sm-3 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-3')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>

        <section class="col-sm-3 footer-widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('next-widgets-footer-block-4')) : ?>
                <?php //_e ('add widgets here', 'next'); ?>
            <?php endif; ?>
        </section>
<?php endif; endif; ?>