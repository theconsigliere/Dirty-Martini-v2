<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dirty_Martini
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dirty-martini' ); ?></a>

	<header id="masthead" class="site-header">
	

		<div class="site-branding container flex justify-between items-end items-center-l">

			<!-- see logo -->
			<a href='<?php echo get_home_url(); ?>' class='db'>
			<div class='logo'></div>
			</a>
			<!-- hashtag -->
			<div class='flex justify-around items-center'>
			<h6 class='hashtag rw pr6-l'>#shakingupmarketing</h6>
			<!-- svg toggle icon -->
			<div onclick="openNav()">
			<svg class='change-my-color db menu-open' enable-background="new 0 0 384.97 384.97" height="512" viewBox="0 0 384.97 384.97" width="512" xmlns="http://www.w3.org/2000/svg">
			<path d="m12.03 120.303h360.909c6.641 0 12.03-5.39 12.03-12.03 0-6.641-5.39-12.03-12.03-12.03h-360.909c-6.641 0-12.03 5.39-12.03 12.03s5.39 12.03 12.03 12.03z"/><path d="m372.939 180.455h-360.909c-6.641 0-12.03 5.39-12.03 12.03s5.39 12.03 12.03 12.03h360.909c6.641 0 12.03-5.39 12.03-12.03s-5.389-12.03-12.03-12.03z"/><path d="m372.939 264.667h-240.606c-6.641 0-12.03 5.39-12.03 12.03 0 6.641 5.39 12.03 12.03 12.03h240.606c6.641 0 12.03-5.39 12.03-12.03.001-6.641-5.389-12.03-12.03-12.03z"/></svg>
			</div>
			</div>

		</div><!-- .site-branding -->


		<!-- overlay navigation -->
		<nav id="site-navigation" class="main-navigation">
			

			<div id="myNav" class="overlay flex flex-column justify-between">
			<div class="site-branding site-top flex justify-between items-end items-center-l">

				<!-- see logo -->
				<a href='<?php echo get_home_url(); ?>' class='db'>
				<div class='logo'></div>
				</a>
				<!-- hashtag -->
				<div class='flex justify-around items-center'>
				<h6 class='rw hash pr6-l'>#shakingupmarketing</h6>
				<!-- menu -->
				<div onclick='closeNav()'>
				<img src= '<?php bloginfo('template_url'); ?>/assets/cancel.svg' class='db close'>
				</div>
				</div>


			</div><!-- site-branding -->
<div class='overlay-content flex flex-column justify-between items-end'>
				<div class="pv3 pv5-m pv5-l flex flex-column items-center justify-between container" style="
    height: 60vh;">

					<a href="#welcome"><h4 class='db pf ma0' onclick="closeNav()">Who we are</h4></a>
					<a href="#recent-work"><h4 class='db pf ma0' onclick="closeNav()">New Work</h4></a>
					<a href="#our-services" ><h4 class='db pf ma0' onclick="closeNav()">Our Services</h4></a>
					<a href="http://newdmsite.wpengine.com/blog-archive/"><h4 class='db pf ma0' onclick="closeNav()">Our Blog</h4></a>
					<a href="#contact"><h4 class='db pf ma0' onclick="closeNav()">Let's Talk</h4></a>
					
				</div>

	<div class='footer-bottom-bar'>
	<!-- our footer bottom component -->
	<?php get_template_part('template-parts/footer-bottom'); ?>
	</div>	

</div>
	


		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
