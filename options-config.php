<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }
    // This is your option name where all the Redux data is stored.
    $opt_name = "next_options";
    // This line is adding in extensions.
//    Redux::setExtensions( $opt_name, dirname(__FILE__).'/../main-extensions');
    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */
   
    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */
    $theme = wp_get_theme(); // For use with some settings. Not necessary.
    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => false,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'next' ),
        'page_title'           => __( 'Theme Options', 'next' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer_only'      => false,
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.
        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );
    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
//    $args['admin_bar_links'][] = array(
//        'id'    => 'redux-docs',
//        'href'  => 'http://docs.reduxframework.com/',
//        'title' => __( 'Documentation', 'next' ),
//    );
//    $args['admin_bar_links'][] = array(
//        //'id'    => 'redux-support',
//        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
//        'title' => __( 'Support', 'next' ),
//    );
//    $args['admin_bar_links'][] = array(
//        'id'    => 'redux-extensions',
//        'href'  => 'reduxframework.com/extensions',
//        'title' => __( 'Extensions', 'next' ),
//    );
    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
//    $args['share_icons'][] = array(
//        'url'   => 'https://github.com/',
//        'title' => 'Visit us on GitHub',
//        'icon'  => 'el el-github'
//        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
//    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/nextthemes',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.twitter.com/nextthemes',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
//    $args['share_icons'][] = array(
//        'url'   => 'http://www.linkedin.com/',
//        'title' => 'Find us on LinkedIn',
//        'icon'  => 'el el-linkedin'
//    );
    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
//        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'next' ), $v );
    } else {
//        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'next' );
    }
    // Add content after the form.
//    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'next' );
    Redux::setArgs( $opt_name, $args );
    /*
     * ---> END ARGUMENTS
     */
    /*
     * ---> START HELP TABS
     */
//    $tabs = array(
//        array(
//            'id'      => 'redux-help-tab-1',
//            'title'   => __( 'Theme Information 1', 'next' ),
//            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'next' )
//        ),
//        array(
//            'id'      => 'redux-help-tab-2',
//            'title'   => __( 'Theme Information 2', 'next' ),
//            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'next' )
//        )
//    );
//    Redux::setHelpTab( $opt_name, $tabs );
    // Set the help sidebar
