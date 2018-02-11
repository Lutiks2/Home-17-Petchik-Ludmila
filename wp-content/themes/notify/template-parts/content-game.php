<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package notify
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div>My game</div>
    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
    <p><?php the_field('book'); ?></p>
</article><!-- #post-<?php the_ID(); ?> -->
