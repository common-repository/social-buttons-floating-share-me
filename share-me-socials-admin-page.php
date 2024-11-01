<?php

add_action( 'admin_menu', 'ca_sms_admin_menu' );

function ca_sms_admin_menu() {
		add_menu_page(
					  'Share Me Socials',
					  'Share Me Socials',
					  'manage_options',
					  'ca-share-me-socials',
					  'ca_sms_options_page',
					  plugins_url( 'share-me-socials-by-cheeky-apps/assets/socials_icons/share-20.png' ),
					  86
					);
}

function ca_sms_options_page() { ?>
	<div class="wrap">
		<h2>Share Me Socials by <a href="#" target="_blank">CheekyApps</a></h2>
		<p>Completely <strong>&quot;Fat free&quot;</strong> social share buttons for Your site</p>
		<form method="post" action="options.php">
			<?php
				settings_fields( 'ca_sms_configs' );
				do_settings_sections( 'ca-sms-buttons' );
				submit_button();
			?>
		</form>
	</div>
<?php }

add_action( 'admin_init', 'ca_sms_config_settings' );
function ca_sms_config_settings() {

	add_settings_section( 'ca_sms_configs', '', null, 'ca-sms-buttons' );

	add_settings_field( 'ca-sms-social-networks-conf', 'Enable sharing services', 'ca_sms_networks_checkboxes', 'ca-sms-buttons', 'ca_sms_configs' );

	register_setting( 'ca_sms_configs', 'ca-sms-twitter' );
	register_setting( 'ca_sms_configs', 'ca-sms-facebook' );
	register_setting( 'ca_sms_configs', 'ca-sms-googleplus' );
}

function ca_sms_networks_checkboxes() { ?>
	<div class="postbox" style="width: 27%; padding: 30px">
		<p>
			<input type="checkbox" name="ca-sms-twitter" id="ca-sms-twitter" value="1" <?php checked(1, get_option( 'ca-sms-twitter'), true); ?> /> <label for="ca-sms-twitter">Show Twitter</label>
		</p>
		<p>
			<input type="checkbox" name="ca-sms-facebook" id="ca-sms-facebook" value="1" <?php checked(1, get_option( 'ca-sms-facebook'), true); ?> /> <label for="ca-sms-facebook">Show Facebook</label>
		</p>
		<p>
			<input type="checkbox" name="ca-sms-googleplus" id="ca-sms-googleplus" value="1" <?php checked(1, get_option( 'ca-sms-googleplus'), true); ?> /> <label for="ca-sms-googleplus">Show Google+</label>
		</p>
	</div>
<?php }