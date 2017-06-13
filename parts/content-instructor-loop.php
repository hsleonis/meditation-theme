            <div class="item instruktorer-item">
                <div class="instruktorer text-center">
                    <div class="ink-img" data-toggle="modal" data-target="#instruktorer-modal" data-id="<?php the_ID(); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                      	<div class="_post-title hide"><?php the_title(); ?></div>
                      	<div class="_post-content hide"><?php the_content(); ?></div>
                      	<div class="ins-add-btn">
                          <a href="#">ADD</a>
                      	</div>
                    </div>
                    <div class="instruktorer-ser-group">
                        <div class="instruk-title">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>                       
            </div>