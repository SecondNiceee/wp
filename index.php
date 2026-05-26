<?php
/**
 * Главный шаблон — лендинг "Фестиваль цифрового искусства".
 * Используется как front-page и как fallback для index.
 */
get_header(); ?>

<?php // 1. HERO ?>
<section class="hero" id="hero">
	<div class="container">
		<h1>Фестиваль цифрового искусства<br>«PIXEL WAVE 2026»</h1>
		<p class="subtitle">Три дня погружения в мир digital-art, нейросетей и интерактивных инсталляций</p>
		<div class="buttons">
			<a href="#cta" class="btn btn-primary">Зарегистрироваться</a>
			<a href="#schedule" class="btn btn-outline">Программа</a>
		</div>
	</div>
</section>

<?php // 2. ADVANTAGES ?>
<section class="section section-alt" id="advantages">
	<div class="container">
		<h2 class="section-title">Почему стоит прийти</h2>
		<div class="columns">
			<div class="column-item">
				<div class="icon">01</div>
				<h3>50+ художников</h3>
				<p>Цифровые художники из 12 стран мира представят свои работы и проведут мастер-классы для гостей фестиваля.</p>
			</div>
			<div class="column-item">
				<div class="icon">02</div>
				<h3>VR-инсталляции</h3>
				<p>Полное погружение в виртуальные миры — авторские VR-проекты, AR-объекты и интерактивные пространства.</p>
			</div>
			<div class="column-item">
				<div class="icon">03</div>
				<h3>Нетворкинг</h3>
				<p>Знакомство с лидерами digital-индустрии, агентствами и студиями. Шанс найти команду или работу мечты.</p>
			</div>
		</div>
	</div>
</section>

<?php // 3. ABOUT (Media + Text) ?>
<section class="section" id="about">
	<div class="container">
		<div class="media-text">
			<img src="<?php echo get_template_directory_uri(); ?>/img/unsplash-1.jpg" alt="О фестивале">
			<div>
				<h2>О программе фестиваля</h2>
				<p>«PIXEL WAVE» — это масштабный фестиваль цифрового искусства, объединяющий художников, дизайнеров, разработчиков и просто ценителей нового медиа.</p>
				<p>В программе: лекции от ведущих практиков, воркшопы по работе с генеративными нейросетями, выставка интерактивных инсталляций и большая afterparty с аудиовизуальным шоу.</p>
				<p>Фестиваль проходит при поддержке Министерства культуры и крупнейших digital-студий страны.</p>
			</div>
		</div>
	</div>
</section>

<?php // 4. SPEAKERS ?>
<section class="section section-alt" id="speakers">
	<div class="container">
		<h2 class="section-title">Спикеры</h2>
		<div class="speakers">
			<div class="speaker">
				<img src="https://i.pravatar.cc/300?img=12" alt="Анна Петрова">
				<h4>Анна Петрова</h4>
				<p class="role">Digital-художник, Лондон</p>
			</div>
			<div class="speaker">
				<img src="https://i.pravatar.cc/300?img=33" alt="Михаил Орлов">
				<h4>Михаил Орлов</h4>
				<p class="role">AI Researcher, Berlin</p>
			</div>
			<div class="speaker">
				<img src="https://i.pravatar.cc/300?img=47" alt="Юлия Соколова">
				<h4>Юлия Соколова</h4>
				<p class="role">VR-режиссёр</p>
			</div>
			<div class="speaker">
				<img src="https://i.pravatar.cc/300?img=68" alt="Денис Ким">
				<h4>Денис Ким</h4>
				<p class="role">Креативный директор</p>
			</div>
		</div>
	</div>
</section>

<?php // 5. SCHEDULE TABLE ?>
<section class="section" id="schedule">
	<div class="container">
		<h2 class="section-title">Расписание</h2>
		<table class="schedule-table">
			<thead>
				<tr>
					<th>Время</th>
					<th>Блок</th>
					<th>Тема</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>10:00 — 11:30</td>
					<td>Открытие</td>
					<td>Приветственное слово и обзор программы фестиваля</td>
				</tr>
				<tr>
					<td>12:00 — 14:00</td>
					<td>Лекция</td>
					<td>Будущее генеративного искусства: от GAN к диффузионным моделям</td>
				</tr>
				<tr>
					<td>15:00 — 17:30</td>
					<td>Воркшоп</td>
					<td>Создание интерактивной инсталляции в TouchDesigner</td>
				</tr>
				<tr>
					<td>19:00 — 23:00</td>
					<td>Afterparty</td>
					<td>Аудиовизуальное шоу и live-сет от резидентов фестиваля</td>
				</tr>
			</tbody>
		</table>
	</div>
