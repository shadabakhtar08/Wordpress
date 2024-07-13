<?php
/**
 * The template for displaying the content.
 * @package Blogza
 */
$layout = esc_attr(get_theme_mod('blogza_content_layout','grid-fullwidth')) == 'grid-right-sidebar' ? '2': '3'; ?>
<div class="bs-masonry-columns c<?php echo $layout ?>">
    <?php while(have_posts()){ the_post();?>

        <!-- bs-posts-sec bs-posts-modul-6 -->
        <div id="post-<?php the_ID(); ?>" <?php post_class('bs-blog-post'); ?>>
        <?php  $url = blogus_get_freatured_image_url($post->ID, 'blogus-medium');
        if($url) { ?>
            <div class="bs-blog-thumb lg back-img" style="background-image: url('');">
        <figure>
        <img src="<?php echo esc_url($url); ?>" alt="<?php the_title();?>">
        <a href="<?php the_permalink(); ?>" class="link-div"></a>
        <?php 
                $blogus_global_category_enable = get_theme_mod('blogus_global_category_enable','true');
                if($blogus_global_category_enable == 'true') { blogus_post_categories(); } ?>
        </figure>
            </div>  
            <article class="small">
        <?php } else { ?>
            <article class="small">
            <?php 
                $blogus_global_category_enable = get_theme_mod('blogus_global_category_enable','true');
                if($blogus_global_category_enable == 'true') { blogus_post_categories(); } 
            } ?> 
                <?php blogus_post_meta(); ?>
                <h4 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
            </article>
        </div>
    <?php } ?>
</div>
<div class="col-md-12 text-center d-md-flex justify-content-center">
    <?php //Previous / next page navigation
        the_posts_pagination( array(
        'prev_text'          => '<i class="fa fa-angle-left"></i>',
        'next_text'          => '<i class="fa fa-angle-right"></i>',
        ) ); 
    ?>
</div>
