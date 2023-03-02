<?php
$title = $instance['title'];
$anchor = strtolower( $title );
$anchor = preg_replace('/[^a-z0-9_\s-]/', '', $anchor);
$anchor = preg_replace('/[\s-]+/', ' ', $anchor);
$anchor = preg_replace('/[\s_]/', '-', $anchor);
?>

<div id="<?php echo $anchor; ?>">
	<div id="featured-section-wrap" <?php if( $instance['margin_btm'] ) echo 'style="margin-bottom: ' . $instance['margin_btm'] . ';"'; ?>>
		<?php
			if ( $instance['featured_image'] ) :
				echo '<div class="featured-image">' . wp_get_attachment_image( $instance['featured_image'], 'full' ) . '</div>';
			endif;
		?>
		<div id="featured-content-wrap" <?php if( $instance['column_number'] ) echo 'class="' . $instance['column_number'] . '"'; ?>>
			<div class="wrap">
				<h1 class="entry-title"><?php echo wp_kses_post( $instance['title'] ); ?></h1>
				<div class="row">
					<?php echo wp_kses_post( $instance['content_1'] ); ?>
				</div>
				<div class="row">
					<?php echo wp_kses_post( $instance['content_2'] ); ?>
				</div>
			</div>
		</div>
	</div>
</div>