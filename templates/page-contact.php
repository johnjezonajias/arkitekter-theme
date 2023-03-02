<?php
/**
 * Template Name: Contact Page Template
 *
 * @package Arkitekter
 */
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_title( '<h1 class="entry-title contact-title"><strong>', '</strong></h1>' ); ?>
					<div class="entry-content">
                        <?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
            <?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
