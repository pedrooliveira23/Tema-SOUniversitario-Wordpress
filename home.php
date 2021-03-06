<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bose
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-12">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SOUniversitario -->
<ins class="adsbygoogle"
     style="display:block; margin: 20px 0;"
     data-ad-client="ca-pub-5100182596497565"
     data-ad-slot="3628081732"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		<div id="home-title">

			<span><?php _e('Artigos Recentes','bose'); ?></span>
		</div>
		<main id="main" class="site-main" role="main">
		<?php $count = 0; ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					 do_action('bose-layout');
					
					
					$count++;
				?>
			<?php endwhile; ?>
			<?php echo "</div><!--.row-->"; ?>
			
			<?php bose_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SOUniversitario -->
<ins class="adsbygoogle"
     style="display:block; margin: 20px 0;"
     data-ad-client="ca-pub-5100182596497565"
     data-ad-slot="3628081732"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

	</div><!-- #primary -->

<?php get_footer(); ?>