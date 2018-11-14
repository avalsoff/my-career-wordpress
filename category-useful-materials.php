<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Career
 */

  get_header();

  $current = $wp_query->queried_object;
  query_posts([
    'cat' => $current->cat_ID,
    'post_type' => [ 'page' ]
  ]);
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

    <h1 class="heading heading--page">Полезные материалы</h1>

    <?php 
      $terms = get_categories([
        'child_of'      => get_category_by_slug('useful-materials')->cat_ID,
      ]);
    ?>

    <ul class="tabs">
      <?php foreach ($terms as $term) : ?>
        <?php $class = $term->cat_ID == $current->cat_ID ? 'button button--active' : 'button'; ?>
        <li class="tabs__item">
          <a href="<?php echo get_term_link($term) ?>" class="<?php echo $class ?>"><?php echo $term->name ?></a>
        </li>
      <?php endforeach; ?>
    </ul>

    <ol class="search-list search-list--primary">
    <?php
        if ( have_posts() ) :
          while ( have_posts() ) :
            the_post(); ?>            
            <li class="search-list__item">
              <div class="search-list__item-body">
                <a class="link search-list__link" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
              </div>
            </li>
    <?php endwhile;
        endif;
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