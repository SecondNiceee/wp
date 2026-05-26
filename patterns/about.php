<?php
/**
 * Title: О программе - Медиа и текст
 * Slug: theme/about
 * Categories: featured, media
 * Keywords: о нас, about, медиа
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:80px;padding-bottom:80px">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:media-text {"mediaPosition":"left","mediaType":"image","mediaWidth":50,"verticalAlignment":"center","style":{"spacing":{"blockGap":"48px"}}} -->
		<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:50% auto">
			<figure class="wp-block-media-text__media">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/unsplash-1.jpg" alt="О фестивале" style="border-radius:8px"/>
			</figure>
			<div class="wp-block-media-text__content">
				<!-- wp:heading -->
				<h2 class="wp-block-heading">О программе фестиваля</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>«PIXEL WAVE» — это масштабный фестиваль цифрового искусства, объединяющий художников, дизайнеров, разработчиков и просто ценителей нового медиа.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>В программе: лекции от ведущих практиков, воркшопы по работе с генеративными нейросетями, выставка интерактивных инсталляций и большая afterparty с аудиовизуальным шоу.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Фестиваль проходит при поддержке Министерства культуры и крупнейших digital-студий страны.</p>
				<!-- /wp:paragraph -->
			</div>
		</div>
		<!-- /wp:media-text -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
