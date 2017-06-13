<?php
/**
 * Shahriar Theme Comments
 *
 * @package     TMXShahriar
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
if ( post_password_required() )
    return;
?>
<h1 id="comments_title"><?php echo get_comments_number().' '.__('Comments','themeaxe'); ?></h1>

<?php if ( have_comments() ) : ?>

    <?php
    wp_list_comments( array(
        'style'       => 'div',
        'short_ping'  => true,
        'callback' => 'themeaxe_comment',
        'avatar_size' => 60
    ) );
    ?>

    <?php
    // Are there comments to navigate through?
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <p class="screen-reader-text section-heading"><strong><?php esc_html_e( 'More Comments', 'themeaxe' ); ?></strong></p>
            <div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'themeaxe' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'themeaxe' ) ); ?></div>
        </nav><!-- .comment-navigation -->
    <?php endif; // Check for comment navigation ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'themeaxe' ); ?></p>
    <?php endif; ?>

<?php endif; ?>

<!-- Comment form -->
<div id="contact-page clearfix">
    <div class="status alert alert-success" style="display: none"></div>
    <div class="message_heading">
        <h4>Leave a Replay</h4>
        <p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
    </div>
    <div class="form-container row">
        <?php
        $commenter = wp_get_current_commenter();
        $req = sanitize_email(get_option( 'require_name_email' ));
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $fields =  array(
            'author' => '<div class="col-sm-6 form-group"><input id="author" name="author" class="form-control input-form" type="text" placeholder="'. esc_html__( 'Name', 'themeaxe' ) .'" value=""' . esc_attr($aria_req) . '/></div>',
            'email'  => '<div class="col-sm-6 form-group"><input id="email" name="email" class="form-control input-form" type="text" placeholder="'. esc_html__( 'Email', 'themeaxe' ) .'" value="" ' . esc_attr($aria_req) . '/></div>',
            'url'  => '<div class="col-sm-6 form-group"><input id="url" name="url" class="form-control input-form" type="text" placeholder="'. esc_html__( 'URL', 'themeaxe' ) .'" value=""/></div>',
        );

        $comments_args = array(
            'fields' =>  $fields,
            'comment_notes_before'      => '',
            'comment_notes_after'       => '',
            'comment_field'             => '<div class="col-sm-6 form-group"><textarea id="comment" class="form-control input-form" rows="3" placeholder="'. esc_html__( 'Comment', 'themeaxe' ) .'" name="comment" aria-required="true"></textarea></div>',
            'label_submit'              => __('Send Comment','themeaxe'),
            'class_submit'              => 'btn btn-default btn-general',
            'title_reply'               => __('Leave a comment','themeaxe'),
            'title_reply_before'        => '<h5 id="reply-title" class="col-sm-12 comment-reply-title">',
            'title_reply_after'         => '</h4>',
            'cancel_reply_before'       => '<div class="btn-cancel">',
            'cancel_reply_after'        => '</small>',
            'must_log_in'               => '<p class="col-sm-12 must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
            'logged_in_as'              => '<p class="col-sm-12 logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>'
        );
        ob_start();
        comment_form($comments_args);
        $search = array('class="comment-form"','class="form-submit"');
        $replace = array('class="comment-form"','class="col-sm-12 form-submit"');
        echo str_replace($search,$replace,ob_get_clean());
        ?>
    </div>
</div><!-- Comment form -->