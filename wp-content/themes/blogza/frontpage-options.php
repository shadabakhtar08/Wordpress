<?php

/**
 * Option Panel
 *
 * @package Blogza
 */

function blogza_customize_register($wp_customize) {

    $blogza_default = blogza_get_default_theme_options();

}
add_action('customize_register', 'blogza_customize_register');