<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nomadsun
 */
get_header('new');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<!-- hero image for post -->
		<div class='mt6'>
		<?php if( get_field('blog-image') ): ?>
		<img src="<?php the_field('blog-image'); ?>" class='w-100'/>
		<?php endif; ?>


		<div class='container flex flex-row-l flex-column-reverse pv4 pv6-l justify-center items-start'>

		<div class='author w-100 w-20-l flex flex-column-reverse flex-column-l mh0 mh4-l'>
		<div class='flex flex-row justify-around items-center items-start-l flex-column-l'>
		<?php if( get_field('author_picture') ): ?>
		<img src="<?php the_field('author_picture'); ?>" class='author-picture'/>
		<?php endif; ?>
		<div class='author-text mt4'>
		<p class='rwu mb0 mt3'>Written by</p>
		<h4 class='pf mt2'><?php the_field('author_name'); ?></h4>
		<p class='rwu mb0'>Date</p>
		<h5 class='rw mt2'><?php the_field('date'); ?></h5>
		</div>
		</div>	
		<h6 class='pf lh-copy'><?php the_field('quote'); ?></h6>
		</div>
		

		<!-- text for blog post -->
		<div class=' w-100 w-70-l'>
		<h2 class='pf mt0'><?php echo get_the_title( ); ?></h2>

		<p><?php the_field('text_field'); ?></p>
		

		</div>

		</div>

		<footer class="entry-footer">
		<h4 class="pf center tc mv0">
    Check Out our Excellent Blogs
    </h4>
		<!-- here we include our explore component -->
		<?php get_template_part( 'template-parts/content-explore' ); ?>
	</footer><!-- .entry-footer -->




			</div><!-- container mt7 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();