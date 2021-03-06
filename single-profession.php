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

<main class="profs-item-page">
  <div class="container">
    <?php 
      pageBreadcrumbps([
        [
          'href'  => '/',
          'title' => 'Главная' 
        ],
        [
          'href'  => '/profs',
          'title' => 'Профессии' 
        ],
      ]) 
    ?>

    <h1 class="profs-item-page__heading heading heading--page"><?php the_title() ?></h1>

    <small class="profs-item-page__heading-info">
      Информация по состоянию на <?php the_date('j F Y') ?>
    </small>

    <div class="profs-item-page__text-with-photo">
      <div class="profs-item-page__photo-wrapper">
        <img class="profs-item-page__photo" src="<?php echo get_field('image')['url'] ?>" alt="">
      </div>
      <div class="text">
        <?php the_content(); ?>
      </div>
    </div>

    <ul class="prof-description row">
      <li class="prof-description__item col-lg-6">
        <h3 class="heading heading--top-icon">
          <span class="icon icon--money"></span>
          Среднаяя заработная плата
        </h3>
        <div class="prof-description__prop">
          <b class="prof-description__number">
            <?php echo get_field('average_salary'); ?></b>
          <p class="prof-description__caption">тыс. руб.*</p>
        </div>
		<?php if ( get_field('empl_year') ) { ?>
			<small class="prof-description__footnote">
			  * — по вакансиям, заявленным в органы службы занятости населения в <?php echo get_field('empl_year') ?> году
			</small>
		<?php } ?>
      </li>
      <li class="prof-description__item col-lg-6">
        <h3 class="heading heading--top-icon">
          <span class="icon icon--stats"></span>
          Востребованность
        </h3>
        <div class="prof-description__prop">
          <b class="prof-description__number">
            <?php echo get_field('demand'); ?></b>
          <p class="prof-description__caption">вакантных рабочих мест *</p>
        </div>
        <small class="prof-description__footnote">
          * — по вакансиям, заявленным в органы службы занятости населения в 2017 году
        </small>
      </li>
      <li class="prof-description__item col-lg-6">
        <h3 class="heading heading--top-icon">
          <span class="icon icon--brain"></span>
          Должен знать
        </h3>
        <div class="generic-content">
          <div class="profs-list">
            <?php echo get_field('must_know') ?>
          </div>
        </div>
      </li>
      <li class="prof-description__item col-lg-6">
        <h3 class="heading heading--top-icon">
          <span class="icon icon--setting"></span>
          Должен уметь
        </h3>
        <div class="generic-content">
          <div class="profs-list">
            <?php echo get_field('should_be_able') ?>
          </div>
        </div>
      </li>
      <li class="prof-description__item <?php if ( get_field('specializing') ) { echo 'col-lg-6'; } else { echo 'col-lg-12'; } ?>">
        <h3 class="heading heading--top-icon">
          <span class="icon icon--pills"></span>
          Медицинские противопоказания
        </h3>
        <div class="generic-content">
          <div class="profs-list">
            <?php echo get_field('med_contraindications') ?>
          </div>
        </div>
      </li>
	  <?php if ( get_field('specializing') ) { ?>
		  <li class="prof-description__item col-lg-6">
			<h3 class="heading heading--top-icon">
			  <span class="icon icon--edu"></span>
			  Учебная специальность
			</h3>
			<div class="generic-content">
			  <div class="profs-list">
				<?php echo get_field('specializing') ?>
			  </div>
			</div>
		  </li>
		<?php } ?>
    </ul>
    <div class="profs-item-page__container">
      <?php
        $learnPosts = get_field('where_to_learn');
        if ($learnPosts) {
          $allTerms = get_terms([
            'taxonomy' => 'edu_level'
          ]);
          $viewModel = [];
          foreach ($allTerms as $term) {
            $viewModel[$term->slug] = [
              'id'    => $term->term_id,
              'name'  => $term->name,
              'posts' => []
            ];
          }
          foreach ($viewModel as $key => $eduLevel) {
            foreach ($learnPosts as $currentPost) {
              $eduLevelsOfPost = wp_get_post_terms($currentPost->ID, 'edu_level');
              foreach ($eduLevelsOfPost as $eduLevelOfPost) {
                if ($eduLevelOfPost->term_id == $eduLevel['id']) {
                  $viewModel[$key]['posts'][] = $currentPost;
                }
              }
            }
          }        
        }
      ?>

      <section class="text profs-item-page__list">
        <h2 class="text__heading">Профессионально важные качества для работы</h2>
        <div class="generic-content">
          <div class="profs-list p0 mb0" style="">
            <?php echo get_field('important_qualities') ?>
          </div>
        </div>
      </section>

      <section class="text text--with-bg text--wide-list profs-item-page__list ">
        <?php 
          if ($viewModel) {
            echo '<h2 class="text__heading">Где можно учиться</h2>';
            foreach ($viewModel as $eduLevel) {
              if ($eduLevel['posts']) {
                echo '<i class="prof-description__list-heading">' . $eduLevel['name'] . '</i>';
                echo '<ul class="prof-description__list">';
                foreach ($eduLevel['posts'] as $currentPost) {
                  $postId = $currentPost->ID;
                  echo '<li><a href="'. get_permalink($postId) .'" class="link">' . get_the_title($postId) . '</a></li>';
                }
                echo '</ul>';
              }
            } 
          }
        ?>
      </section>
		
	  <?php if ( get_field('leading_empl') ) { ?>
		  <section class="text profs-item-page__list">
			<h2 class="text__heading">Ведущие работодатели</h2>
			<div class="generic-content">
			  <div class="profs-list p0 mb0">
				<ul>
				  <?php foreach ( get_field('leading_empl') as $itemID ) : ?>
					<li><a href="<?php echo get_the_permalink($itemID) ?>"><?php echo get_the_title($itemID) ?></a></li>
				  <?php endforeach; ?>
				</ul>
			  </div>
			</div>
		  </section>
      <?php } ?>
		
      <?php if ( get_field('empl_extra') ): ?>
        <section class="text profs-item-page__list">
          <h2 class="text__heading">Дополнительная информация о работодателях</h2>
          <div class="generic-content">
            <div class="profs-list p0">
              <?php echo get_field('empl_extra') ?>
            </div>
          </div>
        </section>
      <?php endif; ?>
    </div>

  </div>
</main>

<?php
get_footer();