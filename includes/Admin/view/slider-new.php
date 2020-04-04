<div class="wrap">
	<h1 class="wp-heading-inline"><?php _e( 'Add new slide', 'wedevs_slider' ); ?></h1>

	<form action="" method="post">
		<table class="form-table">
			<tr>
				<th scope="row">
					<label for="name"><?php _e( 'Name', 'wedevs_slider' ); ?></label>
				</th>
				<td>
					<input type="text" name="name" id="name" class="regular-text" value="">
				</td>
			</tr>

			<tr>
				<th scope="row">
					<label for="subject"><?php _e( 'Subject', 'wedevs_slider' ); ?></label>
				</th>
				<td>
					<input type="text" name="subject" id="subject" class="regular-text" value="">
				</td>
			</tr>

			<tr>
				<th scope="row">
					<label for="name"><?php _e( 'Message', 'wedevs_slider' ); ?></label>
				</th>
				<td>
					<textarea class="regular-text" name="message" id="message"> </textarea>
				</td>
			</tr>

			
		</table>
		<?php wp_nonce_field( 'new_slider' ); ?>
		<?php submit_button( __('Send', 'wedevs_slider'), 'primary', 'send_message'  ); ?>
	</form>	
</div>