<?php if ( $instance['row-list'] ) : ?>
	<div class="project-box">
		<?php foreach( $instance['row-list'] as $x ) { ?>
			<div class="row">
				<div class="label">
					<?php echo $x['label']; ?>
				</div>
				<div class="details">
					<?php echo $x['text']; ?>
				</div>
			</div>
		<?php } ?>
	</div>
<?php endif; ?>
	
