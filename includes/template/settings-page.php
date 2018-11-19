<?php settings_errors(); ?>

<h1>Time Difference Cities Settings</h1>

<form method="post" action="options.php">

	<?php settings_fields( 'tdc_settings_group' ); ?>

	<table class="form-table">
		<tr valign="top">
			<th scope="row">Local City</th>
			<td>
				<select name="tdc_local_city">

					<?php foreach ( $available_cities as $city ) : ?>

						<option value="<?php echo esc_attr( $city ); ?>"
								<?php selected( $local_city, $city ); ?>>

							<?php echo esc_html( $city ); ?>

						</option>

					<?php endforeach ?>

				</select>
			</td>
		</tr>
	</table>

	<?php submit_button(); ?>

</form>
