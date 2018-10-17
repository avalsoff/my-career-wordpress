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

    <h1 class="heading heading--page">Новости</h1>

    <section class="news-page__news">
      <ul class="news-page__news-list row">
        <?php
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post();
              echo '<li class="news-item col-xl-4 col-md-6">';
              get_template_part( 'template-parts/content', get_post_type() );
              echo '</li>';
            }
          }
          wp_reset_postdata();
        ?>
      </ul>
    </section>

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
