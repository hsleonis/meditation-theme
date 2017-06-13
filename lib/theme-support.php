<?php
/**
 * ThemeAxe Theme support
 *
 * @package     Themeaxe
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxThemeSupport{

    /**
     * TmxMenu constructor.
     *
     * @since 1.0.1
     */
    public function __construct(){
        $this->hooks();
    }

    /**
     * Register Theme Features
     *
     * @since 1.0.1
     */
    public function tmx_theme_features()  {

        // Add theme support for Automatic Feed Links
        add_theme_support( 'automatic-feed-links' );

        // Add theme support for Post Formats
        add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

        // Add theme support for Featured Images
        add_theme_support( 'post-thumbnails', array( 'post', 'page', 'slider', 'instructor', 'meditationer' ) );

        // Set custom thumbnail dimensions
        set_post_thumbnail_size( 500, 400, true );

        // Custom image sizes
        add_image_size( 'team-image', 400, 500, array( 'center', 'center' ) );
        add_image_size( 'portfolio-image', 400, 400, array( 'center', 'center' ) );

        // Add theme support for Custom Background
        $background_args = array(
            'default-color'          => '#FFF',
            'default-image'          => '',
            'default-repeat'         => '',
            'default-position-x'     => '',
        );
        add_theme_support( 'custom-background', $background_args );

        // Add theme support for Custom Header
        $header_args = array(
            'default-image'          => '',
            'width'                  => 140,
            'height'                 => 62,
            'flex-width'             => true,
            'flex-height'            => true,
            'uploads'                => true,
            'random-default'         => false,
            'header-text'            => true,
            'default-text-color'     => '#333',
        );
        add_theme_support( 'custom-header', $header_args );

        // Add theme support for HTML5 Semantic Markup
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

        // Add theme support for document Title tag
        add_theme_support( 'title-tag' );

        // Add theme support for custom CSS in the TinyMCE visual editor
        add_editor_style( get_template_directory() . '/resources/css/editor-style.css' );

        // Add theme support for Translation
        load_theme_textdomain( 'themeaxe', get_template_directory() . '/language' );
    }

    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks(){
        add_action( 'after_setup_theme', array($this, 'tmx_theme_features') );
    }
}
