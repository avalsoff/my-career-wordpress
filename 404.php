<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package My_Career
 */

get_header();
?>

<main class="page-404">
	<b class="page-404__404">404</b>
	<h1 class="page-404__heading heading heading--page">Произошла ошибка!</h1>
	<p class="page-404__title">К сожалению, страницы с таким адресом не существует.</p>
	<a href="<?php echo site_url() ?>" class="link">Перейти на Главную страницу</a>
</main>

<?php
get_footer();
