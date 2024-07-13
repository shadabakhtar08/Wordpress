<?php
/**
 * Theme functions and definitions
 *
 * @package Blogza
 */

if ( ! function_exists( 'blogza_enqueue_styles' ) ) :
	/**
	 * @since 0.1
	 */
	function blogza_enqueue_styles() {
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style( 'blogus-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'blogza-style', get_stylesheet_directory_uri() . '/style.css', array( 'blogus-style-parent' ), '1.0' );
		wp_dequeue_style( 'blogus-default',get_template_directory_uri() .'/css/colors/default.css');
		wp_enqueue_style( 'blogza-default-css', get_stylesheet_directory_uri()."/css/colors/default.css" );
		wp_enqueue_style( 'blogza-dark', get_stylesheet_directory_uri() . '/css/colors/dark.css');

		if(is_rtl()){
			wp_enqueue_style( 'blogus_style_rtl', trailingslashit( get_template_directory_uri() ) . 'style-rtl.css' );
	    }
		
	}

endif;
add_action( 'wp_enqueue_scripts', 'blogza_enqueue_styles', 9999 );

add_action( 'customize_register', 'blogza_customizer_rid_values', 1000 );
function blogza_customizer_rid_values($wp_customize) {

  $wp_customize->remove_control('blogus_content_layout');
  $wp_customize->remove_section('frontpage_main_banner_section_settings');
  $wp_customize->remove_control('blogus_drop_caps_enable');
  $wp_customize->remove_control('blogus_blog_content_settings');
  $wp_customize->remove_control('blogus_blog_content');
  $wp_customize->remove_control('blogus_primary_menu_color');
  $wp_customize->remove_control('primary_menu_bg_color');

}

function blogza_theme_setup() {

//Load text domain for translation-ready
load_theme_textdomain('blogza', get_stylesheet_directory() . '/languages');

require( get_stylesheet_directory() . '/customizer-default.php' );
require( get_stylesheet_directory() . '/frontpage-options.php' );
require( get_stylesheet_directory() . '/general-options.php' );
require( get_stylesheet_directory() . '/font.php' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
} 
add_action( 'after_setup_theme', 'blogza_theme_setup' );


if( ! function_exists( 'blogza_add_menu_description' ) ) :
    
    function blogza_add_menu_description( $item_output, $item, $depth, $args ) {
        if($args->theme_location != 'primary') return $item_output;
        
        if ( !empty( $item->description ) ) {
            $item_output = str_replace( $args->link_after . '</a>', '<span class="menu-link-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
        }
        return $item_output;
    }
    add_filter( 'walker_nav_menu_start_el', 'blogza_add_menu_description', 10, 4 );
endif;

$args = array(
    'default-color' => '#f4f4f4',
    'default-image' => '',
	);
add_theme_support( 'custom-background', $args );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blogza_widgets_init() {

	$blogus_footer_column_layout = esc_attr(get_theme_mod('blogus_footer_column_layout',3));
	
	$blogus_footer_column_layout = 12 / $blogus_footer_column_layout;
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Widget Area', 'blogza' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="bs-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="bs-widget-title"><h2 class="title">',
		'after_title'   => '</h2></div>',
	) );


	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area', 'blogza' ),
		'id'            => 'footer_widget_area',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="col-md-'.$blogus_footer_column_layout.' rotateInDownLeft animated bs-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="bs-widget-title"><h2 class="title">',
		'after_title'   => '</h2></div>',
	) );

}
add_action( 'widgets_init', 'blogza_widgets_init' );

function blogza_bg_image_wrapper(){
	?>
	<div class="blogza-background-wrapper">
		<div class="squares">
			<span class="square"></span>
			<span class="square"></span>
			<span class="square"></span>
			<span class="square"></span>
			<span class="square"></span>
		</div>
		<div class="circles">
			<span class="circle"></span>
			<span class="circle"></span>
			<span class="circle"></span>
			<span class="circle"></span>
			<span class="circle"></span>
		</div>
		<div class="triangles">
			<span class="triangle"></span>
			<span class="triangle"></span>
			<span class="triangle"></span>
			<span class="triangle"></span>
			<span class="triangle"></span>
		</div>
	</div>
	<?php
} 
add_action('wp_footer','blogza_bg_image_wrapper');
