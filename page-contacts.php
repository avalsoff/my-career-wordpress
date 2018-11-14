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
?>

<main class="contacts-page">
  <div class="container">
    <div class="contacts-page__container">
      <?php 
        pageBreadcrumbps([
          [
            'href'  => '/',
            'title' => 'Главная'
          ]
        ]); 
      ?>

      <h1 class="heading heading--page"><?php the_title() ?></h1>

      <div class="contacts-page__map map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8fa0dec5af9e77f2b7adf52e7d27d5f5846b0bf8dd174bf9729c55e680bd7925&amp;width=100%25&amp;height=360&amp;lang=ru_RU&amp;scroll=true"></script>
      </div>


      <div class="text"><?php the_content() ?></div>

      <div class="table__wrapper">
        <table class="table" cellspacing="0">
          <tr>
            <td class="table__heading">Адрес:</td>
            <td class="table__data">
              <?php echo get_field('contacts_address') ?>
            </td>
          </tr>
          <tr>
            <td class="table__heading">Тел:</td>
            <td class="table__data">              
              <?php echo get_field('contacts_phone') ?>
            </td>
          </tr>
          <tr>
            <td class="table__heading">E-mail: </td>
            <td class="table__data">
              <a href="mailto:<?php echo get_field('contacts_email') ?>" class="link">
                <?php echo get_field('contacts_email') ?>
              </a>
            </td>
          </tr>
          <tr>
            <td class="table__heading">Сайт:</td>
            <td class="table__data">
              <a href="mailto:<?php echo get_field('contacts_site') ?>" class="link">
                <?php echo get_field('contacts_site') ?>
              </a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</main>

<?php
get_footer();