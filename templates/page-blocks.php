<?php
/**
 * Template Name: Блочный редактор
 * Template Post Type: page
 * 
 * Шаблон для страниц, созданных в блочном редакторе Gutenberg.
 * Выводит контент страницы без дополнительных обёрток.
 */

get_header(); 

while ( have_posts() ) : the_post();
?>
	<main class="site-content">
		<?php the_content(); ?>
	</main>
<?php
endwhile;

get_footer();
