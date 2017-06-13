<?php
/**
 * Theme Metabox
 *
 * @package     Themeaxe
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

/*------------------------------------------------
 *              ThemeAxe Metabox
 *----------------------------------------------*/
add_action( 'cmb2_init', 'themeaxe_add_metabox' );
if(!function_exists('themeaxe_add_metabox')):
function themeaxe_add_metabox() {

    $prefix = '_tmx_';

    $cmb = new_cmb2_box( array(
        'id'           => $prefix . 'service_info',
        'title'        => __( 'Service settings', 'themeaxe' ),
        'object_types' => array( 'services' ),
        'context'      => 'normal',
        'priority'     => 'default',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Link', 'themeaxe' ),
        'id' => $prefix . 'services_link',
        'type' => 'text',
        'desc' => __( 'Service Link', 'themeaxe' ),
    ) );

    $cmb->add_field( array(
        'name' => __( 'Button text', 'themeaxe' ),
        'id' => $prefix . 'services_txt',
        'type' => 'text',
        'desc' => __( 'Action button text', 'themeaxe' ),
    ) );

    $cmb->add_field( array(
        'name' => __( 'Action button style', 'themeaxe' ),
        'id' => $prefix . 'services_btn',
        'desc' => __( 'Services link button background style', 'themeaxe' ),
        'type'             => 'select',
        'show_option_none' => false,
        'default'          => 'btn1',
        'options'          => array(
            'btn1' => __( 'Style 1', 'cmb2' ),
            'btn2' => __( 'Style 2', 'cmb2' ),
            'btn3' => __( 'Style 3', 'cmb2' ),
            'btn4' => __( 'Style 4', 'cmb2' ),
            'btn5' => __( 'Style 5', 'cmb2' ),
        ),
    ) );

    // End of metabox content
}
endif;