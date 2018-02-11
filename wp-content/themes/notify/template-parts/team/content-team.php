<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package notify
 */

?>

<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="team-img">
        <?php the_post_thumbnail(); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="features-title team-title">
        <?php the_title();?>
    </a>
    <div class="features-content team-content">
<!--        --><?php //the_content(); ?>
        <?php the_field('post'); ?>
    </div>
    <p><?php the_field('book'); ?></p>
</li><!-- #post-<?php the_ID(); ?> -->
