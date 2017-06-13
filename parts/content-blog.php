<?php global $oli; ?>
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title text-center">
                    <h2 class="text-uppercase"><?php echo $oli['blog_title']; ?></h2>
                    <h5><?php echo $oli['blog_subtitle']; ?></h5>
                </div>
            </div>
        </div><!-- /.row -->

        <div class="row">
            <?php
            $blog = new WP_Query(array(
                'post_type' => 'post',
                'post_per_page' => $oli['blog_count']
            ));
            while ($blog->have_posts()): $blog->the_post();
                get_template_part('parts/content','blog-loop'); ?>
            <?php endwhile; wp_reset_postdata();
            ?>
        </div><!-- /.row -->
      	
      	<!-- <div class="row all-post-archive">
          <div class="col-sm-12">
          	<div class="vaer-med-btn med-btn1">
             	<a class="med-btn" href="<?php //echo $oli['blog_link']; ?>">Vaer Med</a>
            </div>
          </div>
       	</div><!-- /.row -->
    </div>
</section>