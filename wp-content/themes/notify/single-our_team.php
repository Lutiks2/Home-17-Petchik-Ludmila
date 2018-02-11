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
            <div class="features-team-img">
                <?php the_post_thumbnail(); ?>
            </div>
            <h2 class="features-title features-single-title"><?php the_title(); ?></h2>
            <p>Post:<span class="field"><?php the_field('post'); ?></span></p>
            <p>Hobby:<span class="field"><?php the_field('hobby'); ?></span></p>
            <div class="features-content features-single-content">
            </div>
            <?php the_content(); ?>
            <?php the_post_navigation(array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">Next page</span> ',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">Previous page</span> ',
                'screen_reader_text' => false,
            )); ?>
            <?php

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>
    </div>

<?php

get_footer();