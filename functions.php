<?php
/**
 * thenext functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thenext
 */
if ( ! function_exists( 'thenext_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function thenext_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on thenext, use a find and replace
	 * to change 'thenext' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'thenext', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'thenext' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'thenext_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'thenext_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thenext_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'thenext_content_width', 640 );
}
add_action( 'after_setup_theme', 'thenext_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thenext_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'thenext' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'thenext' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
     // Footer Block 1
        register_sidebar(array(
            'name' => "Footer Block 1",
            'id' => "next-widgets-footer-block-1",
            'description' => __('Widgets placed here will display in the right sidebar', 'next'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="module-title"><h4>',
            'after_title'   => '</h4><span class="module-separator"></span></div>'
        ));
        // Footer Block 2
        register_sidebar(array(
            'name' => "Footer Block 2",
            'id' => "next-widgets-footer-block-2",
            'description' => __('Widgets placed here will display in the right sidebar', 'next'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="module-title"><h4>',
            'after_title'   => '</h4><span class="module-separator"></span></div>'
        ));
        // Footer Block 3
       register_sidebar(array(
            'name' => "Footer Block 3",
            'id' => "next-widgets-footer-block-3",
           'description' => __('Widgets placed here will display in the right sidebar', 'next'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="module-title"><h4>',
            'after_title'   => '</h4><span class="module-separator"></span></div>'
        ));
        

        // Footer Block 4
       register_sidebar(array(
            'name' => "Footer Block 4",
            'id' => "next-widgets-footer-block-4",
            'description' => __('Widgets placed here will display in the right sidebar', 'next'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="module-title"><h4>',
            'after_title'   => '</h4><span class="module-separator"></span></div>'
        ));
}
add_action( 'widgets_init', 'thenext_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thenext_scripts() {

	wp_enqueue_style( 'thenext-bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css');

	wp_enqueue_style( 'thenext-style', get_stylesheet_uri() );
	wp_enqueue_style( 'next-primary-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,700', '', '' );
	wp_enqueue_style( 'next-secondary-font', 'https://fonts.googleapis.com/css?family=Raleway:400,300,700', '', '' );

	//include all js
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'thenext-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'thenext-jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), '20151215', true );

	wp_enqueue_script( 'thenext-clipboard', get_template_directory_uri() . '/assets/js/clipboard.min.js', array(), '20151215', true );

	wp_enqueue_script( 'thenext-imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), '20151215', true );

	wp_enqueue_script( 'thenext-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true );

	wp_enqueue_script( 'thenext-classie', get_template_directory_uri() . '/assets/js/classie.js', array(), '20151215', true );

	wp_enqueue_script( 'thenext-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '20151215', true );

	wp_enqueue_script( 'thenext-lightbox', get_template_directory_uri() . '/assets/js/lightbox.min.js', array(), '20151215', true );

	wp_enqueue_script( 'thenext-isotope', get_template_directory_uri() . '/assets/js/jquery.isotope.min.js', array(), '20151215', true );

	wp_enqueue_script( 'thenext-counter', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), '20151215', true );

	wp_enqueue_script( 'thenext-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '20151215', true );

	wp_enqueue_script( 'thenext-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'thenext-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'thenext_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
require get_template_directory() . '/inc/navwalker.php';
require get_template_directory() . '/inc/init.php';
require get_template_directory() . '/inc/aquaresizer.php';


if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/options-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/options-config.php' );   
}
// Tgmpa
add_action( 'tgmpa_register', 'next_register_required_plugins' );

function next_register_required_plugins() {


    $plugins = array(
        array(
            'name'      => 'CMB2',
            'slug'       => 'cmb2',
            'required'    => true,
        ),
        array(
            'name'      => 'Redux-Framework',
            'slug'       => 'redux-framework',
            'required'    => true,
        ),
        array(
            'name'      => 'MailChimp For Wordpress',
            'slug'       => 'mailchimp-for-wp',
            'required'    => true,
        )
    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'next' ),
            'menu_title'                      => __( 'Install Plugins', 'next' ),
            'installing'                      => __( 'Installing Plugin: %s', 'next' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'next' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' , 'next'), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'next' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'next' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'next' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'next' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'next' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'next' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' , 'next'), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'next' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'next' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'next' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'next' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'next' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );

}
// adding searh button in nav menu

function next_add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'primary' )
        return $items.'<li class="hidden-xs"><span id="openSearch"><i class="icon icon-basic-magnifier black transition"></i></span></li>';

    return $items;
}
require get_template_directory() . '/inc/cmb2-details.php';
//
function next_post_meta() {
    $prefix="page_";
    $cmb = new_cmb2_box( array(
        'id'           => 'blog-information',
        'title'        => __('Blog Page Settings','next'),
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'tpl-blog.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => __('Header Image','next'),
        'id'   => $prefix.'header_image',
        'type' => 'file',
        'desc' => __('Select header background image for the page.','next')
    ) );
    $cmb->add_field( array(
        'name' => __('Header Title','next'),
        'id'   => $prefix.'header_title',
        'type' => 'text',
        'desc' => __('Give title of page.','next')
    ) );
    $cmb->add_field( array(
        'name' => __('Header Subtitle','next'),
        'id'   => $prefix.'header_subtitle',
        'type' => 'text',
        'desc' => __('Give subtitle of page.','next')
    ) );


}
add_action( 'cmb2_admin_init', 'next_post_meta' );


if ( ! function_exists( 'thenext_panels_row_container_start' ) ) {

    function thenext_panels_row_container_start( $grid, $fields ) {

       if ( ! array_key_exists( "row_stretch",$fields['style'] ) )
        {
            echo '<div class="container">';
        }

    }
}
add_filter('siteorigin_panels_before_row', 'thenext_panels_row_container_start', 10, 2);

if ( ! function_exists( 'thenext_panels_row_container_end' ) ) {

    function thenext_panels_row_container_end( $grid, $fields ) {

       if ( ! array_key_exists( "row_stretch",$fields['style'] ) )
        {
            echo '</div>';
        }


    }
}
add_filter('siteorigin_panels_after_row', 'thenext_panels_row_container_end', 10, 2);

/**
 * Hook to show blogs
 */
add_action('blog_listing','thenext_blog_listing',10,4);
function thenext_blog_listing($post_id,$count,$post,$type){
    $w=($count==1)?'1110':'570';
    $thumbnail = get_post_thumbnail_id($post_id);
    $img_url = wp_get_attachment_image_src( $thumbnail,'full');
    $alt = get_post_meta($thumbnail, '_wp_attachment_image_alt', true);
    if($img_url):
        $n_img = aq_resize( $img_url[0], $width =$w, $height = 270, $crop = true, $single = true, $upscale = true );
    endif;
    $author_id=$post->post_author; 
    if($type=="grid"){

        echo '
        <article id="third-article'.$post_id.'" class="text-left block"><div class="blog-header">                  
        <div class="blog-date col-xs-1 col-md-1">'.get_the_date('d').'<i>'.get_the_date('M').'</i></div>
            <h5 class="blog-title col-xs-11 col-md-10">                  
                <a href="'.get_the_permalink().'">'.get_the_title().'</a>                  
            </h5>        
        </div>
       
        <div class="blog-meta col-xs-12 col-md-10">          
            <a href="'.get_author_posts_url($author_id).'"><i class="icon icon-basic-pin2"></i>'.get_the_author_meta(  'user_nicename' , $author_id ).'</a>
            <a href="#"><i class="icon icon-basic-heart"></i> 24</a>
            <a href="'.get_comments_link().'"><i class="icon icon-basic-message"></i>'.get_comments_number( '0', '1', '%' ).'</a>
        </div>   </article>';
    }else {
        echo '<article id="third-article'.$post_id.'" class="text-left block latest-post"><div class="blog-header col-xs-12">              
            <div class="blog-date col-xs-1 col-md-1">'.get_the_date('d').'<i>'.get_the_date('M').'</i></div>    
            <h5 class="blog-title col-xs-11 col-md-10">              
                <a href="'.get_the_permalink().'">'.get_the_title().'</a>         
            </h5>            
            </div>            
            <div class="blog-meta col-xs-12 col-md-10">              
                <a href="'.get_author_posts_url($author_id).'"><i class="icon icon-basic-pin2"></i>'.get_the_author_meta(  'user_nicename' , $author_id ).'</a>
                <a href="#"><i class="icon icon-basic-heart"></i> 24</a>
                <a href="'.get_comments_link().'"><i class="icon icon-basic-message"></i>'.get_comments_number( '0', '1', '%' ).'</a>
            </div>           
          </article>';
    } ?>
    <style>
        #third-article<?php echo $post_id;?>.block:hover:after, 
        #third-article<?php echo $post_id;?>.block.latest-post:after {
            background: linear-gradient( rgba(255,255,255, 0.8), rgba(255,255,255, 0.8) ),url('<?php echo esc_url($n_img);?>') no-repeat;
            background-size: cover;
        }
    </style><?php

}
/*
* Added by rafin
*/
// Code to add search icon in nav   
