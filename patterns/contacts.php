<?php
/**
 * Title: Контакты
 * Slug: theme/contacts
 * Categories: featured, contact
 * Keywords: контакты, карта, contacts
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:80px;padding-bottom:80px">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"48px"}}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:48px">Контакты</h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"48px"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph -->
				<p>Свяжитесь с нами любым удобным способом — мы ответим в течение рабочего дня и поможем с регистрацией, размещением и любыми другими вопросами.</p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"style":{"spacing":{"padding":{"left":"0"}},"typography":{"lineHeight":"2"}},"className":"contacts-list"} -->
				<ul style="padding-left:0;line-height:2" class="contacts-list">
					<!-- wp:list-item -->
					<li><strong>Email:</strong> hello@pixelwave.fest</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><strong>Телефон:</strong> +7 (812) 555-12-34</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><strong>Адрес:</strong> СПб, Кожевенная линия, 40</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><strong>Telegram:</strong> @pixelwave_fest</li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:html -->
				<iframe src="https://www.openstreetmap.org/export/embed.html?bbox=30.2370%2C59.9230%2C30.2570%2C59.9330&amp;layer=mapnik" loading="lazy" title="Карта фестиваля" style="width:100%;height:320px;border:0;border-radius:8px;"></iframe>
				<!-- /wp:html -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
