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

<main class="edu-item-page">
  <div class="container">
    <?php 
      pageBreadcrumbps([
        [
          'href'  => '/',
          'title' => 'Главная'
        ],
        [
          'href'  => '/edu-orgs',
          'title' => 'Образование'
        ],
      ])
    ?>

    <div class="edu-item-page__logo logo-image logo-image--medium">
      <img src="<?php echo get_field('new_image')['url'] ?>" class="logo-image__image">
    </div>

    <h1 class="heading heading--page">Федеральное государственное бюджетное образовательное учреждение высшего
      образования «Сахалинский государственный университет»</h1>

    <div class="edu-item-page__container">
      <section class="edu-item-page__carousel slick--medium">
        <div class="slide slide--medium">
          <div class="slide__image-wrapper">
            <img src="<?php bloginfo('template_url'); ?>/images/edu-slide.jpg" alt="" class="slide__image">
          </div>
        </div>

        <div class="slide slide--medium">
          <div class="slide__image-wrapper">
            <img src="<?php bloginfo('template_url'); ?>/images/edu-slide.jpg" alt="" class="slide__image">
          </div>
        </div>

        <div class="slide slide--medium">
          <div class="slide__image-wrapper">
            <img src="<?php bloginfo('template_url'); ?>/images/edu-slide.jpg" alt="" class="slide__image">
          </div>
        </div>
      </section>

      <article class="edu-item-page__info">
        <section class="text text--text">
          <h3 class="text__heading">
            История образовательной организации
          </h3>
          <?php echo get_field('history') ?>
        </section>
        <section class="text text--text">
          <h3 class="text__heading">
            Направления подготовки
          </h3>
          <?php echo get_field('areas') ?>

        </section>
        <section class="text text--text text--with-bg text--wide-list">
          <h3 class="text__heading">
            Сотрудничество с работодателями
          </h3>
          <div class="generic-content">
            <div class="wide-list">
              <?php echo get_field('employers_coop') ?>
            </div>
          </div>
        </section>
        <section class="text text--text text--wide-list">
          <h3 class="text__heading">
            Приемущества для студентов
          </h3>
          <div class="generic-content">
            <div class="wide-list">
              <?php echo get_field('advantages') ?>
            </div>
          </div>
        </section>
        <hr>

        <section class="text text--text">
          <h3 class="text__heading">
            Контакты
          </h3>
          <div class="table__wrapper">
            <table class="table" cellspacing="0">
              <tr>
                <td class="table__heading">Ректор</td>
                <td class="table__data">Федоров Олег Анатольевич</td>
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
      </article>
    </div>
  </div>
</main>

<?php
get_footer();