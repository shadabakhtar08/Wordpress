<?php

/**
 * Option Panel
 *
 * @package Blogza
 */

function blogza_general_customize_register($wp_customize) {

    $blogza_default = blogza_get_default_theme_options();

    $wp_customize->add_setting(
        'blogza_content_layout', array(
        'default'           => 'grid-fullwidth',
        'sanitize_callback' => 'blogus_sanitize_radio',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control(
        new blogus_Radio_Image_Control( 
            // $wp_customize object
            $wp_customize,
            // $id
            'blogza_content_layout',
            // $args
            array(
                'settings'      => 'blogza_content_layout',
                'section'       => 'blog_layout_section',
                'choices'       => array(
                    'align-content-left' => get_template_directory_uri() . '/images/fullwidth-left-sidebar.png',  
                    'full-width-content'    => get_template_directory_uri() . '/images/fullwidth.png',
                    'align-content-right'    => get_template_directory_uri() . '/images/right-sidebar.png',
                    'grid-left-sidebar' => get_template_directory_uri() . '/images/grid-left-sidebar.png',
                    'grid-fullwidth' => get_template_directory_uri() . '/images/grid-fullwidth.png',
                    'grid-right-sidebar' => get_template_directory_uri() . '/images/grid-right-sidebar.png',
                )
            )
        )
    );
}
add_action('customize_register', 'blogza_general_customize_register');