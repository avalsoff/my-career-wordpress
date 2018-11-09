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
      ]    
    ?>

    <ul class="tabs">
      <li class="tabs__item">
        <a class="button<?php echo !$byProfs ? ' button--active' : '" href="?region=0' ?>">По районам</a>
      </li>
      <li class="tabs__item">
        <a class="button<?php echo $byProfs ? ' button--active' : '" href="?prof=' . array_keys($groupByProfs)[0] ?>">По профессии</a>
      </li>
    </ul>

    <div class="barometr-page__wrapper row">
      <article class="col-xl-9 col-lg-8">
        <section class="folder">
          <header class="folder__header">
            <h3 class="folder__heading">Баланс</h3>
            <small class="folder__title">Число вакансий и соискателей совпадает</small>
          </header>
          <main class="folder__profs">
            <ul class="folder__profs-list">
              <?php foreach ($viewModel[0] ?? [] as $item) : ?>
              <li class="folder__profs-item">
                <?php
                  echo $byProfs ? $idToMun[$item] : get_the_title($item) 
                ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </main>
        </section>

        <section class="folder folder--neutral">
          <header class="folder__header">
            <h3 class="folder__heading">Профицит</h3>
            <small class="folder__title">Число соискателей превышает число вакансий</small>
          </header>
          <main class="folder__profs">
            <ul class="folder__profs-list">
              <?php foreach ($viewModel[1] ?? [] as $item) : ?>
              <li class="folder__profs-item">
                <?php
                  echo $byProfs ? $idToMun[$item] : get_the_title($item) 
                ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </main>
        </section>

        <section class="folder folder--danger">
          <header class="folder__header">
            <h3 class="folder__heading">Дефицит</h3>
            <small class="folder__title">Число вакансий превышает число соискателей</small>
          </header>
          <main class="folder__profs">
            <ul class="folder__profs-list">
              <?php foreach ($viewModel[2] ?? [] as $item) : ?>
              <li class="folder__profs-item">
                <?php
                  echo $byProfs ? $idToMun[$item] : get_the_title($item) 
                ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </main>
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
        <h2 class="barometr-page__aside-heading">Поиск по професии</h2>
        <form class="search search-page__search">
          <button type="submit" class="search__icon"></button>
          <!-- <input class="search__input" type="search" placeholder="Найти..." name="prof"> -->
          <select class="search__input" name="prof">
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
                echo '<option value="' . get_the_ID() . '">' . get_the_title() . '</option>';
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