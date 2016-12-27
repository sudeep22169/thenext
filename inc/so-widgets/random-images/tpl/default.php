<section class="col-xs-12 random-images">
    <?php
    $i = 1;
    foreach ( $instance['random_images'] as $image ){
        $image_url = wp_get_attachment_image_src( $image['image'], 'full'); ?>
        <div id="image-<?php echo $i;?>">
            <a  href="<?php echo esc_url( $image_url[0]) ?>" data-lightbox="random" data-title="<?php  echo $image['text']?>">
                <img src="<?php echo esc_url( $image_url[0]) ?>" alt="<?php echo $image['text']?>" class="img-responsive" /></a>
        </div>

    <?php $i++;  } ?>
</section>
