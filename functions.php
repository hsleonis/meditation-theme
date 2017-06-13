<?php
/**
 * OliOli Theme Functions
 *
 * @package     TMXOliOli
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
    
    // ThemeAxe Core
    require_once (dirname(__FILE__) . '/lib/inc.php');
    TmxLibraryIncluder::instance('tmx-olioli');
    
    // Utility functions
    require_once (dirname(__FILE__) . '/lib/utilities.php');
    require_once (dirname(__FILE__) . '/lib/metabox.php');
    require_once (dirname(__FILE__) . '/lib/ajax-response.php');
    
    // Admin pages
    global $oli;
    require_once(dirname(__FILE__) . '/admin/redux-framework.php');
    require_once(dirname(__FILE__) . '/admin/config/main.php');