<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arkitekter
 */

?>
	<?php if( ! is_front_page() ) : ?>
		</div><!-- #content -->
	<?php endif; ?>

	<?php if( is_front_page() ) : ?>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if( ! is_front_page() ) echo '<div class="wrap">'; ?>
				<?php dynamic_sidebar( 'footer-section' ); ?>
			<?php if( ! is_front_page() ) echo '</div>'; ?>
		</footer><!-- #colophon -->
	<?php endif; ?>

	<a href="#" id="back-top"></a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
