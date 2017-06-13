<?php
/**
 * ThemeAxe Theme library includer
 * Includes all necessary library files
 *
 * @package     Themeaxe
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxLibraryIncluder{
    /**
     * @access private
     * @var instance
     * Used to instantiate
     *
     * @since 1.0.1
     */
    private static $instance;

    /**
     * @access private
     * @var admin
     * used to store titan instance
     *
     * @since 1.0.1
     */
    private static $admin;

    /**
     * @access public
     * TmxLibraryIncluder constructor.
     * @param string $admin instance
     * @return new TmxLibraryIncluder instance
     *
     * @since 1.0.1
     */
    public static function instance($admin) {
        if ( ! self::$instance ) {
            self::$instance = new self;
            self::$admin = $admin;
            self::$instance->includes();
            self::$instance->init();
        }
        return self::$instance;
    }

    /**
     * @access private
     * Include all library files
     *
     * @since 1.0.1
     */
    private function includes(){
        require_once ( get_template_directory().'/lib/enqueue.php');
        require_once ( get_template_directory().'/lib/menu.php');
        require_once ( get_template_directory().'/lib/custom-post.php');
        require_once ( get_template_directory().'/lib/custom-taxonomy.php');
        require_once ( get_template_directory().'/lib/theme-support.php');
        require_once ( get_template_directory().'/lib/wp_bootstrap_navwalker.php');
        require_once ( get_template_directory().'/lib/sidebar.php');
        require_once ( get_template_directory().'/lib/tgm-plugin.php');
    }

    /**
     * @access private
     * Initialize libraries
     *
     * @since 1.0.1
     */
    private function init(){
        new TmxEnqueue();
        new TmxThemeSupport();
        new TmxMenu(array(
            'main-menu' => __( 'Main menu', 'themeaxe' ),
            'footer-menu' => __( 'Footer menu', 'themeaxe' )
        ));
        new TmxCustomPost('Slider', array(
            'taxonomies' => array( ),
            'supports'  => array( 'title', 'editor', 'thumbnail' ),
            'menu_icon' => 'dashicons-images-alt2'
        ));
        new TmxCustomPost('Instructor', array(
            'taxonomies' => array( ),
            'supports'  => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'menu_icon' => 'dashicons-businessman'
        ));
        new TmxCustomPost('Meditationer', array(
            'taxonomies' => array( ),
            'supports'  => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'menu_icon' => 'dashicons-groups'
        ));
        new TmxCustomPost('Services', array(
            'taxonomies' => array( ),
            'supports'  => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'menu_icon' => 'dashicons-hammer'
        ));
        new TmxSidebar( 1, array(
                'class'         => 'col-xs-12 col-mb-12',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
                'name'          => __( 'Archive', 'themeaxe' ),
                'id'            => 'archive-sidebar',
                'description'   => __( 'Sidebar in archive and blog', 'themeaxe' )
            )
        );
    }
}