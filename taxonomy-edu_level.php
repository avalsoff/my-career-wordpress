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
      $currentTerm = $wp_query->queried_object;
    ?>

    <?php
      foreach ($terms as $term) {
        $class = $term->name == $currentTerm->name ? 'button button--active' : 'button';
    ?>
      <li class="tabs__item">
        <a href="<?php echo get_term_link($term) ?>" class="<?php echo $class ?>"><?php echo $term->name ?></a>
      </li>
    <?php 
      } 
    ?>

    </ul>


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
    ?>
    <?php if ($pagination) : ?>
      <ul class="pagination">
      <?php foreach ($pagination as $link) : ?>
        <li class="pagination__item">
          <?php echo $link ?>
        </li>
      <?php endforeach; ?>
      </ul>
    <?php endif; ?>

  </div>
</main>

<?php
get_footer();