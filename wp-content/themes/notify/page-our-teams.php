<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package notify
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
<div class="container">
    <main>
        <h2 class="team">Our team</h2>
        <ul class="team-list clearfix">
            <?php

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = [
                'post_type' => 'our_team',
                'order' => 'ASC',
                'posts_per_page' => '3',
                'paged' => $paged,
            ];
            query_posts($args);
            while (have_posts()) : the_post();
                get_template_part('template-parts/team/content', 'team');
            endwhile;
            ?>
        </ul>
        <?php the_posts_pagination($args); ?>
    </main>
</div>

<?php
get_footer();
