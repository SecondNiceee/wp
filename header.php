<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
	<div class="container">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
			<?php bloginfo( 'name' ); ?>
		</a>
		<nav class="site-nav">
			<ul>
				<li><a href="#about">О фестивале</a></li>
				<li><a href="#speakers">Спикеры</a></li>
				<li><a href="#schedule">Расписание</a></li>
				<li><a href="#faq">FAQ</a></li>
				<li><a href="#contacts">Контакты</a></li>
			</ul>
		</nav>
	</div>
</header>
