<?php

/**
 * Title: Contact CTA with Form Pro
 * Slug: saaslauncher/saaslauncher-contact-cta-form-pro
 * Categories: ct-saaslauncher-pro
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/pro/icon_tel.png',
    $saaslauncher_url . 'assets/images/pro/icon_mail.png',
    $saaslauncher_url . 'assets/images/pro/icon_map.png',
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|20","bottom":"3rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:3rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"50px","bottom":"50px","left":"50px","right":"50px"}},"border":{"radius":{"topLeft":"40px","topRight":"40px","bottomLeft":"40px","bottomRight":"40px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group has-background-alt-background-color has-background" style="border-top-left-radius:40px;border-top-right-radius:40px;border-bottom-left-radius:40px;border-bottom-right-radius:40px;margin-top:0;margin-bottom:0;padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"84px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"540px","justifyContent":"left"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px","top":"5px","bottom":"5px"}},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"1px"}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontSize":"13px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
                            <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:13px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Get in touch', 'saaslauncher') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"left","fontSize":"64px","lineHeight":"1.1"}}} -->
                    <h1 class="wp-block-heading has-text-align-left" style="font-size:64px;line-height:1.1"><?php esc_html_e('Start your project with us today', 'saaslauncher') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"medium"} -->
                    <p class="has-text-align-left has-foreground-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('We unite creative minds, skilled designers, and expert developers to turn ambitious ideas into powerful digital solutions.', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":7251,"sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"}}} -->
                        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-7251" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                            <h5 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Phone', 'saaslauncher') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('+1 (000) 012-3456', 'saaslauncher') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":7257,"sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"}}} -->
                        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-7257" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                            <h5 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Email', 'saaslauncher') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('sample@example.com', 'saaslauncher') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":7257,"sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"}}} -->
                        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-7257" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                            <h5 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Address', 'saaslauncher') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('42 Innovation Drive, San Francisco, CA 94105', 'saaslauncher') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":""} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}},"spacing":{"padding":{"right":"44px","left":"44px","top":"28px","bottom":"10px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:28px;padding-right:44px;padding-bottom:10px;padding-left:44px"><!-- wp:heading {"style":{"typography":{"fontSize":"40px"}}} -->
                    <h2 class="wp-block-heading" style="font-size:40px"><?php esc_html_e('Request an enquiry', 'saaslauncher') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('We look forward to connecting with you! Required fields.', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:cozy-block/cf7-styler {"clientId":"9fd36f2b-5bf2-4df1-9629-5db47a3d2137","shortcode":"[contact-form-7 id=\u0022b5f65b7\u0022 title=\u0022Contact form 1\u0022]","gap":"16px","textStyles":{"textareaHeight":"","padding":{"top":"","right":"","bottom":"","left":""},"border":{"color":"#E8EAEA","style":"","width":"1px"},"borderFocus":{"color":"#0F9D8A","style":"solid","width":"1px"},"radius":"10px","font":{"size":"","weight":"","family":""},"letterCase":"none","decoration":"none","lineHeight":"","letterSpacing":"","color":{"text":"","textFocus":"","bg":"","bgFocus":""}},"buttonStyles":{"width":"100%","display":"inline","align":"left","padding":{"top":"16px","right":"16px","bottom":"16px","left":"16px"},"margin":{"top":"10px","bottom":""},"border":{"width":"","style":"","color":""},"radius":{"top":"80px","right":"80px","bottom":"80px","left":"80px"},"font":{"size":"18px","weight":"","family":""},"letterCase":"none","decoration":"none","lineHeight":"","letterSpacing":"","color":{"text":"#FFFFFE","textHover":"#FFFFFE","bg":"#0F9D8A","bgHover":"#0C8977","borderHover":""}}} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->