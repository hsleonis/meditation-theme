<?php
/**
 * OliOli WP Theme Index
 * @author Md. Hasan Shahriar, 2017
 * @email hsleonis2@gmail.com
 */


    get_header();
?>
<section class="page-content-wrapper">
    	<div class="container">
          <div class="row">
            <div class="col-sm-12">
						<?php
              while (have_posts()):the_post();
                  get_template_part('parts/content','blog-loop');
              endwhile;
              
              themeaxe_pagination();
            ?>
          	</div>
            
            <!-- <div class="col-sm-3">
              <?php /*if ( is_active_sidebar( 'archive-sidebar' ) ) : ?>
                <ul id="sidebar">
                  <?php dynamic_sidebar( 'archive-sidebar' ); ?>
                </ul>
              <?php endif; */ ?>
            </div> -->
            
          </div>
    	</div>
  </section>
<?php
    get_footer();