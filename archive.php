<?php
/**
 * Template name: Blog
 * OliOli WP Theme Archive
 * @author Md. Hasan Shahriar, 2017
 * @email hsleonis2@gmail.com
 */


    get_header();
?>
<section class="page-content-wrapper">
    	<div class="container">
          <div class="row">
						<?php
              while (have_posts()):the_post();
                  get_template_part('parts/content','blog-loop');
              endwhile;
            ?>
          </div>
    	</div>
  </section>
<?php
    get_footer();