<?php global $oli; ?>
<div class="col-sm-4">
    <a href="<?php the_permalink(); ?>">
        <div class="post-thumb">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive" />
        </div>
        <div class="post-title">
            <h5><?php the_title(); ?></h5>
        </div>
        <div class="post-date"><span><?php echo get_the_date(); ?></span></div>
    </a>
    <div class="post-excerpt">
        <?php the_excerpt(); ?>
    </div>
  	<?php if(is_home()): ?>
  	<a class="btn-read-more" href="<?php the_permalink(); ?>">Læs mere</a>	
  	<?php else: ?>
  	<a class="btn-read-more" href="<?php echo $oli['blog_link']; ?>">Læs mere</a>
  	<?php endif; ?>
    <!-- <div class="btn-bg med-btn3">
        <a class="med-btn" href="<?php //the_permalink(); ?>">Læs mere</a>
    </div> -->
</div>
