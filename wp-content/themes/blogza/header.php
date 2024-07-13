<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package Blogza
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content">
<?php _e( 'Skip to content', 'blogza' ); ?></a>
  <div class="wrapper" id="custom-background-css">
    <!--header--> 
    <header class="bs-headthree six">
      <!-- Main Menu Area-->
      <?php $background_image = get_theme_support( 'custom-header', 'default-image' );
        if ( has_header_image() ) {
          $background_image = get_header_image();
        } ?>
      <div class="bs-header-main d-none d-lg-block" <?php if ( has_header_image() ) { ?> style="background-image:url('<?php echo esc_url($background_image);?>')"<?php } ?>>
        <div class="inner" <?php if ( has_header_image() ) { ?> style="background-color:#00000040;"<?php } ?>>
          <div class="container">
            <div class="row align-items-center">
            
              <div class="navbar-header col-md-6 text-md-start d-none d-lg-block">
              <div class="site-logo">
                      <?php if(get_theme_mod('custom_logo') !== ""){ the_custom_logo(); } ?>
                  </div>
                  <div class="site-branding-text <?php echo esc_attr( display_header_text() ? ' ' : 'd-none'); ?>">
                    <?php if (is_front_page() || is_home()) { ?>
                      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></h1>
                    <?php } else { ?>
                      <p class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></p>
                    <?php } ?>
                      <p class="site-description"><?php echo esc_html(get_bloginfo( 'description' )); ?></p>
                  </div>
              </div>
              <div class="col-lg-6">
                <?php do_action('blogus_action_header_social_section'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Main Menu Area-->
      <div class="bs-menu-full">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-wp">
            <!-- Right nav -->
            <div class="m-header align-items-center">
              <!-- navbar-toggle -->
              <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar-wp" aria-controls="navbar-wp" aria-expanded="false"
                aria-label="Toggle navigation"> 
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-header">
                <div class="site-logo">
                  <?php if(get_theme_mod('custom_logo') !== ""){ the_custom_logo(); } ?>
              </div>
               <div class="site-branding-text <?php echo esc_attr( display_header_text() ? ' ' : 'd-none'); ?>">
                    <p class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></p>
                    <p class="site-description"><?php echo esc_html(get_bloginfo( 'description' )); ?></p>
                </div> 
                
              </div>
              <div class="right-nav"> 
                <?php $blogus_menu_search  = get_theme_mod('blogus_menu_search','true'); 
                  if($blogus_menu_search == true) { ?>
                    <a class="msearch ml-auto" data-bs-target="#exampleModal"  href="#" data-bs-toggle="modal"> 
                      <i class="fa fa-search"></i> 
                    </a>
                  <?php } ?>
              </div>
            </div>
            <!-- /Right nav -->
            <!-- Navigation -->
            <!-- Navigation -->
            <div class="collapse navbar-collapse" id="navbar-wp">
            <?php wp_nav_menu( array(
                      'theme_location' => 'primary',
                      'container'  => 'nav-collapse collapse '.(is_rtl() ? 'navbar-inverse-collapse': ''),
                      'menu_class' => 'nav navbar-nav '.(is_rtl() ? 'sm-rtl': ''),
                      'fallback_cb' => 'blogus_fallback_page_menu',
                      'walker' => new blogus_nav_walker()
                    ) ); ?>
            </div>
            <!-- Right nav -->
            <div class="desk-header right-nav pl-3 ml-auto my-2 my-lg-0 position-relative align-items-center">
              <?php blogus_menu_btns(); ?>
            </div>
            <!-- /Right nav -->
          </div>
        </div>
      </nav>
      <!--/main Menu Area-->
    </header>
<?php
do_action('blogus_action_featured_ads_section');
?>