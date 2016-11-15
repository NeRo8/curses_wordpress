<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 10.11.16
 * Time: 18:15
 *
 */
get_header();
if (have_posts()):
    while (have_posts()):the_post();
        the_content();
    endwhile;
endif;
get_footer();
?>