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

    <?php if ( get_field('new_image') ) { ?>
      <div class="edu-item-page__logo logo-image logo-image--medium">
        <img src="<?php echo get_field('new_image')['url'] ?>" class="logo-image__image">
      </div>
    <?php } ?>

    <h1 class="heading heading--page">Федеральное государственное бюджетное образовательное учреждение высшего
      образования «Сахалинский государственный университет»</h1>

    <div class="edu-item-page__container">
      <?php if ( get_field('edu_images') ) { ?>
        <section class="edu-item-page__carousel slick--medium">
          <?php 
            $images = get_field('edu_images');
            foreach ($images as $image) { ?>
              <div class="slide slide--medium">
                <div class="slide__image-wrapper">
                  <img src="<?php echo $image['image']['url'] ?>" alt="<?php echo $image['image']['alt'] ?>" class="slide__image">
                </div>
              </div>
          <?php
            }
          ?>
        </section>
      <?php } ?>

      <article class="edu-item-page__info">
        <section class="text text--text">
          <h3 class="text__heading">
            История образовательной организации
          </h3>
          <?php echo get_field('history') ?>
        </section>
        <section class="text text--text">
          <h3 class="text__heading">
            Структура
          </h3>
          <?php echo get_field('areas') ?>

        </section>

        <?php if ( $coop = get_field('employers_coop') ) { ?>
          <section class="text text--text text--with-bg text--wide-list">
            <h3 class="text__heading">
              Сотрудничество с работодателями
            </h3>
            <div class="generic-content">
              <div class="wide-list">
                <ul>
                  <?php 
                    $coop = get_field('employers_coop');
                    foreach ($coop as $employerId) {
                      echo '<li><a class="link" href="' . get_permalink($employerId) . '">' . get_the_title($employerId) . '</a></li>';
                    }
                  ?>
                </ul>
              </div>
            </div>
          </section>
        <?php } ?>
        
        <section class="text text--text text--wide-list">
          <h3 class="text__heading">
            Дополнительная информация о работодателях
          </h3>
          <div class="generic-content">
            <div class="wide-list">
              <?php echo get_field('employers_extra') ?>
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

        <?php if ( get_field('edu_indicators') ) { ?>          
          <section class="text text--text">
            <h3 class="text__heading">
              Показатели системы образования
            </h3>
            <div class="generic-content">
              <div class="profs-list">
                <?php echo get_field('edu_indicators') ?>
              </div>
            </div>
            
          </section>
        <?php } ?>        

        <?php if ( get_field('edu_prof_list') ) { ?>          
          <section class="text text--text">
            <h3 class="text__heading">
              Перечень профессий / специальностей
            </h3>            
            <div class="generic-content">
              <div class="wide-list">
                <?php echo get_field('edu_prof_list') ?>
              </div>
            </div>
          </section>
        <?php } ?>

        <section class="text text--text">
          <h3 class="text__heading">
            Контакты
          </h3>
          <div class="table__wrapper">
            <table class="table" cellspacing="0">
              <tr>
                <td class="table__heading">Руководитель</td>
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