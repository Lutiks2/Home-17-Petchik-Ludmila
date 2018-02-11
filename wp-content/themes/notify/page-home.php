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
    <section class="features">
    <div class="container">
        <ul class="features-list clearfix">
            <?php
            $args = [
                'post_type' => 'welcome_list'
            ];
            query_posts($args);
            while (have_posts()) : the_post();
                get_template_part('template-parts/welcome/content', 'welcome');
            endwhile;
            ?>
        </ul>
    </div>
</section>
    <section class=" video-form main-color">
        <div class="container clearfix">
            <div class="notified">
                <h2><?php echo get_theme_mod('set_title'); ?></h2>
                <p><?php echo get_theme_mod('set_text'); ?></p>
                <form action="#" method="post">
                    <input type="email" placeholder="Email Address" name="email" class="email">
                    <input type="submit" value="Notify" class="submit">
                </form>
            </div>
            <div class="video">
                <video width="500" height="307" controls="controls" poster="images/video.png">
                    <source src="<?php echo get_theme_mod('set_video'); ?>">
                </video>
            </div>
        </div>
    </section>

    <?php
    get_footer();
