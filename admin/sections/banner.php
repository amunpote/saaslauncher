<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="saaslauncher-banner">
	<h1 class="banner-heading"><?php esc_html_e( 'Welcome to SaasLauncher' ); ?></h1>
	<p><?php esc_html_e( 'Everything you need to build, customize, and grow your website with', 'saaslauncher' ); ?> <strong><?php esc_html_e( 'SaasLauncher', 'saaslauncher' ); ?></strong>.</p>
	<div class="saaslauncher-spacer sm"></div>
	<div class="buttons-group">
		<button id="cozy-addons-install" class="btn btn-primary has-spinner">
			<a><?php esc_html_e( 'Install Cozy Blocks', 'saaslauncher' ); ?></a>
			<span class="spinner saaslauncher-display-none" id="saaslauncher-admin-spinner"></span>
		</button>
	</div>
</div>