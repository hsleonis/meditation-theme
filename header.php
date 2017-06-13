<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php
        themeaxe_header();
        wp_head();
        global $oli;
    ?>
</head>
<body <?php body_class(); ?>>
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="top-right text-right">
                    <ul>
                        <?php if($oli['fb_link']): ?><li><a target="_blank" href="<?php echo $oli['fb_link']; ?>"><i class="fa fa-facebook"></i></a></li><?php endif; ?>
                        <?php if($oli['tw_link']): ?><li><a target="_blank" href="<?php echo $oli['tw_link']; ?>"><i class="fa fa-twitter"></i></a></li><?php endif; ?>
                        <?php if($oli['in_link']): ?><li><a target="_blank" href="<?php echo $oli['in_link']; ?>"><i class="fa fa-instagram"></i></a></li><?php endif; ?>
                        <?php if($oli['pn_link']): ?><li><a target="_blank" href="<?php echo $oli['pn_link']; ?>"><i class="fa fa-pinterest"></i></a></li><?php endif; ?>
                        <?php if($oli['email_id']): ?><li><a target="_blank" href="<?php echo $oli['email_id']; ?>"><i class="fa fa-envelope"></i></a></li><?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="logo-middle text-center">
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo bloginfo('title'); ?>" />
                </a>
            </div>
        </div>
        <div class="headerbottom-area ">
            <nav id="nav-full" class="headerbottom navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand navbar-left">
                            <!-- <div class="navbar-lang">
                                <ul>
                                    <li class="active"><a href="#">Den</a></li>
                                    <li><a class="lang-border" href="#">Eng</a></li>
                                </ul>
                            </div> -->
                          
                            <div class="sticky-left-logo">
                                <a href="<?php bloginfo('url'); ?>">
                                    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo bloginfo('title'); ?>" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php wp_nav_menu( array(
                            'theme_location'    => 'main-menu',
                            'menu_id'           => 'nav',
                            'menu_class'        => 'nav navbar-nav navbar-left',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker()
                        )); ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>