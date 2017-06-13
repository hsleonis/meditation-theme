<?php
/**
 * ThemeAxe Theme Enqueue Style & Scripts
 *
 * @package     Themeaxe
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxEnqueue{
    /**
     * TmxEnqueue constructor.
     *
     * @since 1.0.1
     */
    public function __construct(){
        $this->hooks();
    }

    /**
     * Enqueues style & scripts
     *
     * @since 1.0.1
     */
    public function tmx_enqueue_scripts() {
        // style
        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
        wp_enqueue_style('fonts-Lato-css', 'https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&amp;amp;subset=latin-ext', array(), false, 'all');
        wp_enqueue_style('fonts-Open-Sans-css', 'https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,600i,700,700i,800,800i&amp;amp;subset=latin-ext', array(), false, 'all');
        wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/css/owl.carousel.css', array(), false, 'all');
        wp_enqueue_style('owl-theme-css', get_template_directory_uri() . '/css/owl.theme.css', array(), false, 'all');
        wp_enqueue_style('font-awesome-css', get_template_directory_uri() . '/css/font-awesome.min.css', array(), false, 'all');
        wp_enqueue_style('main-css', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
        wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css', array(), false, 'all');
        
        // comment
        if(is_single() && comments_open()){
            wp_enqueue_script('comment-reply');
        }

        // script
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
        wp_enqueue_script('owl-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), false, true);
        wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array(), false, true);

        // ajax
        wp_localize_script( 'admin-ajax-js', 'wpajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    }

    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks(){
        add_action( 'wp_enqueue_scripts', array($this, 'tmx_enqueue_scripts') );
    }
}