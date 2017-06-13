<?php global $oli; ?>
<section class="service-area">
    
    <div class="container">
        <div class="service-rotate">
            <div class="service-instruktorer">
                <div class="title text-center">
                    <h2 class="text-uppercase"><?php echo $oli['ins_title']; ?></h2>
                    <h5><?php echo $oli['ins_subtitle']; ?></h5>
                </div>
                <div class="row">
                    <?php
                        $ins = new WP_Query(array(
                            'post_type' => 'instructor',
                            'posts_per_page' => $oli['ins_count']
                        ));
                        while ($ins->have_posts()): $ins->the_post();
                            get_template_part('parts/content','loop');
                        endwhile; wp_reset_postdata();
                    ?>
                </div>
                <div class="vaer-med-btn med-btn1">
                    <a class="med-btn" href="#">VÆR MED</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="service-instruktorer">
            <div class="title text-center">
                <h2 class="text-uppercase"><?php echo $oli['med_title']; ?></h2>
                <h5><?php echo $oli['med_subtitle']; ?></h5>
            </div>
            <div class="row">
                <?php
                $ins = new WP_Query(array(
                    'post_type' => 'meditationer',
                    'posts_per_page' => $oli['med_count']
                ));
                while ($ins->have_posts()): $ins->the_post();
                    get_template_part('parts/content','loop');
                endwhile; wp_reset_postdata();
                ?>
            </div>
            <div class="vaer-med-btn med-btn1">
                <a class="med-btn" href="#">VÆR MED</a>
            </div>
        </div>
    </div>
    
</section>