<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package notify
 */

?>

</div><!-- #content -->

<footer class="main-color footer">
    <div class="container">
        <nav>
            <?php wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'menu_class' => 'footer-nav',
            )); ?>
        </nav>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
