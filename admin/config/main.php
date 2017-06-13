<?php

/**
 * Innovects Theme Admin options
 *
 * @package     TMXinnovects
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "oli";

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
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'OliOli Options', 'themeaxe' ),
        'page_title'           => __( 'OliOli Options', 'themeaxe' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => $opt_name,
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
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
        'page_slug'            => '_options',
        // Page slug used to denote the panel
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

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
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
    $args['admin_bar_links'][] = array(
        'id'    => 'theme-docs',
        'href'  => 'http://themeaxe.com',
        'title' => __( 'Documentation', 'themeaxe' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'themeaxe-support',
        'href'  => 'https://themeaxe.com/contact',
        'title' => __( 'Support', 'themeaxe' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/hsleonis',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/ThemeAxe',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/themeaxe',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/themeaxe',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        // $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'themeaxe' ), $v );
    } else {
        $args['intro_text'] = __( '<p></p>', 'themeaxe' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p></p>', 'themeaxe' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'tmx-help-tab-1',
            'title'   => __( 'Theme Docs', 'themeaxe' ),
            'content' => __( '<p>Read the online documentation here: </p><p><a href="http://themeaxe.com/shahriar-theme" target="_blank" title="Shahriar Theme Documentation">Shahriar Theme Docs</a></p>', 'themeaxe' )
        ),
        array(
            'id'      => 'tmx-help-tab-2',
            'title'   => __( 'Support', 'themeaxe' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'themeaxe' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>Settings for general theme options.</p>', 'themeaxe' );
    Redux::setHelpSidebar( $opt_name, $content );


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

    // -> START Basic Fields
		Redux::setSection( $opt_name, array(
        'title'      => __( 'Slider', 'themeaxe' ),
        'desc'       => __( 'Main slide content', 'themeaxe' ),
        'id'         => 'slider',
        'icon'       => 'dashicons dashicons-laptop',
        'fields'     => array(
            array(
                'id'       => 'slide_title',
                'type'     => 'text',
                'title'    => __( 'Title', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' )
            ),
      			array(
                'id'       => 'slide_subtitle',
                'type'     => 'text',
                'title'    => __( 'Subtitle', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' )
            ),
      			array(
                'id'       => 'slide_aftitle',
                'type'     => 'text',
                'title'    => __( 'After title', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' )
            ),
      			array(
                'id'       => 'slide_text',
                'type'     => 'textarea',
                'title'    => __( 'Text', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' )
            ),
      			array(
                'id'       => 'slide_btn_txt',
                'type'     => 'text',
                'title'    => __( 'More link text', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' )
            ),
      			array(
                'id'       => 'slide_btn_link',
                'type'     => 'text',
                'title'    => __( 'More link', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' ),
      					'default'  => '#'
            ),
      			array(
                'id'       => 'slide_img',
                'type'     => 'media',
      					'url'      => true,
                'title'    => __( 'Image', 'themeaxe' ),
                'desc'     => __( 'Upload image for slider bottom', 'themeaxe' ),
                'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                )
            ),
      			array(
                'id'       => 'slide_img_txt',
                'type'     => 'text',
                'title'    => __( 'Image caption', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' )
            ),
      			array(
                'id'       => 'slide_img_link',
                'type'     => 'text',
                'title'    => __( 'Image Link', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' ),
      					'default'  => '#'
            ),
        )
    ) );

		Redux::setSection( $opt_name, array(
        'title'      => __( 'About', 'themeaxe' ),
        'desc'       => __( 'About section settings', 'themeaxe' ),
        'id'         => 'about',
        'icon'       => 'dashicons dashicons-palmtree',
        'fields'     => array(
            array(
                'id'       => 'about_title',
                'type'     => 'text',
                'title'    => __( 'Title', 'themeaxe' ),
                'desc'     => __( 'Section title', 'themeaxe' ),
                'default'  => '',
            ),
            array(
                'id'       => 'about_subtitle',
                'type'     => 'text',
                'title'    => __( 'Subtitle', 'themeaxe' ),
                'desc'     => __( 'Section subtitle', 'themeaxe' ),
                'default'  => '',
            ),
            array(
                'id'       => 'about_txt',
                'type'     => 'textarea',
                'title'    => __( 'Text content', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' ),
            ),
      			array(
                'id'       => 'about_subscribe',
                'type'     => 'text',
                'title'    => __( 'Subscribe URL', 'themeaxe' ),
                'desc'     => __( 'Place mailchimp url for subscribe form submit action', 'themeaxe' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'about_main',
                'type'     => 'media',
      					'url'      => true,
                'title'    => __( 'Image', 'themeaxe' ),
                'desc'     => __( 'Upload image for about section', 'themeaxe' ),
                'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                )
            ),
      			array(
                'id'       => 'about_overlay',
                'type'     => 'media',
      					'url'      => true,
                'title'    => __( 'Overlay', 'themeaxe' ),
                'desc'     => __( 'About image overlay image', 'themeaxe' ),
                'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                )
            )
        )
    ) );
		
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Social', 'themeaxe' ),
        'desc'       => __( 'Social links', 'themeaxe' ),
        'id'         => 'social',
        'icon'       => 'dashicons dashicons-share',
        'fields'     => array(
            array(
                'id'       => 'tel_no',
                'type'     => 'text',
                'title'    => __( 'Telephone number', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' ),
                'default'  => '+11 0123 4567',
            ),
            array(
                'id'       => 'email_id',
                'type'     => 'text',
                'title'    => __( 'Email', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' ),
                'default'  => 'example@domain.com',
            ),
            array(
                'id'       => 'fb_link',
                'type'     => 'text',
                'title'    => __( 'Facebook profile', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'gp_link',
                'type'     => 'text',
                'title'    => __( 'Google plus page', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'tw_link',
                'type'     => 'text',
                'title'    => __( 'Twitter profile', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'in_link',
                'type'     => 'text',
                'title'    => __( 'Instagram profile', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'pn_link',
                'type'     => 'text',
                'title'    => __( 'Pinterest profile', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' ),
                'default'  => '#',
            )
        )
    ) );

		Redux::setSection( $opt_name, array(
        'title'      => __( 'Blog', 'themeaxe' ),
        'desc'       => __( 'Blog settings', 'themeaxe' ),
        'id'         => 'blog',
        'icon'       => 'dashicons dashicons-admin-post',
        'fields'     => array(
            array(
                'id'       => 'blog_title',
                'type'     => 'text',
                'title'    => __( 'Title', 'themeaxe' ),
                'desc'     => __( 'Section title', 'themeaxe' ),
                'default'  => '',
            ),
            array(
                'id'       => 'blog_subtitle',
                'type'     => 'text',
                'title'    => __( 'Subtitle', 'themeaxe' ),
                'desc'     => __( 'Section subtitle', 'themeaxe' ),
                'default'  => '',
            ),
            array(
                'id'       => 'blog_count',
                'type'     => 'text',
                'title'    => __( 'Post', 'themeaxe' ),
                'desc'     => __( 'Number of posts to show', 'themeaxe' ),
                'default'  => '3',
            ),
            array(
                'id'       => 'blog_link',
                'type'     => 'text',
                'title'    => __( 'Blog page URL', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' ),
                'default'  => '/blog',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Instructor', 'themeaxe' ),
        'desc'       => __( 'Instructor section content', 'themeaxe' ),
        'id'         => 'instructor',
        'icon'       => 'dashicons dashicons-businessman',
        'fields'     => array(
            array(
                'id'       => 'ins_title',
                'type'     => 'text',
                'title'    => __( 'Title', 'themeaxe' ),
                'desc'     => __( 'Section title', 'themeaxe' ),
                'default'  => '',
            ),
            array(
                'id'       => 'ins_subtitle',
                'type'     => 'text',
                'title'    => __( 'Subtitle', 'themeaxe' ),
                'desc'     => __( 'Sectitle subtitle', 'themeaxe' ),
                'default'  => '',
            ),
            array(
                'id'       => 'ins_count',
                'type'     => 'text',
                'title'    => __( 'Post', 'themeaxe' ),
                'desc'     => __( 'Number of posts to show', 'themeaxe' ),
                'default'  => '4',
            ),
            array(
                'id'       => 'ins_car_count',
                'type'     => 'text',
                'title'    => __( 'Post in carousel', 'themeaxe' ),
                'desc'     => __( 'Number of posts to show in carousel', 'themeaxe' ),
                'default'  => '4',
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Meditationer', 'themeaxe' ),
        'desc'       => __( 'Meditationer section content', 'themeaxe' ),
        'id'         => 'meditationer',
        'icon'       => 'dashicons dashicons-groups',
        'fields'     => array(
            array(
                'id'       => 'med_title',
                'type'     => 'text',
                'title'    => __( 'Title', 'themeaxe' ),
                'desc'     => __( 'Section title', 'themeaxe' ),
                'default'  => '',
            ),
            array(
                'id'       => 'med_subtitle',
                'type'     => 'text',
                'title'    => __( 'Subtitle', 'themeaxe' ),
                'desc'     => __( 'Sectitle subtitle', 'themeaxe' ),
                'default'  => '',
            ),
            array(
                'id'       => 'med_count',
                'type'     => 'text',
                'title'    => __( 'Post', 'themeaxe' ),
                'desc'     => __( 'Number of posts to show', 'themeaxe' ),
                'default'  => '4',
            ),
            array(
                'id'       => 'med_car_count',
                'type'     => 'text',
                'title'    => __( 'Post in carousel', 'themeaxe' ),
                'desc'     => __( 'Number of posts to show in carousel', 'themeaxe' ),
                'default'  => '4',
            ),
        )
    ) );

		Redux::setSection( $opt_name, array(
        'title'      => __( 'Meditation', 'themeaxe' ),
        'desc'       => __( 'Meditation section settings', 'themeaxe' ),
        'id'         => 'meditation',
        'icon'       => 'dashicons dashicons-cloud',
        'fields'     => array(
            array(
                'id'       => 'meditation_title',
                'type'     => 'text',
                'title'    => __( 'Title', 'themeaxe' ),
                'desc'     => __( 'Section title', 'themeaxe' ),
                'default'  => '',
            ),
            array(
                'id'       => 'meditation_subtitle',
                'type'     => 'text',
                'title'    => __( 'Subtitle', 'themeaxe' ),
                'desc'     => __( 'Section subtitle', 'themeaxe' ),
                'default'  => '',
            ),
            array(
                'id'       => 'meditation_txt',
                'type'     => 'textarea',
                'title'    => __( 'Text content', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' ),
            ),
      			array(
                'id'       => 'meditation_img',
                'type'     => 'media',
      					'url'      => true,
                'title'    => __( 'Overlay', 'themeaxe' ),
                'desc'     => __( 'Meditation image', 'themeaxe' ),
                'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                )
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Services', 'themeaxe' ),
        'desc'       => __( 'Services section content', 'themeaxe' ),
        'id'         => 'services',
        'icon'       => 'dashicons dashicons-hammer',
        'fields'     => array(
            array(
                'id'       => 'ser_title',
                'type'     => 'text',
                'title'    => __( 'Title', 'themeaxe' ),
                'desc'     => __( 'Section title', 'themeaxe' ),
                'default'  => '',
            ),
            array(
                'id'       => 'ser_subtitle',
                'type'     => 'text',
                'title'    => __( 'Subtitle', 'themeaxe' ),
                'desc'     => __( 'Sectitle subtitle', 'themeaxe' ),
                'default'  => '',
            ),
            array(
                'id'       => 'ser_count',
                'type'     => 'text',
                'title'    => __( 'Post', 'themeaxe' ),
                'desc'     => __( 'Number of posts to show', 'themeaxe' ),
                'default'  => '-1',
            ),
      			array(
                'id'       => 'ser_img',
                'type'     => 'media',
      					'url'      => true,
                'title'    => __( 'Image', 'themeaxe' ),
                'desc'     => __( 'Upload featured image for this section', 'themeaxe' ),
                'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                )
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact', 'themeaxe' ),
        'desc'       => __( 'Contact information', 'themeaxe' ),
        'id'         => 'contact',
        'icon'       => 'dashicons dashicons-email',
        'fields'     => array(
            array(
                'id'       => 'contact_email',
                'type'     => 'text',
                'title'    => __( 'Email', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' )
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer', 'themeaxe' ),
        'desc'       => __( 'Footer settings', 'themeaxe' ),
        'id'         => 'address',
        'icon'       => 'dashicons dashicons-location-alt',
        'fields'     => array(
            array(
                'id'       => 'address_txt',
                'type'     => 'text',
                'title'    => __( 'Address text', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' )
            ),
      			array(
                'id'       => 'popup_title',
                'type'     => 'text',
                'title'    => __( 'Popup title', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' )
            ),
          	array(
                'id'       => 'popup_txt',
                'type'     => 'editor',
                'title'    => __( 'Popup text', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' )
          	),
      			array(
                'id'       => 'cookies_title',
                'type'     => 'text',
                'title'    => __( 'Cookies title', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' )
            ),
          	array(
                'id'       => 'cookies_txt',
                'type'     => 'editor',
                'title'    => __( 'Cookies text', 'themeaxe' ),
                'desc'     => __( '', 'themeaxe' )
          	)
        )
    ) );

    /*
     * <--- END SECTIONS
     */

    /** Remove redux menu under the tools **/
    add_action( 'admin_menu', 'remove_redux_menu',12 );
    function remove_redux_menu() {
        remove_submenu_page('tools.php','redux-about');
    }