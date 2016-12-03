<?php // Exit if accessed directly
if (!defined('ABSPATH')) {echo '<h1>Forbidden</h1>'; exit();} global $blog_page;$var_quote='';?>
<?php  switch ($blog_page) {
    case 'classic-one':
        $w='1140';
        $h='584';
        break;
    case 'classic-two':
        $w='555';
        $h='550';
        break;
    case 'classic-three':
        $w='360';
        $h='321';
        break;   
    default:       
        break;
}
    ?>


<article id="<?php the_ID('second-article'); ?>" <?php post_class("text-left block");?>>
    <div class="blog-header">                  
    <div class="blog-date col-xs-1 col-md-1"><?php echo get_the_date('d') ?> <i><?php echo get_the_date('M') ?></i></div>
        <h5 class="blog-title col-xs-11 col-md-10">                  
            <a href="<?php the_permalink();?>"><?php next_post_title();?></a>                  
        </h5>        
    </div>
    <?php $author_id=$post->post_author; ?>
    <div class="blog-meta col-xs-12 col-md-10">          
        <a href="<?php echo get_author_posts_url($author_id); ?>><i class="icon icon-basic-pin2"></i> <?php echo the_author_meta(  'user_nicename' , $author_id ); ?> </a>
        <a href="#"><i class="icon icon-basic-heart"></i> 24</a>
        <a href="<?php comments_link(); ?>"><i class="icon icon-basic-message"></i><?php comments_number( '0', '1', '%' ); ?></a>
    </div>    
</article><!-- end blog -->