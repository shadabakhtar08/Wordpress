<?php
/*--------------------------------------------------------------------*/
/*     Register Google Fonts
/*--------------------------------------------------------------------*/
function blogza_fonts_url() {
	
    $fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Roboto:100,300,400,500,700,800| Onest Sans:400,500,700&display=swap');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return $fonts_url;
}
function blogza_scripts_styles() {
    wp_enqueue_style( 'blogza-fonts', blogza_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'blogza_scripts_styles' );