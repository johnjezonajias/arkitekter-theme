<div class="grid">
	<?php foreach( $instance['sort-list'] as $x ) { ?>
		<div class="element-item <?php if( is_array( $x['sort_category'] ) ) : foreach( $x['sort_category'] as $y ) { echo $y . ' '; } else : echo $x['sort_category']; endif; ?>">
			<?php if ( ! empty( $x['link'] ) ) echo '<a href="' . sow_esc_url( $x['link'] ) . '" id="' . strtolower( $x['title'] ) . '">'; ?>
				<div class="content">
					<?php echo wp_get_attachment_image( $x['image'], 'full' ); ?>
					<div class="title-wrap">
						<div class="label">
							<h3 class="name"><?php echo $x['title']; ?><br /><span><?php echo $x['description']; ?></span></h3>
						</div>
					</div>
				</div>
			<?php if ( ! empty( $x['link'] ) ) echo '</a>'; ?>
		</div>
	<?php } ?>
</div>



