<?php
/**
 * @package Bose
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
	<div class="entry-content" id="cont">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Outros -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5100182596497565"
     data-ad-slot="1093417738"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bose' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer footer-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'bose' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'bose' ) );

			if ( ! bose_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( '<i class="fa fa-tags"></i> %2$s <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">Permalink</a>', 'bose' );
				} else {
					$meta_text = __( '<i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">Permalink</a>', 'bose' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( '<i class="fa fa-folder-open"></i> %1$s <i class="fa fa-tags"></i> %2$s <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">Permalink</a>', 'bose' );
				} else {
					$meta_text = __( '<i class="fa fa-folder-open"></i> %1$s <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">Permalink</a>', 'bose' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( '<i class="fa fa-edit"></i> Edit', 'bose' ), '<span class="edit-link">', '</span>' ); ?>

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

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->