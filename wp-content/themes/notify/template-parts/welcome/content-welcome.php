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
    <div class="features-img">
        <?php the_post_thumbnail(); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="features-title">
        <?php the_title();?>
    </a>
    <div class="features-content">
        <?php  the_excerpt(); ?>
    </div>
</li><!-- #post-<?php the_ID(); ?> -->
