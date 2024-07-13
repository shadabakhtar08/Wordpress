<?php
/**
 * @package Justice
 */
?>

<div class="article-wrapper">
<article id="post-<?php the_ID(); ?>" <?php post_class('homepage-article'); ?>>

	
	<div class="featured-image">
	<?php if (has_post_thumbnail()) : ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('justice-homepage-thumb'); ?></a>
	<?php else: ?>	
		<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()."/images/dthumb.jpg"); ?>"></a>
	<?php endif; ?>	
	</div>
	
	<header class="entry-header">
	
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark">
				<?php the_title(); ?>
			</a></h1>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
</div>