//    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'next' );
//    Redux::setHelpSidebar( $opt_name, $content );
    /*
     * <--- END HELP TABS
     */
    /*
     *
     * ---> START SECTIONS
     *
     */
    /*
        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
     */
    // -----------------------------------------------------------------------------------
    //  0.  Customizer - Set subsections
    // -----------------------------------------------------------------------------------
    if ( is_customize_preview() ) {
        // Change subtitle text in customizer / options panel
        $next_subtitle_customizer   = 'subtitle';
        $next_subtitle_panel        = NULL;
        // Change section field used in customizer / options panel
        $next_section_field         = 'next_section';
        // Enable sub-sections in customizer
        $next_customizer_subsection = true;
        Redux::setSection( $opt_name, array(
            'title'            => __( 'Theme Options', 'next' ),
            'id'               => 'next_theme_options',
            'desc'             => __( 'Use the options below to customize your theme!', 'next' ),
            'customizer_width' => '400px',
            'icon'             => 'el el-home',
            'customizer'       => true,
        ) );
    } else {
        // Disable sub-sections in theme options panel
        $next_customizer_subsection = false;
        // Change subtitle text in customizer / options panel
        $next_subtitle_customizer   = NULL;
        $next_subtitle_panel        = 'subtitle';
        // Change section field used in customizer / options panel
        $next_section_field         = 'section';
    }
    // -----------------------------------------------------------------------------------
    //  1.  General Settings
    // -----------------------------------------------------------------------------------
    Redux::setSection( $opt_name, array(
        'title'      => __('General Settings', 'next'),
        'header'     => __('Welcome to the Simple Options Framework Demo', 'next'),
        'desc'       => __('<span class="redux-title">Logo & Favicon Settings</span>', 'next'),
        'icon_class' => '',
        'icon'       => 'el el-wrench',
        'subsection' => $next_customizer_subsection,
        'customizer' => true,
        'fields'     => array(
                    array(
                         'id'        => 'preloader',
                         'type'      => 'switch',
                         'title'     => __('Activate preloader', 'next'),
                         'subtitle'  => __('Smooth page loader for your site', 'next'),
                         'default'   => '1',
                     ),
                    array(
                        'id'        => 'preloader-logo',
                        'type'      => 'media',
                        'title'     => __('Logo in the Preloader', 'next'),
                        'compiler'  => 'true',
                        'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'subtitle'  => __('Upload logo to be displayed on prelaoder', 'next'),
                    ),
                    array(
                        'id'        => 'logo',
                        'type'      => 'media',
                        'title'     => __('Logo Normal', 'next'),
                        'compiler'  => 'true',
                        'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'subtitle'  => __('Upload header logo for your website', 'next'),
                    ),
                    array(
                        'id'        => 'retinalogo',
                        'type'      => 'media',
                        'title'     => __('Retina Normal', 'next'),
                        'compiler'  => 'true',
                        'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'subtitle'  => __('Upload header logo for your website', 'next'),
                    ),
                    array(
                    
                    'title' => __('Enable Top Bar', 'next'),
                    
                    'id'    => 'top-bar',
                    
                    'type'  => 'switch',
                    
                    ),
                    array(
                        'id'        => 'top-bar-title-1',
                        'type'      => 'text',
                        'title'     => __('Top Bar Title One', 'next'),
                        'compiler'  => 'true',
                        'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                    ),
                    array(
                        'id'        => 'top-bar-detail-1',
                        'type'      => 'text',
                        'title'     => __('Top Bar Detail One', 'next'),
                        'compiler'  => 'true',
                        'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                    ),
                    array(
                        'id'        => 'top-bar-title-2',
                        'type'      => 'text',
                        'title'     => __('Top Bar Title Two', 'next'),
                        'compiler'  => 'true',
                        'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'default'   => false,
                    ),
                    array(
                        'id'        => 'top-bar-detail-2',
                        'type'      => 'text',
                        'title'     => __('Top Bar Title Detail Two', 'next'),
                        'compiler'  => 'true',
                        'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'default'   => false,
                    ),
                    array(
                        'id'        => 'top-bar-title-3',
                        'type'      => 'text',
                        'title'     => __('Top Bar Title Three', 'next'),
                        'compiler'  => 'true',
                        'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'default'   => false,
                    ),
                    array(
                        'id'        => 'top-bar-detail-3',
                        'type'      => 'text',
                        'title'     => __('Top Bar Detail Three', 'next'),
                        'compiler'  => 'true',
                        'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                    ),
                     array(
                        'id'        => 'google-map-api',
                        'type'      => 'text',
                        'title'     => __('Google Map API', 'next'),
                        'compiler'  => 'true',
                        'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                    ),
                    array(
                        'title'                      => __('Custom CSS', 'next'),
                        $next_subtitle_panel      => __('Developers can use this to apply custom css. Use this to control, by styling of any element on the webpage by targeting id&#39;s and classes.', 'next'),
                        $next_subtitle_customizer => __('Developers can use this to apply custom css. Use this to control, by styling of any element on the webpage by targeting id&#39;s and classes.', 'next'),
                        'id'                         => 'next_general_customcss',
                        'type'                       => 'textarea',
                        'validate'                   => 'css',
                    ),
        ),
    ));
    // -----------------------------------------------------------------------------------
    //  3.  Header
    // -----------------------------------------------------------------------------------
    Redux::setSection( $opt_name, array(
        'title'      => __('Header', 'next'),
        'desc'       => __('<span class="redux-title">Control Header Content</span>', 'next'),
        'icon'       => 'el el-chevron-up',
        'icon_class' => '',
        'subsection' => $next_customizer_subsection,
        'customizer' => true,
        'fields'     => array(
           array(
                'id'        => 'header-style',
                'type'      => 'image_select',
                'title'     => __('Option for Header Layout', 'creativ'),
                'subtitle'  => __('Styles when Header position is Top', 'creativ'),
                'options'   => array(
                    'transparent' => get_template_directory_uri() . '/assets/img/header01.png',
                    'semi-transparent' => get_template_directory_uri() . '/assets/img/header02.png',
                    'hamburger' => get_template_directory_uri() . '/assets/img/header03.png',
                    'solid' => get_template_directory_uri() . '/assets/img/header04.png',
                    'solid-dark' => get_template_directory_uri() . '/assets/img/header05.png',
                ), 
                'default' => 'transparent'
            ),
            array(
                'title'   => __('Menu Button Text', 'next'),
                'desc'    => __('Enter text for the button at the right side of navigation menu', 'next'),
                'id'      => 'next_menubutton_text',
                'type'    => 'text',
            ),
            array(
                'title'   => __('Menu Button URL', 'next'),
                'desc'    => __('Enter URL for the button at the right side of navigation menu', 'next'),
                'id'      => 'next_menubutton_url',
                'type'    => 'text',
                'sanitize'=>'url'
            ),
            
        )
    ) );
    // -----------------------------------------------------------------------------------
    //  4.  Footer
    // -----------------------------------------------------------------------------------
    Redux::setSection( $opt_name, array(
        'title'      => __('Footer', 'next'),
        'desc'       => __('<span class="redux-title">Control Footer Content</span>', 'next'),
        'icon'       => 'el el-chevron-down',
        'icon_class' => '',
        'subsection' => $next_customizer_subsection,
        'customizer' => true,
        'fields'     => array(
            array(
                'title'                      => __('Footer Widgets Layout', 'next'),
                $next_subtitle_panel      => __('Select footer layout. Take complete control of the footer content by adding widgets.', 'next'),
                $next_subtitle_customizer => __('Select footer layout. Take complete control of the footer content by adding widgets.', 'next'),
                'id'                         => 'footer-layout',
                'type'                       => 'image_select',
                'compiler'                   => true,
                'default'                    => '0',
                'options'                    => array(
                    '1'  => get_template_directory_uri() . '/assets/img/ft-1cl.png',
                    '2'  => get_template_directory_uri() . '/assets/img/ft-2cl.png',
                    '3'  => get_template_directory_uri() . '/assets/img/ft-2cl2.png',
                    '4'  => get_template_directory_uri() . '/assets/img/ft-2cl3.png',
                    '5'  => get_template_directory_uri() . '/assets/img/ft-2cl4.png',
                    '6'  => get_template_directory_uri() . '/assets/img/ft-3cl.png',
                    '7'  => get_template_directory_uri() . '/assets/img/ft-3cl2.png',
                    '8'  => get_template_directory_uri() . '/assets/img/ft-3cl3.png',
                    '9'  => get_template_directory_uri() . '/assets/img/ft-3cl4.png',
                    '10' => get_template_directory_uri() . '/assets/img/ft-4cl.png',
                    ),
                ),
            array(
                'title'   => __('Disable Social Links', 'next'),
                'desc'    => __('Check to disable social links in footer.', 'next'),
                'id'      => 'next_footer_sociallinks',
                'type'    => 'checkbox',
                'default' => '0',
            ),
            array(
                'title'   => __('Disable Footer bottom', 'next'),
                'desc'    => __('Check to disable bottom footer', 'next'),
                'id'      => 'next_footer_bottom',
                'type'    => 'checkbox',
                'default' => '0',
            ),
            array(
                'title'   => __('Footer Background', 'next'),
                'desc'    => __('Upload an image for footer background', 'next'),
                'id'      => 'next_footer_background',
                'type'    => 'media',
            ),
            array(
                'title'   => __('Footer Text', 'next'),
                'desc'    => __('Text on the bottom of the footer', 'next'),
                'id'      => 'next_footer_text',
                'type'    => 'editor',
            ),
        )
    ) );
     // -----------------------------------------------------------------------------------
    //  5.  Social Icons Image Link
    // -----------------------------------------------------------------------------------
    Redux::setSection( $opt_name, array(
        'title'      => __('Social Icons', 'next'),
        'desc'       => __('<span class="redux-title">Social Icons Here</span>', 'next'),
        'icon'       => 'el el-link',
        'icon_class' => '',
        'subsection' => $next_customizer_subsection,
        'customizer' => true,
        'fields'     => array(           
            array(
                'title'   => __('Facebook Link', 'next'),
                'desc'    => __('Add facebook link for site.', 'next'),
                'id'      => 'next_facebook',
                'type'    => 'text'
            ),
             array(
                'title'   => __('Twitter Link', 'next'),
                'desc'    => __('Add twitter link for site.', 'next'),
                'id'      => 'next_twitter',
                'type'    => 'text'
            ),
             array(
                'title'   => __('Dribbble Link', 'next'),
                'desc'    => __('Add dribbble link for site.', 'next'),
                'id'      => 'next_dribbble',
                'type'    => 'text'
            ),
             array(
                'title'   => __('Instagram Link', 'next'),
                'desc'    => __('Add instagram link for site.', 'next'),
                'id'      => 'next_instagram',
                'type'    => 'text'
            )
        )
    ) );
 Redux::setSection( $opt_name, array(
        'title'      => __('Portfolio', 'next'),
        'desc'       => __('<span class="redux-title">Control Portfolio Pages</span>', 'next'),
        'icon'       => 'el el-comment',
        'icon_class' => '',
        'subsection' => $next_customizer_subsection,
        'customizer' => true,
        'fields'     => array(
            array(
                'title'   => __('Portfolio Number', 'next'),
                'desc'    => __('Number of portfolio elements to display in portfolio page', 'next'),
                'id'      => 'portfolio_number',
                'type'    => 'text',
                'default' => '10',
            ),
        )
    ) );
    /*
     * <--- END SECTIONS
     */
    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=> true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }
    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;
            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }
            $return['value'] = $value;
            if ( $error == true ) {
                $return['error'] = $field;
                $field['msg']    = 'your custom error message';
            }
            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = 'your custom warning message';
            }
            return $return;
        }
    }
    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;
            return $args;
        }
    }
    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';
            return $defaults;
        }
    }
    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );
                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }
