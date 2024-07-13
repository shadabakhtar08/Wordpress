<?php
/**
 * @package Justice
 * Setup the WordPress core custom header feature.
 *
 * @uses justice_header_style()

 */
function justice_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'justice_custom_header_args', array(
		'default-text-color'     => '000000',
		'width'                  => 1600,
		'height'                 => 400,
	) ) );
}
add_action( 'after_setup_theme', 'justice_custom_header_setup' );

if ( ! function_exists( 'justice_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see justice_custom_header_setup().
 */
function justice_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.header{
			background-image: url(<?php echo esc_url(get_header_image()); ?>);
			background-position: center top;
		}
		.logo h1 a { color:#<?php echo esc_html(get_header_textcolor()); ?>;}
	<?php endif; ?>	
	</style>
	<?php
	// If the header text option is untouched, let's bail.
	if ( display_header_text() ) {
		return;
	}

	// If the header text has been hidden.
	?>
    <style type="text/css">
		.logo {
			margin: 0 auto 0 0;
		}

		.logo h1,
		.logo p{
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
    </style>
	
    <?php
	
}
endif; // justice_header_style

if ( ! function_exists( 'justice_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see justice_custom_header_setup().
 */
function justice_admin_header_style() {?>
	<style type="text/css">
	.appearance_page_custom-header #headimg { border: none; }
	</style><?php
}
endif; // justice_admin_header_style


add_action( 'admin_head', 'justice_admin_header_css' );
function justice_admin_header_css(){ ?>
	<style>pre{white-space: pre-wrap;}</style><?php
}