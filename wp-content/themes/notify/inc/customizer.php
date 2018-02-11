<?php
/**
 * notify Theme Customizer
 *
 * @package notify
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function notify_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'notify_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'notify_customize_partial_blogdescription',
        ));
    }
    // add header background image

    $wp_customize->add_section( 'background', array(
        'title' => __( 'Custom header background' ),
        'description' => __( 'Add background here' ),
        'panel' => '', // Not typically needed.
        'priority' => 160,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ) );
    $wp_customize->add_setting( 'set_background', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'set_background', array(
        'label' => __( 'Featured Home Page Image','notify' ),
        'section' => 'background',
         'type' => 'background',
    ) ) );
// page list
    $wp_customize->add_section( 'page_list', array(
        'title' => __( 'Page list' ),
        'description' => __( 'Page list' ),
        'panel' => '', // Not typically needed.
        'priority' => 120,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ) );
    $wp_customize->add_setting( 'set_list', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ) );
    $wp_customize->add_control('set_list', array(
        'label' => __( 'List Page','notify' ),
        'section' => 'page_list',
        'type' => 'dropdown-pages',
    ) );
// video panel
    $wp_customize->add_panel( 'video_section', array(
        'title' => __( 'Video section' ),
        //'description' => $description, // Include html tags such as <p>.
        'priority' => 100, // Mixed with top-level-section hierarchy.
    ) );
    // title to video section
    $wp_customize->add_section( 'video_title', array(
        'title' => __( 'Title section' ),
        'description' => __( 'Add your title' ),
        'panel' => 'video_section', // Not typically needed.
        'priority' => 110,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ) );
    $wp_customize->add_setting( 'set_title', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ) );
    $wp_customize->add_control('set_title', array(
        'label' => __( 'Title your section','notify' ),
        'section' => 'video_title',
        'type' => 'textarea',
    ) );
    // video section text
    $wp_customize->add_section( 'video_text', array(
        'title' => __( 'Text section' ),
        'description' => __( 'Add your text' ),
        'panel' => 'video_section', // Not typically needed.
        'priority' => 110,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ) );
    $wp_customize->add_setting( 'set_text', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ) );
    $wp_customize->add_control('set_text', array(
        'label' => __( 'Your text','notify' ),
        'section' => 'video_text',
        'type' => 'textarea',
    ) );
    // video section - video
    $wp_customize->add_section( 'video', array(
        'title' => __( 'Video' ),
        'description' => __( 'Add your video' ),
        'panel' => 'video_section', // Not typically needed.
        'priority' => 110,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ) );
    $wp_customize->add_setting( 'set_video', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ) );
    $wp_customize->add_control( 'set_video', array(
        'label' => __( 'Your video','notify' ),
        'section' => 'video',
        'type' => 'url',
    ) );
}

add_action('customize_register', 'notify_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function notify_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function notify_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function notify_customize_preview_js()
{
    wp_enqueue_script('notify-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'notify_customize_preview_js');

