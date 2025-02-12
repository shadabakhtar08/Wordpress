<?php
/**
 * @package Justice
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>

    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->

    
        <div class="postmeta">
            <div class="post-date"><?php echo get_the_date(); ?></div><!-- post-date -->
            <div class="post-comment"> | <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
            <div class="clear"></div>
        </div><!-- postmeta -->
        
        <div class="entry-content">
		<?php 
        if (has_post_thumbnail() ){
			echo '<div class="post-thumb">';
            the_post_thumbnail();
			echo '</div><br />';
		}
        ?>
        <?php the_content(); ?>
        </div><!-- .entry-content --><div class="clear"></div>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'justice' ),
            'after'  => '</div>',
        ) );
        ?>
        <div class="postmeta">
            <div class="post-categories"><?php the_category( __( ', ', 'justice' ));?></div>
            <div class="post-tags"><?php the_tags(' | Tags: ', ', ', '<br />'); ?> </div>
            <div class="clear"></div>
        </div><!-- postmeta -->
    
   
    <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'justice' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->

</article>