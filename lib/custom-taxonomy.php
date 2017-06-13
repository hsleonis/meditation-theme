<?php
/**
 * ThemeAxe Custom Taxonomy
 *
 * @package     Themeaxe
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxCustomTaxonomy {

    /**
     * Contains custom taxonomy name
     * @var string
     */
    private $taxonomy;

    /**
     * Contains post type labels
     * @var array
     */
    private $labels;

    /**
     * Contains post type options
     * @var array
     */
    private $options;

    /**
     * Post types of this taxonomy
     * @var $posts array
     */
    private $posts;

    /**
     * TmxCustomPost constructor.
     * @param $taxonomy string
     *
     * @since 1.0.1
     */
    public function __construct($taxonomy, $posts=array('post'), $options=array(), $labels=array())
    {
        $this->taxonomy = $taxonomy;
        $this->labels = $labels;
        $this->options = $options;
        $this->posts = $posts;
        $this->hooks();
    }

    /**
     * Register Custom Taxonomy
     *
     * @since 1.0.1
     */
    public function tmx_custom_taxonomy() {

        $labels = array(
            'name'                       => _x( $this->taxonomy, 'Taxonomy General Name', 'themeaxe' ),
            'singular_name'              => _x( $this->taxonomy, 'Taxonomy Singular Name', 'themeaxe' ),
            'menu_name'                  => __( $this->taxonomy, 'themeaxe' ),
            'all_items'                  => __( 'All '.$this->taxonomy, 'themeaxe' ),
            'parent_item'                => __( 'Parent '.$this->taxonomy, 'themeaxe' ),
            'parent_item_colon'          => __( 'Parent '.$this->taxonomy.':', 'themeaxe' ),
            'new_item_name'              => __( 'New '.$this->taxonomy.' Name', 'themeaxe' ),
            'add_new_item'               => __( 'Add New '.$this->taxonomy, 'themeaxe' ),
            'edit_item'                  => __( 'Edit '.$this->taxonomy, 'themeaxe' ),
            'update_item'                => __( 'Update '.$this->taxonomy, 'themeaxe' ),
            'view_item'                  => __( 'View '.$this->taxonomy, 'themeaxe' ),
            'separate_items_with_commas' => __( 'Separate '.$this->taxonomy.' with commas', 'themeaxe' ),
            'add_or_remove_items'        => __( 'Add or remove '.$this->taxonomy, 'themeaxe' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'themeaxe' ),
            'popular_items'              => __( 'Popular '.$this->taxonomy, 'themeaxe' ),
            'search_items'               => __( 'Search '.$this->taxonomy, 'themeaxe' ),
            'not_found'                  => __( 'Not Found', 'themeaxe' ),
            'no_terms'                   => __( 'No '.$this->taxonomy, 'themeaxe' ),
            'items_list'                 => __( $this->taxonomy.' list', 'themeaxe' ),
            'items_list_navigation'      => __( $this->taxonomy.' list navigation', 'themeaxe' ),
        );
        $args = array(
            'labels'                     => wp_parse_args( $this->labels, $labels ),
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'update_count_callback'      => 'post_type_update_callback',
            'show_in_rest'               => true,
        );
        register_taxonomy( $this->taxonomy, $this->posts, wp_parse_args( $this->options, $args) );
    }

    /**
     * Called when the count of an associated Post Type is updated
     *
     * @since 1.0.1
     */
    public function post_type_update_callback(){

    }

    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks()
    {
        add_action( 'init', array($this, 'tmx_custom_taxonomy'), 0);
    }
}