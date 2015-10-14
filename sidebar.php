<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Bose
 */
?>
<div id="secondary" class="widget-area col-md-4" role="complementary">
	<aside id="recent_post" class="widget">
		<?php if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>
			<h5>Outros</h5>
			<ul>
<li><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SOUniversitario -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5100182596497565"
     data-ad-slot="3628081732"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></li>
				<?php
				$recent_posts = wp_get_recent_posts();
				foreach( $recent_posts as $recent ){
					echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .get_the_post_thumbnail($recent["ID"]) .'<p class="wid">'.   $recent["post_title"].'</p></a> </li> ';
				}
				?>
			</ul>
		</aside>

			<!--<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'bose' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>-->

			<!--<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'bose' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>-->
			
			<!--<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>-->

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->

<script>
	var div1 = document.getElementById('primary-mono').offsetHeight;
	document.getElementById('recent_post').style.height=div1+"px";
</script>