<?php

/**
 * Title: Hero Banner
 * Slug: saaslauncher/hero-banner
 * Categories: saaslauncher-hero
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
	$saaslauncher_url . 'assets/images/dashboard_launcher.png',
);
?>
<!-- wp:group {"metadata":{"name":"Hero Banner","categories":["saaslauncher-hero"]},"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-dark-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"dimRatio":0,"isUserOverlayColor":true,"gradient":"dark-gradient-large","isDark":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"}}},"textColor":"light-color","layout":{"type":"constrained","contentSize":"1280px"}} -->
	<div class="wp-block-cover is-light has-light-color-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-dark-gradient-large-gradient-background"></span>
		<div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"6rem"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"right":"10px","left":"4px","top":"4px","bottom":"4px"}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"},"color":"#ffffff24","width":"1px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group has-border-color" style="border-color:#ffffff24;border-width:1px;border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;margin-top:0;margin-bottom:0;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:4px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"6px","left":"6px","top":"1px","bottom":"1px"}},"border":{"radius":{"topLeft":"60px","topRight":"60px","bottomLeft":"60px","bottomRight":"60px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
						<div class="wp-block-group has-primary-background-color has-background" style="border-top-left-radius:60px;border-top-right-radius:60px;border-bottom-left-radius:60px;border-bottom-right-radius:60px;padding-top:1px;padding-right:6px;padding-bottom:1px;padding-left:6px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"x-small"} -->
							<p class="has-light-color-color has-text-color has-link-color has-x-small-font-size">
								<?php esc_html_e('New', 'saaslauncher'); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
						<h5 class="wp-block-heading has-foreground-alt-color has-text-color has-link-color has-x-small-font-size">
							<?php esc_html_e('Version 2.0 is officially live', 'saaslauncher'); ?>
						</h5>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
				<div class="wp-block-group" style="margin-top:20px;margin-bottom:0"><!-- wp:heading {"level":1,"className":"saaslauncher-big-title is-style-default","style":{"typography":{"letterSpacing":"-2px","textAlign":"center","fontSize":"72px"}}} -->
					<h1 class="wp-block-heading has-text-align-center saaslauncher-big-title is-style-default" style="font-size:72px;letter-spacing:-2px">
						<?php esc_html_e('Build, Customize, and Launch Your SaaS in Minutes', 'saaslauncher'); ?>
					</h1>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"10px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
				<div class="wp-block-group" style="margin-top:10px;margin-bottom:0"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
					<p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-small-font-size" style="line-height:1.5">
						<?php esc_html_e('Streamline your journey from launch to growth with smart, scalable tools that adapt to your business and help you achieve results sooner.', 'saaslauncher'); ?>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"36px"},"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:36px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"24px","right":"24px","top":"18px","bottom":"18px"}}},"fontSize":"normal"} -->
					<div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-normal-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:18px;padding-right:24px;padding-bottom:18px;padding-left:24px">
							<?php esc_html_e('Try today for free', 'saaslauncher') ?>
						</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-hover-secondary-bgcolor","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"17px","bottom":"17px"}},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"fontSize":"normal","borderColor":"light-color"} -->
					<div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-light-color-border-color has-normal-font-size has-custom-font-size wp-element-button" style="border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:17px;padding-right:24px;padding-bottom:17px;padding-left:24px">
							<?php esc_html_e('Schedule Demo', 'saaslauncher') ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"is-style-default","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"0px","style":"none"},"spacing":{"padding":{"right":"10px","left":"10px","top":"10px","bottom":"10px"},"margin":{"top":"0","bottom":"0"}},"color":{"gradient":"linear-gradient(180deg,rgba(255,255,255,0.07) 0%,rgba(0,0,0,0) 100%)"}},"layout":{"type":"constrained","contentSize":"1230px"}} -->
			<div class="wp-block-group is-style-default has-background" style="border-style:none;border-width:0px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;background:linear-gradient(180deg,rgba(255,255,255,0.07) 0%,rgba(0,0,0,0) 100%);margin-top:0;margin-bottom:0;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:image {"id":1662,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"},"width":"0px","style":"none"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
				<figure class="wp-block-image alignfull size-full has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1662" style="border-style:none;border-width:0px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->