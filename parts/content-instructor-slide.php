<?php global $oli; ?>
<section id='instruktorer' class="service-area">

  <div class="container ser-ins-title-wrapper">
      <div class="row">
        <div class="col-sm-12">
        		<div class="title text-center">
              <h2 class="text-uppercase"><?php echo $oli['ins_title']; ?></h2>
              <h5><?php echo $oli['ins_subtitle']; ?></h5>
          	</div>
        </div>
      </div>
  	</div>
  
  <div class="service-instruktorer">      
  		<div class="container">
            <div class="row">
                <div class="large-12">
                    <div class="ser-instruktorer-group">
                        <div class="owl-carousel owl-theme team-carousel">
                            <?php
                            $ins = new WP_Query(array(
                                'post_type' => 'instructor',
                                'posts_per_page' => $oli['ins_car_count']
                            ));
                            while ($ins->have_posts()): $ins->the_post();
                                get_template_part('parts/content','instructor-loop');
                            endwhile; wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section id='meditationer' class="service-area service-med-area">
    <div class="container ser-med-title-wrapper">
      <div class="row">
        <div class="col-sm-12">
        		<div class="title text-center">
                <h2 class="text-uppercase"><?php echo $oli['med_title']; ?></h2>
                <h5><?php echo $oli['med_subtitle']; ?></h5>
            </div>
        </div>
      </div>
  	</div>
  
  <div class="service-meditationer">      
  		<div class="container-fluid">
            <div class="row">
                <div class="large-12">
                    <div class="ser-meditationer-group">
                        <div class="owl-carousel owl-theme team-carousel">
                            <?php
                            $ins = new WP_Query(array(
                                'post_type' => 'meditationer',
                                'posts_per_page' => $oli['med_car_count']
                            ));
                            while ($ins->have_posts()): $ins->the_post();
                                get_template_part('parts/content','instructor-loop');
                            endwhile; wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</section>