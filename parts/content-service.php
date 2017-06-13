<?php global $oli; ?>
<section id='subscriptions' class="med-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
              <div class='service-img'>
                <img src='<?php echo $oli['ser_img']['url']; ?>' class='img-responsive' />
              </div>
          	</div>
            
            <div class="col-sm-8">
                <div class="abonnement">
                    <h3 class="text-uppercase"><?php echo $oli['ser_title']; ?></h3>
                    <p><?php echo $oli['ser_subtitle']; ?></p>
                </div>
                <?php
                $ins = new WP_Query(array(
                    'post_type' => 'services',
                    'post_per_page' => $oli['ser_count'],
                  	'order' => 'ASC'
                ));
                while ($ins->have_posts()): $ins->the_post();
                    ?>
                    <div class="row prove-med">
                        <div class="col-sm-9">
                            <div class="med">
                                <h4 class="text-uppercase"><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="btn-bg med-<?php echo get_post_meta(get_the_ID(), '_tmx_services_btn', true); ?>">
                                <a class="med-btn" href="<?php echo get_post_meta(get_the_ID(), '_tmx_services_link', true); ?>"><?php echo get_post_meta(get_the_ID(), '_tmx_services_txt', true); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile; wp_reset_postdata();
                ?>
            </div>
            
        </div><!-- /.row -->
    </div>
</section>