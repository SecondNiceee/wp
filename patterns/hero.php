<?php
/**
 * Title: Hero - Главный экран
 * Slug: theme/hero
 * Categories: featured, header
 * Keywords: hero, banner, главная
 */
?>
<!-- wp:cover {"url":"https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=1920&q=80","dimRatio":70,"overlayColor":"black","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","isDark":true,"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"120px"}}}} -->
<div class="wp-block-cover alignfull is-dark" style="padding-top:0;padding-bottom:120px;min-height:100vh">
	<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-70 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=1920&q=80" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"200px"}}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
		<div class="wp-block-group" style="padding-top:200px">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(40px, 8vw, 72px)","fontWeight":"600","letterSpacing":"-0.03em","lineHeight":"1.05"}},"textColor":"white"} -->
			<h1 class="wp-block-heading has-white-color has-text-color" style="font-size:clamp(40px, 8vw, 72px);font-weight:600;letter-spacing:-0.03em;line-height:1.05">Фестиваль цифрового<br>искусства для креаторов<br>и бизнес-лидеров</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-size:20px">Присоединяйтесь к крупнейшему событию в мире digital-искусства и технологий</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"60px"} -->
			<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"style":{"border":{"top":{"color":"rgba(255,255,255,0.2)","width":"1px"}},"spacing":{"padding":{"top":"48px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group" style="border-top-color:rgba(255,255,255,0.2);border-top-width:1px;padding-top:48px">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","textTransform":"uppercase","letterSpacing":"0.1em"},"color":{"text":"#aaaaaa"}}} -->
						<p class="has-text-color" style="color:#aaaaaa;font-size:12px;letter-spacing:0.1em;text-transform:uppercase">Локация</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"500"}},"textColor":"white"} -->
						<p class="has-white-color has-text-color" style="font-size:16px;font-weight:500">Технопарк Сколково, Москва</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","textTransform":"uppercase","letterSpacing":"0.1em"},"color":{"text":"#aaaaaa"}}} -->
						<p class="has-text-color" style="color:#aaaaaa;font-size:12px;letter-spacing:0.1em;text-transform:uppercase">Дата</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"500"}},"textColor":"white"} -->
						<p class="has-white-color has-text-color" style="font-size:16px;font-weight:500">15 сентября 2026</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","textTransform":"uppercase","letterSpacing":"0.1em"},"color":{"text":"#aaaaaa"}}} -->
						<p class="has-text-color" style="color:#aaaaaa;font-size:12px;letter-spacing:0.1em;text-transform:uppercase">Формат</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"500"}},"textColor":"white"} -->
						<p class="has-white-color has-text-color" style="font-size:16px;font-weight:500">Офлайн + Онлайн трансляция</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"border":{"radius":"6px"},"typography":{"fontSize":"14px","fontWeight":"600"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"32px","right":"32px"}}}} -->
					<div class="wp-block-button" style="font-size:14px;font-weight:600"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background wp-element-button" style="border-radius:6px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px">КУПИТЬ БИЛЕТ</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
