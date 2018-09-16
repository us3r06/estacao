<?php
/**
 * Template Name: Page Builder
 *
 * Use this template to build pages with Page Builders.
 * 
 * @package HitMag
 */

get_header(); 

    while ( have_posts() ) : the_post(); ?>

        <main id="main" class="site-main" role="main">

            <?php the_content(); ?>

        </main>

    <?php

    endwhile; // End of the loop.

?>

<?php get_footer();