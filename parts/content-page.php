  <section class="page-content-wrapper">
    	<div class="container">
          <div class="row">
            <div class="col-sm-12">
              <?php if(has_post_thumbnail()): ?>
              <div class="page-thumb"><img src="<?php the_post_thumbnail_url('full'); ?>" class="img-responsive" /></div>
              <?php endif; ?>
              <div class="page-title"><h3><?php the_title(); ?></h3></div>
              <div class="page-date"><?php echo get_the_date(); ?></div>
              <div class="page-content"><?php the_content(); ?></div>
            </div>
          </div>
    	</div>
  </section>