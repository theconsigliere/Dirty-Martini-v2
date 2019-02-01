<div class="container center ph4-l mb5 mb6-l">


  <div class="flex-ns mt5 mb2 flex-column flex-row-l justify-between">

  <?php
  // organise our options into a data object
  $args = array(
    'posts_per_page' => 3,
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
      <div class="flex items-center justify-around">
        <!-- our inner element takes up the full width and height -->
        <div><?php if( get_field('author_picture') ): ?>
        <img src="<?php the_field('author_picture'); ?>" class='author-blog'/>
        <?php endif; ?></div>
      <div class='flex flex-column w-60 ma3 justify-between'>
        <p class ='rw mt0 mb3'><?php the_title(); ?></p>
        <p class='pf ma0'><?php the_field('author_name'); ?></p>
        </div>
      </div>
      
    </a>
  <?php endwhile; endif; ?>

  </div>

</div>