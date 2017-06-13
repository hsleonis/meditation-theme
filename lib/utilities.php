<?php
/**
 * Theme utility functions
 *
 * @package     Themeaxe
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

/*-------------------------------------------------------
 *              ThemeAxe Header
 *-----------------------------------------------------*/
if(!function_exists('themeaxe_header')):

    function themeaxe_header()
    {
        $meta_content = get_bloginfo('name')." - ".get_bloginfo('description');
        ?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="<?php echo $meta_content; ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="author" content="<?php bloginfo('title'); ?>">
        <meta name="twitter:card" content="<?php echo $meta_content; ?>">
        <meta name="twitter:domain" content="<?php bloginfo('url'); ?>"/>
        <meta name="twitter:title" property="og:title" itemprop="title name" content="<?php bloginfo('name'); ?>" />
        <meta name="twitter:description" property="og:description" itemprop="description" content="<?php echo $meta_content; ?>" />
        <meta property="og:title" content="<?php bloginfo('title'); ?>"/>
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?php header_image(); ?>" />
        <meta property="og:site_name" content="<?php bloginfo('title'); ?>"/>
        <meta property="og:description" content="<?php echo $meta_content; ?>"/>

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif;
    }

endif;

/*-------------------------------------------------------
 *              ThemeAxe Comment
 *-----------------------------------------------------*/
if(!function_exists('themeaxe_comment')):

    function themeaxe_comment($comment, $args, $depth)
    {
        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
            case 'pingback' :
            case 'trackback' :
                // Display trackbacks differently than normal comments.
                ?>
                <div <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>" class="comments-list">
                    <p>Pingback: <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'themeaxe' ), '<span class="edit-link">', '</span>' ); ?></p>
                <?php
                break;
            default :

                global $post;
                ?>
                <div <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>" class="media comment_section">
                <div id="comment-<?php comment_ID(); ?>" class="media comment_section">
                    <a class="pull-left post_comments" href="#">
                        <img class="img-circle" src="<?php echo get_avatar_url( $comment, $args['avatar_size'] ); ?>" />
                    </a>
                    <div class="media-body post_reply_comments">
                        <h3><?php echo get_comment_author_link(); ?></h3>
                        <h4><?php echo get_comment_date('F j, Y') ?></h4>
                        <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation"><strong><?php esc_html_e( 'Your comment is awaiting for moderation.', 'themeaxe' ); ?></strong></p>
                        <?php endif; ?>
                        <?php comment_text(); ?>
                        <?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'themeaxe' ), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                    </div>
                </div>
                <?php
                break;
        endswitch;
    }

endif;

/*-------------------------------------------------------
 *              ThemeAxe Pagination
 *-----------------------------------------------------*/
if(!function_exists('themeaxe_pagination')):

    function themeaxe_pagination($pages = '', $range = 2)
    {
        $showitems = ($range * 1)+1;
        global $paged;
        if(empty($paged)) $paged = 1;
        if($pages == '')
        {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if(!$pages)
            {
                $pages = 1;
            }
        }
        if(1 != $pages)
        {
            echo "<ul class='pagination pagination-lg'>";
            if($paged > 2 && $paged > $range+1 && $showitems < $pages){
                echo "<li class='page-item'><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
            }
            if($paged > 1 && $showitems < $pages){
                echo '<li class="page-item">';
                previous_posts_link('<span class="fa fa-long-arrow-left"></span>');
                echo '</li>';
            }
            for ($i=1; $i <= $pages; $i++)
            {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                {
                    echo ($paged == $i)? "<li class='active page-item'><a href='#'>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' >".$i."</a></li>";
                }
            }
            if ($paged < $pages && $showitems < $pages){
                echo '<li>';
                next_posts_link('<span class="fa fa-long-arrow-right"></span>');
                echo '</li>';
            }
            if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages){
                echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
            }
            echo "</ul>";
        }
    }

endif;

/*-------------------------------------------------------
 *                  At A Glance
 *-----------------------------------------------------*/
if(!function_exists('shahriar_glance_items')):
    add_filter( 'dashboard_glance_items', 'shahriar_glance_items' );
    function shahriar_glance_items($items){
        $str = '';
        foreach ( array( 'attachment', 'instructor', 'meditationer', 'slider', 'services' ) as $post_type ) {
            $num_posts = wp_count_posts( $post_type );
            if ( $num_posts && ($num_posts->publish or $num_posts->inherit) ) {
                $post_type_object = get_post_type_object( $post_type );
                if ( 'team' == $post_type ) {
                    $text = _n( '%s Team member', '%s Team members', $num_posts->publish );
                } else if ( 'attachment' == $post_type ) {
                    $text = _n( '%s Media', '%s Media', $num_posts->publish );
                } else {
                    $text = sprintf( '%s %s', $num_posts->publish, $post_type_object->label );
                }
                if($num_posts->publish){
                    $text = sprintf( $text, number_format_i18n( $num_posts->publish ) );
                }
                else if($post_type == 'attachment'){
                    $text = sprintf( $text, number_format_i18n( $num_posts->inherit ) );
                }

                if ( $post_type_object && current_user_can( $post_type_object->cap->edit_posts ) ) {
                    $str = sprintf( '<div class="%1$s-count"><a href="edit.php?post_type=%1$s">%2$s</a></div>', $post_type, $text );
                } else {
                    $str = sprintf( '<div class="%1$s-count"><span>%2$s</span></div>', $post_type, $text );
                }
            }

            array_push($items, $str);
        }

        return $items;
    }
endif;

/*-------------------------------------------------------
 *                  Get Archive Title
 *-----------------------------------------------------*/
if(!function_exists('tmx_theme_archive_title')):
    add_filter( 'get_the_archive_title', 'tmx_theme_archive_title' );
    function tmx_theme_archive_title( $title ) {
        if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_post_type_archive() ) {
            $title = post_type_archive_title( '', false );
        } elseif ( is_tax() ) {
            $title = single_term_title( '', false );
        }

        return $title;
    }
endif;