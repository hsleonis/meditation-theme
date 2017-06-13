
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="instruktorer text-center">
            <div class="ink-img">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="instruktorer-ser-group">
                <div class="instruk-title">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="instruktorer-overly">
                    <div class="ins-add-btn">
                        <a href="<?php the_permalink(); ?>">&nbsp;</a>
                    </div>
                    <div class="instruk-details">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>