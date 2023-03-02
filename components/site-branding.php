<?php
/**
 * Component for displaying header site branding.
 *
 * @package Arkitekter
 */
?>

<div class="site-branding">
	<?php
	if ( has_custom_logo() && function_exists( 'the_custom_logo' ) ) :
		/* Display the customizer custom logo. */
		the_custom_logo();
	else : ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php
	endif;
	?>
</div><!-- .site-branding -->
