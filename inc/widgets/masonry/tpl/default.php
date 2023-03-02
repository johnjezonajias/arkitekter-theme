<div id="ms-container">
	<?php if ( $instance['masonry-list'] ) : ?>
		<?php foreach( $instance['masonry-list'] as $x ) { ?>
			<div class="ms-item">
				<?php if ( ! empty( $x['link'] ) ) {
						$path_info = pathinfo( $x['link'] ); 

						if( $path_info['extension'] == 'pdf' ) {
							$html_attr = 'target="_blank"'; 
						} else {
							if( strpos( $x['link'], 'youtube' ) ) {
								$path_info['extension'] = 'youtube';
							}

							$html_attr = sprintf( 'data-lity class="ext%s"', $path_info['extension'] );
						}
						echo '<a '. $html_attr .' href="' . sow_esc_url( $x['link'] ) . '">';
					} ?>
					<div class="content">
						<div class="title-wrap">
							<div class="label">
								<h3><?php echo $x['article_date']; ?></h3>
								<h3 class="title"><?php echo $x['label_name']; ?></h3>
								<span><?php echo $x['article_name']; ?></span>
							</div>
						</div>
						<?php echo wp_get_attachment_image( $x['image'], 'full' ); ?>
					</div>
				<?php if ( ! empty( $x['link'] ) ) echo '</a>'; ?>
			</div>
		<?php } ?>
	<?php endif; ?>
</div>