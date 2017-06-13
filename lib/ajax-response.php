<?php
/**
 * Theme Ajax Responses
 *
 * @package     Themeaxe
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

/*-------------------------------------------------------
 *                    Team Modal
 *-------------------------------------------------------*/
add_action( 'wp_ajax_nopriv_post_modal_data', 'post_modal_data' );
add_action( 'wp_ajax_post_modal_data', 'post_modal_data' );

if(!function_exists('post_modal_data')):
    function post_modal_data() {
        if(isset($_POST['post_id'])){
            $id = $_POST['post_id'];
            $team = new WP_Query( array(
                'post_type' => 'any',
                'p' => $id
            ) );

            while($team->have_posts()):
                $team->the_post();
                ?>
                <div class="col-xs-4 col-mb-12 height-inherit" >
                    <div class="modal-image">
                        <img class="img-responsive" src="<?php the_post_thumbnail_url('full'); ?>" alt="image"/>
                    </div>
                </div>
                <div class="col-xs-8 col-mb-12 featured-column">
                    <button type="button" class="close modal-close" data-dismiss="modal">&times;</button>
                    <div class="row modal-info content-inner-padding">
                        <div class="popup-title text-uppercase">
                            <h5><?php the_title(); ?></h5>
                        </div>

                        <div>
                            <div class="popup-subtitle text-uppercase">
                                <?php echo get_post_meta(get_the_ID(),'_tmx_team_designation', true) ?>
                            </div>
                            <div class="t-member-tag">
                                <?php the_tags('',' ',''); ?>
                            </div>
                        </div>

                        <div class="social-link">
                            <?php if(get_post_meta(get_the_ID(),'_tmx_team_facebook', true)): ?>
                                <span><a class="fa fa-facebook" title="Facebook Profile" target="_blank" href="<?php echo esc_url(get_post_meta(get_the_ID(),'_tmx_team_facebook', true)); ?>"></a></span>
                            <?php endif; ?>

                            <?php if(get_post_meta(get_the_ID(),'_tmx_team_twitter', true)): ?>
                                <span><a class="fa fa-twitter" title="Twitter Profile" target="_blank" href="<?php echo esc_url(get_post_meta(get_the_ID(),'_tmx_team_twitter', true)); ?>"></a></span>
                            <?php endif; ?>

                            <?php if(get_post_meta(get_the_ID(),'_tmx_team_google_plus', true)): ?>
                                <span><a class="fa fa-google-plus" title="Google Plus Profile" target="_blank" href="<?php echo esc_url(get_post_meta(get_the_ID(),'_tmx_team_google_plus', true)); ?>"></a></span>
                            <?php endif; ?>

                            <?php if(get_post_meta(get_the_ID(),'_tmx_team_linkedin', true)): ?>
                                <span><a class="fa fa-linkedin" title="Linkedin Profile" target="_blank" href="<?php echo esc_url(get_post_meta(get_the_ID(),'_tmx_team_linkedin', true)); ?>"></a></span>
                            <?php endif; ?>

                            <?php if(get_post_meta(get_the_ID(),'_tmx_team_skype', true)): ?>
                                <span><a class="fa fa-skype" title="Skype ID" target="_blank" href="<?php echo esc_url(get_post_meta(get_the_ID(),'_tmx_team_skype', true)); ?>"></a></span>
                            <?php endif; ?>

                            <?php if(get_post_meta(get_the_ID(),'_tmx_team_email', true)): ?>
                                <span><a class="fa fa-envelope" title="Email" target="_blank" href="mailto:<?php echo esc_attr(get_post_meta(get_the_ID(),'_tmx_team_email', true)); ?>"></a></span>
                            <?php endif; ?>
                        </div>

                        <div class="vartical-line"></div>

                        <div class="modal-description div-scroller">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        }
        else{
            return __('Not found.','themeaxe');
        }

        wp_die();
    }
endif;

/*-------------------------------------------------------
 *                     Post Like
 *-------------------------------------------------------*/
add_action( 'wp_ajax_nopriv_tmx_post_like', 'nopriv_tmx_post_like' );
add_action( 'wp_ajax_tmx_post_like', 'tmx_post_like' );

if(!function_exists('tmx_post_like')):
    function tmx_post_like() {
        global $current_user;

        if(isset($_POST['post_id'])){
            $id = $_POST['post_id'];
            $user = $current_user->ID;

            $likes = get_post_meta($id, '_tmx_post_likes')[0];
            $user_likes = get_user_meta($user, '_tmx_user_likes')[0];

            if(is_string($likes)){
                $likes = array($likes);
            };
            if(is_string($user_likes)){
                $user_likes = array($user_likes);
            };

            if(in_array($user, $likes)){
                if(($key = array_search($user, $likes)) !== false) {
                    unset($likes[$key]);
                }

                if(($key = array_search($id, $user_likes)) !== false) {
                    unset($user_likes[$key]);
                }
            }
            else{
                array_push($likes, $user);
                array_push($user_likes, $id);
            }
            // $likes=$user_likes=array();

            $total = count($likes);
            update_post_meta($id,'_tmx_post_likes', $likes);
            update_user_meta($user,'_tmx_user_likes', $user_likes);

            wp_send_json_success($total);
        }

        wp_die();
    }
endif;

if(!function_exists('nopriv_tmx_post_like')):
    function nopriv_tmx_post_like() {
        wp_send_json_error( __('Please login to like post.','themeaxe') );

        wp_die();
    }
endif;