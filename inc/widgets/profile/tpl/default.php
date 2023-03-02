<div id="profile-wrap">
	<?php
		if ( $instance['image'] ) :
			echo '<div class="profile-img">' . wp_get_attachment_image( $instance['image'], 'full' ) . '</div>';
		endif;
	?>
	<div class="profile-content">
		<h3><?php echo wp_kses_post( $instance['name'] ) ?></h3>
		<?php if ( $instance['role'] ) echo '<p>' . wp_kses_post( $instance['role'] ) .'</p>'; ?>
		<?php if ( $instance['phone'] ) echo '<p class="phone"><strong>T: ' . wp_kses_post( $instance['phone'] ) .'</strong></p>'; ?>
		<?php if ( $instance['email'] ) echo '<a href="mailto:' . $instance['email'] . '"><strong>' . wp_kses_post( $instance['email'] ) .'</strong></a>'; ?>
		<?php
			if ( $instance['cv'] ) :
				echo '<p class="cv"><strong><a href="' . wp_get_attachment_url(  $instance['cv'] ) . '" target="_BLANK">CV</a></strong></p>';
			else :
				echo '<p class="cv"><a href="#"><strong>CV</strong></a></p>';
			endif;
		?>
	</div>
</div>