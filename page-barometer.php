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

<main class="barometr-page">
  <div class="container">
    <?php 
      pageBreadcrumbps([
        [
          'href'  => '/',
          'title' => 'Главная'
        ]
      ]); 
    ?>

    <h1 class="heading heading--page">
      <?php the_title() ?>
    </h1>

    <?php
      $profVar = sanitize_text_field( get_query_var('prof') );
      $region = sanitize_text_field( get_query_var('region') );

      $field = get_field('bar_demand');
      $field = array_filter($field, function($el) {
        return $el !== NULL;
      });

      $byProfs = false;

      $groupByProfs = [];
      foreach ($field as $mun => $groups) {
        foreach ($groups as $group => $profs) {
          if ($profs) {
            foreach ($profs as $index => $prof) {
              $groupByProfs[$prof][$group][] = $mun;
            }
          }
        }
      }

      if ($profVar === '') {
        if (!$region) $region = 0;
        $viewModel = $field[$region];
      } else {
        $byProfs = true;
        $viewModel = $groupByProfs[$profVar];
      }

      $idToMun = [
        0 => 'Город Южно-Сахалинск',
        1 => 'Александровск-Сахалинский район',
        2 => 'Анивский городской округ',
        3 => 'Долинский городской округ',
        4 => 'Корсаковский городской округ',
        5 => 'Курильский городской округ',
        6 => 'Макаровский городской округ',
        7 => 'Невельский городской округ',
        8 => 'Ногликский городской округ',
        9 => 'Охинский городской округ',
        10 => 'Поронайский городской округ',
        11 => 'Северо-Курильский городской округ',
        12 => 'Смирныховский городской округ',
        13 => 'Томаринский городской округ',
        14 => 'Тымовский городской округ',
        15 => 'Углегорский городской округ',
        16 => 'Холмский городской округ',
        17 => 'Южно-Курильский городской округ',
        18 => 'Сахалинская область'
      ];
    ?>

    <ul class="tabs">
      <li class="tabs__item">
        <a class="button<?php echo !$byProfs ? ' button--active' : '" href="?region=0' ?>">По районам</a>
      </li>
      <li class="tabs__item">
        <a class="button<?php echo $byProfs ? ' button--active' : '" href="?prof=' . array_keys($groupByProfs)[0] ?>">По профессии</a>
      </li>
    </ul>
    
    <?php 
      function printItem($item, $byProfs, $idToMun) {

        if ($byProfs) {
          echo $idToMun[$item];
        } else {
          if ( get_post_field('post_content', $item) ) {
            $atts .= 'class="link link--tel" href="' . get_permalink($item) . '"';
            echo '<a ' . $atts . '>' . get_the_title($item) . '</a>';
          } else {
            echo get_the_title($item);
          }
        }
      }
    ?>

    <div class="barometr-page__wrapper row">
      <article class="col-xl-9 col-lg-8">
        <section class="folder">
          <div class="folder__header">
            <h3 class="folder__heading">Баланс</h3>
            <small class="folder__title">Число вакансий и соискателей совпадает</small>
          </div>
          <div class="folder__profs">
            <ul class="folder__profs-list">
              <?php if ( !$viewModel[0] ): ?>
                <li class="folder__profs-item">Нет регионов</li>
              <?php endif; ?>
              <?php foreach ($viewModel[0] as $item) : ?>
              <li class="folder__profs-item">
                <?php
                  printItem($item, $byProfs, $idToMun)
                ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </section>

        <section class="folder folder--neutral">
          <div class="folder__header">
            <h3 class="folder__heading">Профицит</h3>
            <small class="folder__title">Число соискателей превышает число вакансий</small>
          </div>
          <div class="folder__profs">
            <ul class="folder__profs-list">
              <?php if ( !$viewModel[1] ): ?>
                <li class="folder__profs-item">Нет регионов</li>
              <?php endif; ?>
              <?php foreach ($viewModel[1] as $item) : ?>
              <li class="folder__profs-item">
                <?php
                  printItem($item, $byProfs, $idToMun)
                ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </section>

        <section class="folder folder--danger">
          <div class="folder__header">
            <h3 class="folder__heading">Дефицит</h3>
            <small class="folder__title">Число вакансий превышает число соискателей</small>
          </div>
          <div class="folder__profs">
            <ul class="folder__profs-list">
              <?php if ( !$viewModel[2] ): ?>
                <li class="folder__profs-item">Нет регионов</li>
              <?php endif; ?>
              <?php foreach ($viewModel[2] as $item) : ?>
              <li class="folder__profs-item">
                <?php
                  printItem($item, $byProfs, $idToMun)
                ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </section>
      </article>
      <aside class="col-xl-3 col-lg-4">
        <?php if (!$byProfs) { ?>
        <h2 class="barometr-page__aside-heading">Районы</h2>
        <hr class="hr barometr-page__hr">
        <ul class="barometr-page__districts">
          <?php foreach ($idToMun as $munId => $mun): ?>
            <li class="barometr-page__dis-item">
            <?php 
              $attribs = ($region == $munId ? 'link--active' : '" href="?region=' . $munId);
              echo '<a class="link ' . $attribs . '">' . $mun . '</a>' 
            ?>
            </li>
          <?php endforeach; ?>
        </ul>
        <?php } else {  ?>
        <h2 class="barometr-page__aside-heading">Выбор професcии</h2>
        <form class="search search-page__search">
          <!-- <input class="search__input" type="search" placeholder="Найти..." name="prof"> -->
          <select class="search__input search__input--select" name="prof" onchange="this.form.submit()">
            <?php 
            $allProfessions = new WP_Query([
              'posts_per_page' => -1,
              'post_type' => 'profession',
              'orderby' => 'title',
              'order' => 'ASC'
            ]);

            if ( $allProfessions->have_posts() ) {
              while ( $allProfessions->have_posts() ) {
                $allProfessions->the_post();
                $selected = $profVar == get_the_ID() ? 'selected' : '';
                echo '<option '. $selected . ' value="' . get_the_ID() . '">' . get_the_title() . '</option>';
              }
            }          
            wp_reset_postdata();
            ?>
            
          </select>
        </form>
        <?php } ?>
      </aside>
    </div>
  </div>


</main>
<?php
get_footer();