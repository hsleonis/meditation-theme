<?php global $oli; ?>
<section class="slider-area">
    <div class="container">

            <div class="row">
                
              	<div class="col-sm-9 slider-main-col">
                    <div class="slider-main">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <?php
                            $ins = new WP_Query(array(
                                'post_type' => 'slider',
                                'post_per_page' => -1
                            ));
                            while ($ins->have_posts()): $ins->the_post();
                            ?>
                                <div class="item">
                                    <div class="slider-item" style="background-image:url('<?php the_post_thumbnail_url("full"); ?>');">
                                        <?php the_content(); ?>
                                    </div>
                                </div>    
                            <?php  
                            endwhile; wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                  	<div class="slider-image">
                      <a href="<?php echo $oli['slide_img_link']; ?>" target="_blank"><img class='img-responsive' src="<?php echo $oli['slide_img']['url']; ?>" /></a>
                      <div class="slider-image-text"><?php echo $oli['slide_img_txt']; ?></div>
                  	</div>
                </div>
              
              	<div class="col-sm-3 slider-content-col">
                  <div class="slider-content">
                    <div class="slider-content-title">
                      <h3><?php echo $oli['slide_title']; ?></h3>
                      <h6><?php echo $oli['slide_subtitle']; ?></h6>
                    </div>
                    <div class="slider-content-desc">
                      <div class="slider-after-title"><?php echo $oli['slide_aftitle']; ?></div>
                      <div class="slider-desc"><?php echo $oli['slide_text']; ?></div>
                      <div class="slider-content-link">
                        <a href="<?php echo $oli['slide_btn_link']; ?>"><?php echo $oli['slide_btn_txt']; ?></a>
                    	</div>
                    </div>
                  </div>
              	</div>
              
            </div><!-- /.row -->

    </div>
</section>