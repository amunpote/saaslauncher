<?php

/**
 * Title: Testimonials Grid Dark
 * Slug: saaslauncher/testimonials-grid-dark
 * Categories: saaslauncher-testimonial
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
	$saaslauncher_url . 'assets/images/star_icon.png',
	$saaslauncher_url . 'assets/images/person_1.jpg',
	$saaslauncher_url . 'assets/images/person_2.jpg',
	$saaslauncher_url . 'assets/images/person_3.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-testimonial"],"name":"Testimonials Grid Dark"},"align":"full","style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-dark-shade-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"1280px","justifyContent":"center"}} -->
	<div class="wp-block-group" style="margin-bottom:60px;padding-right:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained","contentSize":"740px"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"500","textAlign":"center","fontSize":"64px"}},"textColor":"light-color"} -->
			<h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:64px;font-style:normal;font-weight:500;line-height:1.2">
				<?php esc_html_e('Hear From Our Happy Clients: Their Stories', 'saaslauncher') ?>
			</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
			<p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color">
				<?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"28px"}}}} -->
	<div class="wp-block-columns" style="margin-top:0px"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"24px","color":"#293635","width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color" style="border-color:#293635;border-width:1px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":100,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
					<div class="wp-block-cover__inner-container"><!-- wp:image {"id":5945,"width":"100px","height":"19px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":["#0f9d8a","#ffffff"]}}} -->
						<figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-5945" style="object-fit:contain;width:100px;height:19px" /></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt","fontSize":"medium"} -->
						<p class="has-foreground-alt-color has-text-color has-link-color has-medium-font-size" style="margin-top:20px;font-style:normal;font-weight:400">
							<?php esc_html_e('The features are great, but the support team truly sets this SaaS apart. From onboarding to daily use, their quick responses and helpful guidance made the whole experience smooth and stress-free.', 'saaslauncher') ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
				</div>
				<!-- /wp:cover -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2055,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"color":{"duotone":"unset"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-2055" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
						<h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500">
							<?php esc_html_e('Daniel Brooks', 'saaslauncher'); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
						<p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size">
							<?php esc_html_e('CEO, GrowthPilot', 'saaslauncher'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"24px","color":"#293635","width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color" style="border-color:#293635;border-width:1px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":100,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
					<div class="wp-block-cover__inner-container"><!-- wp:image {"id":5945,"width":"100px","height":"19px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":["#0f9d8a","#ffffff"]}}} -->
						<figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-5945" style="object-fit:contain;width:100px;height:19px" /></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt","fontSize":"medium"} -->
						<p class="has-foreground-alt-color has-text-color has-link-color has-medium-font-size" style="margin-top:20px;font-style:normal;font-weight:400">
							<?php esc_html_e('The features are great, but the support team truly sets this SaaS apart. From onboarding to daily use, their quick responses and helpful guidance made the whole experience smooth and stress-free.', 'saaslauncher'); ?> </p>
						<!-- /wp:paragraph -->
					</div>
				</div>
				<!-- /wp:cover -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2063,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"color":{"duotone":"unset"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-2063" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
						<h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500">
							<?php esc_html_e('Daniel Brooks', 'saaslauncher'); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
						<p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size">
							<?php esc_html_e('CEO, GrowthPilot', 'saaslauncher'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"24px","color":"#293635","width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color" style="border-color:#293635;border-width:1px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":100,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
					<div class="wp-block-cover__inner-container"><!-- wp:image {"id":5945,"width":"100px","height":"19px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":["#0f9d8a","#ffffff"]}}} -->
						<figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-5945" style="object-fit:contain;width:100px;height:19px" /></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt","fontSize":"medium"} -->
						<p class="has-foreground-alt-color has-text-color has-link-color has-medium-font-size" style="margin-top:20px;font-style:normal;font-weight:400">
							<?php esc_html_e('The features are great, but the support team truly sets this SaaS apart. From onboarding to daily use, their quick responses and helpful guidance made the whole experience smooth and stress-free.', 'saaslauncher'); ?> </p>
						<!-- /wp:paragraph -->
					</div>
				</div>
				<!-- /wp:cover -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2067,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"color":{"duotone":"unset"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-2067" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
						<h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Daniel Brooks', 'saaslauncher'); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
						<p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size">
							<?php esc_html_e('CEO, GrowthPilot', 'saaslauncher'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->