<?php
/**
 * Template name: Instructor Carousel
 */

    get_header();

    get_template_part('parts/content','slider');
		get_template_part('parts/content','about');
    get_template_part('parts/content','instructor-slide');
    get_template_part('parts/content','blog');
		get_template_part('parts/content','text');
		get_template_part('parts/content','service');

    get_footer();