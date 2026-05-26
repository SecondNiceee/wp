<?php
/**
 * Title: Hero - Главный баннер
 * Slug: theme/hero
 * Categories: featured, header
 * Keywords: hero, banner, главная
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/img/hero-bg.jpg","dimRatio":70,"overlayColor":"dark","minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full","className":"hero-pattern"} -->
<div class="wp-block-cover alignfull is-light hero-pattern" style="min-height:100vh">
	<span aria-hidden="true" class="wp-block-cover__background has-dark-background-color has-background-dim-70 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/hero-bg.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"56px","lineHeight":"1.2"}},"textColor":"white"} -->
			<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-size:56px;line-height:1.2">Фестиваль цифрового искусства<br>«PIXEL WAVE 2026»</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"22px"}},"textColor":"white"} -->
			<p class="has-text-align-center has-white-color has-text-color" style="font-size:22px">Три дня погружения в мир digital-art, нейросетей и интерактивных инсталляций</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
			<div class="wp-block-buttons" style="margin-top:40px">
				<!-- wp:button {"backgroundColor":"accent","textColor":"white","style":{"border":{"radius":"4px"},"typography":{"fontWeight":"700"}},"fontSize":"normal"} -->
				<div class="wp-block-button has-custom-font-size has-normal-font-size" style="font-weight:700"><a class="wp-block-button__link has-white-color has-accent-background-color has-text-color has-background wp-element-button" style="border-radius:4px">Зарегистрироваться</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"transparent","textColor":"white","style":{"border":{"radius":"4px","width":"2px","color":"#ffffff"},"typography":{"fontWeight":"700"}},"fontSize":"normal","className":"is-style-outline"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-normal-font-size" style="font-weight:700"><a class="wp-block-button__link has-white-color has-transparent-background-color has-text-color has-background has-border-color wp-element-button" style="border-color:#ffffff;border-width:2px;border-radius:4px">Программа</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
