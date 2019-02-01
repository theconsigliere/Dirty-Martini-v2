<?php
/**
 * Template Name: Blog Archive
 */
get_header('new');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

	<div class='mt6'>
	
				<?php
				// organise our options into a data object
				$args = array(
					'orderby' => 'date',
					'posts_per_page' => 1
					
				);
				// a variable with our query and options
				$query = new WP_Query( $args );
				// do a loop with our new query code 
				if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
					<!-- code as we’re used to already! -->
					<div class='relative'>
					<a href="<?php the_permalink(); ?>" class="w-100">
							<?php if( get_field('blog-image') ): ?>
							<img src="<?php the_field('blog-image'); ?>" class='w-100'/>
							<?php endif; ?>

							<div class='info-box'>
							<h3 class='pf mt0'><?php echo get_the_title( ); ?></h3>
							<p class='rwu mb0 mt3'>Written by</p>
							<h6 class='pf mt2 mb0'><?php the_field('author_name'); ?></h6>
							
							</div>
					</div>		
					
					</a>
				<?php endwhile; endif; ?>


		
		<div class="work-container center pv6 mb5 mb6-l">
				<h2 class='tc pf'>Our Blogs</h2>

		<div class="flex-ns mt5 mb2 flex-column flex-row-l justify-between">

		<?php
		// organise our options into a data object
		$args = array(
		'posts_per_page' => -1,
		'orderby' => 'date',
		// here we make sure to exclude the current 
		// post we’re looking at
		'post__not_in' => array($post->ID)
		);
		// a variable with our query and options
		$query = new WP_Query( $args );
		// do a loop with our new query code 
		if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
		<!-- code as we’re used to already! -->
		<a href="<?php the_permalink(); ?>" class="db link w-100 w-third-l ph3 mb3 mb0-ns">
			<!-- here we create a 1x1 aspect ratio box -->
			<div class="aspect-ratio aspect-ratio--6x4">
			<!-- our inner element takes up the full width and height -->
					<?php if( get_field('blog-image') ): ?>
						<img src="<?php the_field('blog-image'); ?>" class='w-100'/>
					<?php endif; ?>

						<div class="flex mt3 items-center justify-around">
        <!-- our inner element takes up the full width and height -->
        <div><?php if( get_field('author_picture') ): ?>
        <img src="<?php the_field('author_picture'); ?>" class='author-blog'/>
        <?php endif; ?></div>
      <div class='flex flex-column w-60 ma3 justify-between'>
        <p class ='rw mt0 mb3'><?php the_title(); ?></p>
        <p class='pf ma0'><?php the_field('author_name'); ?></p>
        </div>
      </div>

			</div>
			
		</a>
		<?php endwhile; endif; ?>

  </div>

</div>



			</div><!-- container mt7 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
