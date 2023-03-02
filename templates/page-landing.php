<?php
/**
 * Template Name: Landing Page Template
 *
 * @package Arkitekter
 */
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php
                        if ( get_field( 'landing_page_title' ) ) :
                            echo '<h1 class="entry-title">' . get_field( 'landing_page_title' ) .  '</h1>';
                        else :
                            the_title( '<h1 class="entry-title">', '</h1>' );
                        endif;
                    ?>
					<div class="entry-content">
                        <?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
            <?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
