<section class="slider-area">
    <div class="container">
        <div class="slider-bg fixed-bg">
            <div class="row">
                <div class="col-md-4 col-md-offset-8 col-sm-6 col-sm-offset-6 col-xs-10 col-xs-offset-2">
                    <div class="slider-text">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <?php
                            $ins = new WP_Query(array(
                                'post_type' => 'slider',
                                'post_per_page' => -1
                            ));
                            while ($ins->have_posts()): $ins->the_post();
                            ?>
                                <div class="item">
                                    <div class="slider-item">
                                        <h1><?php the_title(); ?></h1>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>    
                            <?php  
                            endwhile; wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>