<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Career
 */

get_header();
?>

<main class="news-page">
  <div class="container">
    <?php pageBreadcrumbps([
      [
        'href'  => '/',
        'title' => 'Главная'
      ]
    ]); ?>

    <h1 class="heading heading--page">Результаты поиска</h1>
		
		<?php get_search_form() ?>
  </div>
</main>

<?php
get_footer();