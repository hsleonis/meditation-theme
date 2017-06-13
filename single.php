<?php
/**
 * OliOli WP Theme
 * @author Md. Hasan Shahriar, 2017
 * @email hsleonis2@gmail.com
 */


    get_header();
    while (have_posts()):the_post();
        get_template_part('parts/content','page');
    endwhile;
    get_footer();

