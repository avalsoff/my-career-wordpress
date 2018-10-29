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


<main class="profs-page">
  <div class="container">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item">
        <a href="#" class="breadcrumbs__link link">главная</a>
      </li>
    </ul>
    <h1 class="heading heading--page">Профессии</h1>

    <section class="directory">
      <!-- <pre> -->
      <?php
        $viewModel = array_reduce($posts, function($acc, $cur) {
          $currentLetter = mb_substr( $cur->post_title, 0, 1 );
          $acc[$currentLetter][] = [
            'title' => $cur->post_title,
            'link' => get_permalink( $cur->ID )
          ];
          return $acc;
        }, []);
        
        foreach ($viewModel as $letter => $profs) :?>
          <ul class="directory__group">
            <li class="directory__item">
              <h3 class="directory__heading"><?php echo $letter ?></h3>
            </li>
            <?php foreach ($profs as $prof) :?>
              <li class="directory__item">
                <a href="<?php echo $prof['link'] ?>" class="link directory__link">
                  <?php echo $prof['title'] ?>
                </a>
              </li>              
            <?php endforeach; ?>
          </ul>
      <?php endforeach; ?>

    </section>
  </div>
</main>



<?php
get_footer();