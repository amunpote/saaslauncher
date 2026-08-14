<div class="theme-demos boxed-layout flex-layout flex-center">
	<figure class="featured-image">
		<img src="https://plugins.cozythemes.com/cozy-addons/admin/assets/media/saaslauncher-theme-demo.png" />
	</figure>
	<div>
		<p class="section-pill"><?php esc_html_e( 'Theme Demos', 'saaslauncher' ); ?></p>
		<h2 class="section-title">
			<?php esc_html_e( 'Explore Complete Website Demos', 'saaslauncher' ); ?></h2>

		<div class="saaslauncher-spacer sm"></div>

		<p><?php esc_html_e( 'Explore complete SaasLauncher website demos—ideal for launching a fresh site with everything included. For a cleaner, more focused setup, Starter Templates are the smarter choice for both new and existing websites. Import just the design you need, without extra content.', 'saaslauncher' ); ?>
		</p>

		<p><strong style="color:var(--saaslauncher-admin--heading)"><?php esc_html_e( '*Note: This feature should only be used with a fresh installation of WordPress.', 'saaslauncher' ); ?></strong></p>

		<div class="saaslauncher-spacer sm"></div>

		<?php
		if ( saaslauncher_is_plugin_activated( 'cozy-essential-addons/cozy-essential-addons.php' ) && saaslauncher_is_plugin_activated( 'advanced-import/advanced-import.php' ) ) {
			?>
		<button class="btn btn-primary-accent">
			<a
				href="<?php echo esc_url( admin_url( 'themes.php?page=advanced-import' ) ); ?>"><?php esc_html_e( 'Import Demo →', 'saaslauncher' ); ?></a>
		</button>
			<?php
		} else {
			?>
		<button id="install-required-plugins" class="btn btn-primary-alt has-spinner">
			<a rel="noopener"><?php esc_html_e( 'Install & Activate required plugins', 'saaslauncher' ); ?></a>
			<span class="spinner saaslauncher-display-none" id="saaslauncher-admin-spinner"></span>
		</button>
			<?php
		}
		?>
	</div>
</div>