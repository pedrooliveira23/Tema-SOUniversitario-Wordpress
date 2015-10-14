<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bose
 */
?>
	</div>
	</div><!-- #content -->
</div><!-- #page -->

<?php get_template_part('sidebar', 'footer'); ?>
<footer class="page-footer grey darken-4" style="margin-bottom: 0px;">
	<div class="footer-copyright">
		<div class="container center">
			<a href="/">SOUniversitário</a> © 2015 Todos os direitos reservados. Desenvolvido com <a href="http://wordpress.org" target="_blank">WordPress</a>, com modificação do tema <a href="https://inkhive.com/product/bose/" target="_blank">Bose</a>. Veja <a href="http://souniversitario.com/quem-somos/">Quem Somos</a>
		</div>
	<!--<div class="footer-menu col-md-8">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
	</div>-->
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>