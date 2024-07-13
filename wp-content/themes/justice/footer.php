<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Justice
 */
?>
         <div class="copyright-wrapper">
        	<div class="inner">
                <div class="copyright">
                    	<p>&copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a>  <?php echo date_i18n( __( 'Y', 'justice' ) ); ?>. <?php _e('Powered by WordPress','justice'); ?></p>               
                </div><!-- copyright --><div class="clear"></div>           
            </div><!-- inner -->
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>