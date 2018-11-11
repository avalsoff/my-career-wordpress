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

<main class="employers-item-page">
  <div class="container">
    <div class="employers-item-page__container">

      <?php 
        pageBreadcrumbps([
          [
            'href'  => '/',
            'title' => 'Главная'
          ],
          [
            'href'  => '/employers',
            'title' => 'Работодатели'
          ],
        ])
      ?>

      <div class="employers-item-page__logo logo-image logo-image--square logo-image--medium">
        <img src="<?php echo get_field('new_image')['url'] ?>" class="logo-image__image">
      </div>

      <h1 class="heading heading--page">
        <?php the_title() ?>
      </h1>

      <div class="text">
        <?php the_content() ?>
      </div>

      <hr class="employers-item-page__hr hr">

      <section class="text text--text">
        <h3 class="text__heading">
          Контакты
        </h3>
        <div class="table__wrapper">
          <table class="table" cellspacing="0">
            <tr>
              <td class="table__heading">Руководитель:</td>
              <td class="table__data">
                <?php echo get_field('director') ?>
              </td>
            </tr>
            <tr>
              <td class="table__heading">Начальник отдела кадров:</td>
              <td class="table__data">
                <?php echo get_field('hr_chief') ?>
              </td>
            </tr>
            <tr>
              <td class="table__heading">Адрес:</td>
              <td class="table__data">
                <?php echo get_field('address') ?>
              </td>
            </tr>
            <tr>
              <td class="table__heading">Тел:</td>
              <td class="table__data">
                <?php echo get_field('phone') ?>
              </td>
            </tr>
            <tr>
              <td class="table__heading">E-mail: </td>
              <td class="table__data">
                <a href="mailto:<?php echo get_field('email') ?>" class="link">
                  <?php echo get_field('email') ?>
                </a>
              </td>
            </tr>
            <tr>
              <td class="table__heading">Сайт:</td>
              <td class="table__data">
                <a href="<?php echo get_field('site') ?>" class="link">
                  <?php echo get_field('site') ?>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </section>
    </div>
  </div>
</main>

<?php
get_footer();