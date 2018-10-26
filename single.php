<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package My_Career
 */

get_header();
the_post();
?>

  <main class="new-item-page">
    <div class="container">

			<h1 class="heading heading--page"><?php the_title() ?></h1>
			
			<?php if (get_field('new_image')): ?>
      <div class="new-item-page__picture picture-title">
        <div class="picture-title__image-wrapper">
          <img class="picture-title__image" src="<?php echo get_field('new_image')['url'] ?>" alt="Встреча участников чемпионата молодые профессионалы">
        </div>
			</div>
			<?php endif; ?>

      <div class="text new-item-page__container">
        <div class="generic-content">
          <?php
            the_content();
            wp_reset_postdata();
          ?>
        </div>
      </div>

      <hr class="hr">


      <div class="new-item-page__section-header section-header">
        <div class="row justify-content-between align-items-baseline">
          <div class="col-auto">
            <h2 class="heading heading--section">Последние новости</h2>
          </div>
          <div class="col-auto">
            <a href="<?php echo site_url('/news') ?>" class="link link--icon link--icon--list link--icon--small">Все новости</a>
          </div>
        </div>
      </div>

      <ul class="new-item-page__news-list row">
      <?php
        $lastNews = new WP_Query([
          'posts_per_page' => 3,
          'post_type' => 'new'
        ]);

        if (  $lastNews->have_posts() ) {
          while ( $lastNews->have_posts() ) {
            $lastNews->the_post();
            echo '<li class="news-item col-xl-4 col-md-6">';
            get_template_part( 'template-parts/content', get_post_type() );
            echo '</li>';
          }
        }          
        wp_reset_postdata();
      ?>
      </ul>

    </div>
  </main>

<?php
get_footer();
