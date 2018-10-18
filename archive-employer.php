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

<main class="employers-page">
  <div class="container">
    <?php 
      pageBreadcrumbps([
        [
          'href'  => '/',
          'title' => 'Главная'
        ]
      ]); 
    ?>
    <h1 class="heading heading--page">Работодатели</h1>

    <ol class="search-list search-list--primary">
      <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post();
            get_template_part( 'template-parts/content', get_post_type() );
          }
        }
        wp_reset_postdata();
      ?>
    </ol>

    <?php
      $pagination = paginate_links([
        'type' => 'array'
      ]);

      if ($pagination) {
        echo '<ul class="pagination">';
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