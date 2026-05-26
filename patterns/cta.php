<?php
/**
 * Title: CTA - Призыв к действию
 * Slug: theme/cta
 * Categories: featured, call-to-action
 * Keywords: cta, призыв, action
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/img/cta-bg.jpg","dimRatio":80,"overlayColor":"dark","minHeight":400,"minHeightUnit":"px","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:400px">
	<span aria-hidden="true" class="wp-block-cover__background has-dark-background-color has-background-dim-80 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cta-bg.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","textColor":"white"} -->
			<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color">Готовы стать частью фестиваля?</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"20px"},"spacing":{"margin":{"bottom":"32px"}}},"textColor":"white"} -->
			<p class="has-text-align-center has-white-color has-text-color" style="margin-bottom:32px;font-size:20px">Места ограничены — успейте подать заявку до 15 марта 2026 года.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"accent","textColor":"white","style":{"border":{"radius":"4px"},"typography":{"fontWeight":"700"}},"fontSize":"normal"} -->
				<div class="wp-block-button has-custom-font-size has-normal-font-size" style="font-weight:700"><a class="wp-block-button__link has-white-color has-accent-background-color has-text-color has-background wp-element-button" style="border-radius:4px">Подать заявку</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
