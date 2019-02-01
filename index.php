<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * Template Name: homepage
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dirty_Martini
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

<!-- our hero video component -->
<?php get_template_part('template-parts/video-hero'); ?>

<!-- our welcome component -->
<?php get_template_part('template-parts/welcome'); ?>

<!-- our recent work component -->
<?php get_template_part('template-parts/recent-work'); ?>
			

<section class='mv4' >
			<div class='pa2 pa5-m pa5-l tc'>
				<h2 class='pf'>Let's Change the Game</h2>
				<h6 class='rw lh-copy' style='max-width: 800px; margin: 0 auto;'>We’re customer engagement specialists – creating highly relevant,
				people-first experiences and interactions by fusing creativity, 
				data and technology.</h6>
			</div>
</section>

<!-- our services component -->
<?php get_template_part('template-parts/our-services'); ?>

<!-- our clients component -->
<?php get_template_part('template-parts/clients'); ?>

<!-- our clients component -->
<?php get_template_part('template-parts/contact'); ?>

<!-- here we include our explore component -->
<h4 class="pf center tc mv0">
    Check Out our Excellent Blogs
    </h4>
<?php get_template_part( 'template-parts/content-explore' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
