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

<main class="test-page">
  <!-- <pre>
    <?php 
      // echo esc_html( print_r( get_field('test_results'), true) );
    ?>
  </pre> -->
  <div class="container test-page__container">
    <?php 
      pageBreadcrumbps([
        [
          'href'  => '/',
          'title' => 'Главная' 
        ],
        [
          'href'  => '/career-guidance',
          'title' => 'Профориентация' 
        ],
      ]) 
    ?>

    <h1 class="heading heading--page">
      <?php the_title() ?>
    </h1>

    <div class="test">
      <div class="test__description">
        <?php the_content() ?>
        <button class="test__button test__button--start">Пройти тест</button>
      </div>
      <div class="test__questions">
        <p class="test__instruction">
          Вам предлагается оценить различные виды занятий, описанные в опроснике. Оценивайте по порядку каждое
          занятие, ничего не пропуская. Подумайте перед ответом на каждый вопрос и постарайтесь дать как можно более
          точный ответ.
        </p>
        <div class="test__main">
          <small class="test__top-index"></small>
          <?php
            $questionText = 'Нравится ли тебе';
            $answers = [
              [
                'text' => 'Да',
                'value' => 2
              ],
              [
                'text' => 'Нет',
                'value' => 0
              ],
              [
                'text' => 'Затрудняюсь ответить',
                'value' => 1
              ],
            ];
            $keys = ['fim', 'hib', 'rie', 'mik', 'gig', 'lii', 'iip', 'pim', 'pid', 'siv'];
            $questions = [
              'Узнавать об открытиях в области физики и математики.',
              'Смотреть передачи о жизни растений и животных.',
              'Выяснять устройство электроприборов.',
              'Читать научно-популярные технические журналы.',
              'Смотреть передачи о жизни людей в разных странах.',
              'Бывать на выставках, концертах, спектаклях.',
              'Обсуждать и анализировать события в стране и за рубежом.',
              'Наблюдать за работой медсестры, врача.',
              'Создавать уют и порядок в доме, классе, школе.',
              'Читать книги и смотреть фильмы о войнах и сражениях. ',
              'Заниматься математическими расчетами и вычислениями.',
              'Узнавать об открытиях в области химии и биологии.',
              'Ремонтировать бытовые электроприборы.',
              'Посещать технические выставки, знакомиться с достижениями науки и техники.',
              'Ходить в походы, бывать в новых неизведанных местах.',
              'Читать отзывы и статьи о книгах, фильмах, концертах.',
              'Участвовать в общественной жизни школы, города.',
              'Объяснять одноклассникам учебный материал.',
              'Самостоятельно выполнять работу по хозяйству.',
              'Соблюдать режим, вести здоровый образ жизни.',
              'Проводить опыты по физике.',
              'Ухаживать за животными растениями.',
              'Читать статьи об электронике и радиотехнике.',
              'Собирать и ремонтировать часы, замки, велосипеды. ',
              'Коллекционировать камни, минералы.',
              'Вести дневник, сочинять стихи и рассказы.',
              'Читать биографии известных политиков, книги по истории.',
              'Играть с детьми, помогать делать уроки младшим.',
              'Закупать продукты для дома, вести учет расходов.',
              'Участвовать в военных играх, походах.',
              'Заниматься физикой и математикой сверх школьной программы.',
              'Замечать и объяснять природные явления.',
              'Собирать и ремонтировать компьютеры.',
              'Строить чертежи, схемы, графики, в том числе на компьютере.',
              'Участвовать в географических, геологических экспедициях.',
              'Рассказывать друзьям о прочитанных книгах, увиденных фильмах и спектаклях.',
              'Следить за политической жизнью в стране и за рубежом.',
              'Ухаживать за маленькими детьми или близкими, если они заболели.',
              'Искать и находить способы зарабатывания денег.',
              'Заниматься физической культурой и спортом.',
              'Участвовать в физико-математических олимпиадах.',
              'Выполнять лабораторные опыты по химии и биологии.',
              'Разбираться в принципах работы электроприборов.',
              'Разбираться в принципах работы различных механизмов.',
              '“Читать” географические и геологические карты.',
              'Участвовать в спектаклях, концертах.',
              'Изучать политику и экономику других стран.',
              'Изучать причины поведения людей, строение человеческого организма.',
              'Вкладывать заработанные деньги в домашний бюджет.',
              'Участвовать в спортивных соревнованиях.',
            ];
          ?>

          <?php foreach ($questions as $qIndex => $question): ?>
            <div class="test__block">
              <p class="test__question">
                <?php echo $question ?>
              </p>
              <?php foreach ($answers as $ansIndex => $answer): ?>
                <label class="test__answer">
                  <input class="test__input" value="<?php echo $answer['value'] ?>" data-key="<?php echo $keys[($qIndex + 1) % 10] ?>" type="radio"
                    name="<?php echo 'ans_' . $qIndex ?>">
                  <span>
                    <?php echo $answer['text'] ?></span>
                </label>
              <?php endforeach; ?>
            </div>
          <?php endforeach; ?>

          <div class="test__controls">
            <button class="test__button test__button--prev" type="button">Назад</button>
            <small class="test__bottom-index"></small>
            <button class="test__button test__button--next" type="button">Далее</button>
          </div>
        </div>
      </div>
      <div class="test__result">
        <?php $results = get_field('test_results')?>
        <div class="test__points">
          Вы набрали {{res}} баллов по шкале:
        </div>
        <?php foreach ($results as $resKey => $res): ?>
        <div class="test__res generic-content profs-list" data-key="<?php echo $resKey ?>">
          <?php echo $results[$resKey][0] ?>
          <ul>
            <?php foreach ($results[$resKey][1] as $profID): ?>
                <li>
					<? if ( get_post_field('post_content', $profID) ) { ?>
					<a href="<? echo get_permalink($profID); ?>"><?php echo get_the_title($profID); ?></a>
					<? } else { echo get_the_title($profID); } ?>
				</li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</main>

<?php
  get_footer('custom');
?>

<script>  
  careerTest();
</script>

</body>

</html>