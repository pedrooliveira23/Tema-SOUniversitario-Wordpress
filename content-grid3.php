<?php
/**
 * @package Bose
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-3 col-sm-6 grid3'); ?>>
	
<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
	<div class="out-thumb col-md-12">
	<div class="featured-thumb col-md-12">
		<?php if (has_post_thumbnail()) : ?>	
			<?php the_post_thumbnail('grid3'); ?>
		<?php else: ?>
			<img src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>">
		<?php endif; ?>
	</div><!--.featured-thumb-->
	<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			
				<span class="entry-excerpt"><?php echo substr(get_the_excerpt(),0,200).(get_the_excerpt() ? "..." : "" ); ?></span>
			
		</header><!-- .entry-header -->

	</div><!--.out-thumb-->
</a>


</article><!-- #post-## -->