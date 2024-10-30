<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>
<tr class="wc_shipping_lpexpress-terminals">
	<td colspan="2">
		<select name="<?php echo $field_name ?>" id="<?php echo $field_id ?>" class="lpexpress_select_field" style="width: 100%">
			<option value="" <?php selected( $selected, '' ); ?>><?php _ex( '- Choose terminal -', 'empty value label for terminals', 'lp-express-shipping-method-for-woocommerce' ) ?></option>
			<?php foreach( $terminals as $group_name => $locations ) : ?>
				<optgroup label="<?php echo $group_name ?>">
					<?php foreach( $locations as $location ) : ?>
						<option value="<?php echo $location->place_id ?>"<?php selected( $selected, $location->place_id ); ?>><?php echo $location->name ?></option>
					<?php endforeach; ?>
				</optgroup>
			<?php endforeach; ?>
		</select>
	</td>
</tr>