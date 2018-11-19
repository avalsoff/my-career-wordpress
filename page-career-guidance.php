<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Career
 */

get_header();
the_post();
?>

<main class="career-page">
  <div class="container">
    <?php 
      pageBreadcrumbps([
        [
          'href'  => '/',
          'title' => 'главная'
        ]
      ]); 
    ?>

    <h1 class="career-page__heading heading heading--page"><?php the_title() ?></h1>

    <div class="text career-page__text "><?php the_content() ?></div>

    <div class="index-page__links-group links-group">
      <ul class="links-group__items">
        <li class="links-group__item">
          <a href="<?php echo site_url('/test-11-13'); ?>" class="links-group__image logo-image">
            <img src="<?php bloginfo('template_url'); ?>/images/boy.jpg" alt="" class="logo-image__image">
          </a>
          <a href="<?php echo site_url('/test-11-13'); ?>" class="links-group__link link link--title">11-13 лет</a>
        </li>

        <li class="links-group__item">
          <a href="<?php echo site_url('/test-14-15'); ?>" class="links-group__image logo-image">
            <img src="<?php bloginfo('template_url'); ?>/images/girl.jpg" alt="" class="logo-image__image">
          </a>
          <a href="<?php echo site_url('/test-14-15'); ?>" class="links-group__link link link--title">14-15 лет</a>
        </li>

        <li class="links-group__item">
          <a href="<?php echo site_url('/test-16-17'); ?>" class="links-group__image logo-image">
            <img src="<?php bloginfo('template_url'); ?>/images/teenage.jpg" alt="" class="logo-image__image">
          </a>
          <a href="<?php echo site_url('/test-16-17'); ?>" class="links-group__link link link--title">16-17 лет</a>
        </li>

        <li class="links-group__item">
          <a href="<?php echo site_url('/test-18'); ?>" class="links-group__image logo-image">
            <img src="<?php bloginfo('template_url'); ?>/images/adult.jpg" alt="" class="logo-image__image">
          </a>
          <a href="<?php echo site_url('/test-18'); ?>" class="links-group__link link link--title">18 лет и старше</a>
        </li>

      </ul>
    </div>

  </div>
</main>

<?php
  get_footer('custom');
?>

</body>

</html>