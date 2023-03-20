<?php
/**
 * Template Name: Template inner
 * Template Post Type: post, page
 *
 * @package leadpops
 * @subpackage mortgage_leadpops
 */

get_header('inner');

/* Start the Loop */
while (have_posts()) :
    the_post();
    get_template_part('template-parts/content/content-page-inner');

    // If comments are open or there is at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
endwhile; // End of the loop.

get_footer('inner');
