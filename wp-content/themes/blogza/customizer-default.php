<?php
/**
 * Default theme options.
 *
 * @package Blogza
 */

if (!function_exists('blogza_get_default_theme_options')):

/**
 * Get default theme options
 *
 * @since 1.0.0
 *
 * @return array Default theme options.
 */
function blogza_get_default_theme_options() {

    $defaults = array();

    $defaults['select_recent_news_category'] = 0;
    $defaults['show_main_news_section'] = 0;

	return $defaults;

}
endif;