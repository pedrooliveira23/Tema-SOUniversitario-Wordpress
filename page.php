<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Bose
 */

get_header(); ?>
	<div id="primary-mono" class="content-area  col-md-8"> <!--col-md-8-->

	<?php (has_post_thumbnail()) ? the_post_thumbnail() : "" ?>
	<header class="entry-header">
		<div class="entry-meta">
			<?php bose_posted_on(); ?>
		</div><!-- .entry-meta -->
		<div class="header-title"><!--col-md-12-->
		<span>
		<?php the_title(); ?>
		</span>
	</div>
	</header><!-- .entry-header -->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SOUniversitario -->
<ins class="adsbygoogle"
     style="display:block;"
     data-ad-client="ca-pub-5100182596497565"
     data-ad-slot="3628081732"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
