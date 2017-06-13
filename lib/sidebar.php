<?php
/**
 * ThemeAxe Theme sidebars
 *
 * @package     Themeaxe
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxSidebar{

    /**
     * Used to get menu array
     * @var array Locations
     *
     * @since 1.0.1
     */
    private $locations;

    /**
     * Used to store number of menu
     * @var int
     */
    private $count;

    /**
     * TmxMenu constructor.
     * @param array $locations
     * @param int $count
     *
     * @since 1.0.1
     */
    public function __construct($count=1, $locations=array()){
        $this->count = $count;
        $this->locations = $locations;
        $this->tmx_sidebar();
    }
    /**
     * Register Sidebars
     *
     * @since 1.0.1
     */
    public function tmx_sidebar() {
        register_sidebars( $this->count, $this->locations );
    }
}
