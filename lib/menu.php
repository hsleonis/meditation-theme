<?php
/**
 * Theme menus
 *
 * @package     Themeaxe
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxMenu{

    /**
     * @var locations
     * Used to get menu location array
     *
     * @since 1.0.1
     */
    private $locations;

    /**
     * TmxMenu constructor.
     * @param array $locations
     *
     * @since 1.0.1
     */
    public function __construct($locations=array()){
        $this->locations = $locations;
        $this->hooks();
    }
    /**
     * Register Navigation Menus
     *
     * @since 1.0.1
     */
    public function tmx_navigation_menus() {
        register_nav_menus( $this->locations );
    }

    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks(){
        add_action( 'init', array($this, 'tmx_navigation_menus') );
    }
}
