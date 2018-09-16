<?php
/**
 * Template Name: Page Builder Full Width
 *
 * Use this template to build pages with Page Builders.
 * 
 * @package HitMag
 */

get_header(); ?>

</div><!-- .hm-container -->

<?php

    while ( have_posts() ) : the_post(); ?>

        <main id="main" class="site-main" role="main">

            <?php the_content(); ?>

        </main>

    <?php

    endwhile; // End of the loop.

?>

<div class="hm-container">

<?php get_footer();