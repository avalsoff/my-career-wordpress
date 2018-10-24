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

    <h1 class="heading heading--page">Результаты поиска "<?php echo get_search_query() ?>"</h1>
		
		<?php 
			get_search_form();
			global $wp_query; 
		?>

		<button class="search-page__tag button button--active">
			Найдено материалов: <?php echo $wp_query->found_posts ?>
		</button>
    
    <ol class="search-list search-list--primary">
		<?php
			while ( have_posts() ) {
				the_post();
				get_template_part('template-parts/content', 'search');
			}
		?>
    </ol>

    <?php
    $pagination = paginate_links([
      'type' => 'array'
    ]);

		echo '<ul class="pagination">';
		if ($pagination) {
			foreach ($pagination as $link) {
				echo '<li class="pagination__item">';
				echo $link;
				echo '</li>';
			}
			echo '</ul>';
		}
    ?>
  </div>
</main>

<?php
get_footer();