</section>

<?php // 6. GALLERY ?>
<section class="section section-alt" id="gallery">
	<div class="container">
		<h2 class="section-title">Работы участников</h2>
		<div class="gallery">
			<?php for ($i = 1; $i <= 9; $i++): ?>
				<img src="https://picsum.photos/seed/pixel<?php echo $i; ?>/600/400" alt="Работа участника <?php echo $i; ?>">
			<?php endfor; ?>
		</div>
	</div>
</section>

<?php // 7. FAQ ?>
<section class="section" id="faq">
	<div class="container">
		<h2 class="section-title">Часто задаваемые вопросы</h2>
		<div class="faq">
			<details open>
				<summary>Сколько стоит участие в фестивале?</summary>
				<p>Базовый билет — 1500 ₽, расширенный с доступом ко всем воркшопам — 4500 ₽. Для студентов действует скидка 50% при предъявлении студенческого билета.</p>
			</details>
			<details>
				<summary>Где будет проходить фестиваль?</summary>
				<p>Главная площадка — арт-кластер «Севкабель Порт» в Санкт-Петербурге. Адрес: Кожевенная линия, 40. Дополнительные локации указаны в программе.</p>
			</details>
			<details>
				<summary>Можно ли прийти со своим проектом?</summary>
				<p>Да! У нас есть открытая выставочная зона для самостоятельных авторов. Подайте заявку до 1 марта через форму регистрации.</p>
			</details>
			<details>
				<summary>Будет ли онлайн-трансляция?</summary>
				<p>Все ключевые лекции будут транслироваться онлайн. Запись остаётся доступной владельцам билетов в течение полугода после фестиваля.</p>
			</details>
		</div>
	</div>
</section>

<?php // 8. QUOTES / REVIEWS ?>
<section class="section section-alt" id="reviews">
	<div class="container">
		<h2 class="section-title">Отзывы участников</h2>
		<div class="quotes">
			<div class="quote">
				<blockquote>«PIXEL WAVE — лучшее, что случилось с digital-арт сценой за последние годы. Невероятная атмосфера и сильная программа.»</blockquote>
				<cite>— Алиса В., художник</cite>
			</div>
			<div class="quote">
				<blockquote>«Воркшопы оказались настоящим откровением. Узнал больше за два дня, чем за полгода самостоятельного изучения.»</blockquote>
				<cite>— Никита Л., разработчик</cite>
			</div>
			<div class="quote">
				<blockquote>«Замечательное место встречи единомышленников. Нашёл здесь команду для своего нового проекта.»</blockquote>
				<cite>— Мария С., креативный продюсер</cite>
			</div>
		</div>
	</div>
</section>

<?php // 9. CTA ?>
<section class="cta" id="cta">
	<div class="container">
		<h2>Готовы стать частью фестиваля?</h2>
		<p>Места ограничены — успейте подать заявку до 15 марта 2026 года.</p>
		<a href="#contacts" class="btn btn-primary">Подать заявку</a>
	</div>
</section>

<?php // 10. CONTACTS ?>
<section class="section" id="contacts">
	<div class="container">
		<h2 class="section-title">Контакты</h2>
		<div class="contacts contacts-grid">
			<div>
				<p>Свяжитесь с нами любым удобным способом — мы ответим в течение рабочего дня и поможем с регистрацией, размещением и любыми другими вопросами.</p>
				<ul>
					<li><strong>Email:</strong> hello@pixelwave.fest</li>
					<li><strong>Телефон:</strong> +7 (812) 555-12-34</li>
					<li><strong>Адрес:</strong> СПб, Кожевенная линия, 40</li>
					<li><strong>Telegram:</strong> @pixelwave_fest</li>
				</ul>
			</div>
			<div class="map-embed">
				<iframe src="https://www.openstreetmap.org/export/embed.html?bbox=30.2370%2C59.9230%2C30.2570%2C59.9330&amp;layer=mapnik" loading="lazy" title="Карта фестиваля"></iframe>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
