<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package notify
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header class="header" style="background: url('<?php echo get_theme_mod('set_background'); ?>') no-repeat center/cover">
        <div class="container clearfix">
            <div class="welcome">
                <h1>
                    <a href="#" class="logo">
                        <?php the_custom_logo(); ?>
                    </a>
                </h1>
                <p><?php bloginfo( 'description' ); ?></p>
                <?php wp_nav_menu(array(
                    'theme_location' => 'header',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'menu_class' => 'welcome-list clearfix',
                )); ?>
            </div>
            <img src="<?php echo get_header_image(); ?>" alt="hand" class="hand">
        </div>
    </header>

    <div id="content" class="site-content">
