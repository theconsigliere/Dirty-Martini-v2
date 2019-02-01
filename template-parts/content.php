<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dirty_Martini
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content mt7">




			<?php 

			$image = get_field('blog_image');

			if( $image ) {

				echo wp_get_attachment_image( blog_image );

			}

			?>



	
	</div><!-- .entry-content -->
</article>


