<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dirty_Martini
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
	<div class="now-playing"></div>
		

		<div class='container'>
		<!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/b941c57a6b04576fa341797b992c42f9.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
		</div>

  <!-- our footer bottom component -->
  <?php get_template_part('template-parts/footer-bottom'); ?>
		
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
