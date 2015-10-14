<?php
/**
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Bose
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php global $option_setting; ?>
	<div id="pagina" class="hfeed site">

		<header>
			<div class="navbar-fixed">
				<nav class="grey darken-4">
					<div class="nav-wrapper">
						<a id="logo" href="/" class="brand-logo"><img src="<?php echo esc_url( home_url('/wp-content/themes/souniversitario/assets/images/logo.png')); ?>"/></a>
						<a href="#" data-activates="menu" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
						<ul class="right hide-on-med-and-down">
							<li><a href="/">Home</a></li>
							<li class="widget widget_search"><?php get_search_form(); ?></li>
						</ul>
						<ul class="side-nav" id="menu">
							<li><a href="/">Home</a></li>
							<li class="widget widget_search"><?php get_search_form(); ?></li>
						</ul>
					</div>
				</nav>
			</div>

	<!--<div class="container">
		<div class="site-branding col-md-6">
				<?php if (isset($option_setting['logo']['url'])) : ?>
					<?php if( $option_setting['logo']['url'] != "" ) : ?>
						<div id="site-logo">
							<a href="<?php echo esc_url( home_url( ) ); ?>"><img src="<?php echo esc_url($option_setting['logo']['url']) ?>"></a>
						</div>
					<?php else : ?>	
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-hover="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<?php endif; ?>	
				<?php else : ?>	
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-hover="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php endif; ?>	
		</div>
	
		<div id="top-right" class="col-md-6">
			<?php get_template_part('searchform', 'top'); ?>
			<?php if (isset($option_setting['enable-social-icons'])) : 
						if($option_setting['enable-social-icons']) : ?>
							<div id="social-icons" class="col-md-6">
								<?php get_template_part('social', 'soshion'); ?>
							</div>
						<?php endif;
					endif; ?>
		</div>
	</div><!--.container-->
</header><!-- #masthead -->

<!--<div class="container">
	<div id="top-nav" class="col-md-12">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'bose' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bose' ); ?></a>
				
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation	
	</div>
</div>-->

<?php get_template_part('slider') ?>
<?php get_template_part('features') ?>
<?php get_template_part('showcase') ?>
<?php get_template_part('featured') ?>	

<div id="content" class="site-content" style="margin-top: 0px">
	<div class="container cem"> 