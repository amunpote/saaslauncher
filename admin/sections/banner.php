<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="saaslauncher-banner">
	<div class="inner-wrap">
		<h1 class="banner-heading"><?php esc_html_e( 'Welcome to SaasLauncher 👋', 'saaslauncher' ); ?></h1>
		<p><?php esc_html_e( 'Everything you need to create a beautiful, professional website is ready to go. Powered by Cozy Blocks, SaasLauncher gives you flexible design options and powerful tools to build your site your way. Start with a pre-built Starter Template or unlock more with Pro.', 'saaslauncher' ); ?></p>
		<div class="saaslauncher-spacer sm"></div>
		<div class="buttons-group">
			<button id="cozy-addons-install" class="btn btn-primary has-spinner">
				<a><?php esc_html_e( 'Install Cozy Blocks', 'saaslauncher' ); ?></a>
				<span class="spinner saaslauncher-display-none" id="saaslauncher-admin-spinner"></span>
			</button>
		</div>
	</div>
	<figure class="banner-image">
		<img height="330" src="<?php echo esc_url( SAASLAUNCHER_URL . 'admin/images/dashboard-banner.png' ); ?>" />
	</figure>
</div>