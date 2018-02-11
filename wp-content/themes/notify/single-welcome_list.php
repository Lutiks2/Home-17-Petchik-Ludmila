<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package notify
 */
get_header(); ?>

    <div class="container">
        <?php
        while (have_posts()) : the_post();
            ?>
            <div class="features-img features-single-img">
                <?php the_post_thumbnail(); ?>
            </div>
            <h2 class="features-title features-single-title"><?php the_title(); ?></h2>
            <div class="features-content features-single-content">
                <?php the_content(); ?>
            </div>
            <?php
            the_post_navigation();

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>
    </div>

<?php

get_footer();
