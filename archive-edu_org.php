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

    <h1 class="heading heading--page">Образовательные организации</h1>

    <ul class="tabs">
    <?php 
      $terms = get_terms([
        'taxonomy' => 'edu_level',
        'hide_empty' => false
      ]);
    ?>

    
    <?php
    foreach ($terms as $term) {
    ?>
      <li class="tabs__item">
        <a href="<?php echo get_term_link($term) ?>" class="button"><?php echo $term->name ?></a>
      </li>
    <?php 
    } 
    ?>

    </ul>


    <ul class="search-list search-list--primary">
      <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post();
            get_template_part( 'template-parts/content', get_post_type() );
          }
        }
        wp_reset_postdata();
      ?>
    </ul>

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