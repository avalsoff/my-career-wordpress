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
            $questionText = 'Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам
            пришлось выбирать только из двух возможностей, что бы вы предпочли?';
            $value = 1;
            $questions = [
              [
                [
                  'text' => 'Ухаживать за животными',
                  'key'  => 'nature'
                ],
                [
                  'text' => 'Обслуживать машины, приборы (следить, регулировать)',
                  'key'  => 'tech'
                ]
              ],
              [
                [
                  'text' => 'Помогать больным',
                  'key'  => 'human'
                ],
                [
                  'text' => 'Составлять таблицы, схемы, программы для вычислительных машин',
                  'key'  => 'sign_system'
                ]
              ],
              [
                [
                  'text' => 'Следить за качеством книжных иллюстраций, плакатов, художественных открыток, грампластинок',
                  'key'  => 'artist'
                ],
                [
                  'text' => 'Следить за состоянием, развитием растений',
                  'key'  => 'nature'
                ]
              ],
              [
                [
                  'text' => 'Обрабатывать материалы (дерево, ткань, металл, пластмассу и т.п.) ',
                  'key'  => 'tech'
                ],
                [
                  'text' => 'Доводить Товары до потребителя, рекламировать, продавать',
                  'key'  => 'human'
                ]
              ],
              [
                [
                  'text' => 'Обсуждать научно-популярные книги, статьи',
                  'key'  => 'sign_system'
                ],
                [
                  'text' => 'Обсуждать художественные книги (или пьесы, концерты)',
                  'key'  => 'artist'
                ]
              ],
              [
                [
                  'text' => 'Выращивать молодняк (животных какой-либо породы) ',
                  'key'  => 'nature'
                ],
                [
                  'text' => 'Тренировать товарищей (или младших) в выполнении каких-либо действий (трудовых, учебных, спортивных)',
                  'key'  => 'human'
                ]
              ],
              [
                [
                  'text' => 'Копировать рисунки, изображения (или настраивать музыкальные инструменты)',
                  'key'  => 'artist'
                ],
                [
                  'text' => 'Управлять каким-либо грузовым (подъемным или транспортным) средством – подъемным краном, трактором, тепловозом и др.',
                  'key'  => 'tech'
                ]
              ],
              [
                [
                  'text' => 'Сообщать, разъяснять людям нужные им сведения (в справочном бюро, на экскурсии и т.д.)',
                  'key'  => 'human'
                ],
                [
                  'text' => 'Оформлять выставки, витрины (или участвовать в подготовке пьес, концертов)',
                  'key'  => 'artist'
                ]
              ],
              [
                [
                  'text' => 'Ремонтировать вещи, изделия (одежду, технику), жилище',
                  'key'  => 'tech'
                ],
                [
                  'text' => 'Искать и исправлять ошибки в текстах, таблицах, рисунках',
                  'key'  => 'sign_system'
                ]
              ],
              [
                [
                  'text' => 'Лечить животных',
                  'key'  => 'nature'
                ],
                [
                  'text' => 'Выполнять вычисления, расчеты',
                  'key'  => 'sign_system'
                ]
              ],
              [
                [
                  'text' => 'Выводить новые сорта растений',
                  'key'  => 'nature'
                ],
                [
                  'text' => 'Конструировать, проектировать новые виды промышленных изделий (машины, одежду, дома, продукты питания и т.п.)',
                  'key'  => 'tech'
                ]
              ],
              [
                [
                  'text' => 'Разбирать споры, ссоры между людьми, убеждать, разъяснять, наказывать, поощрять  ',
                  'key'  => 'human'
                ],
                [
                  'text' => 'Разбираться в чертежах, схемах, таблицах (проверять, уточнять, приводить в порядок)',
                  'key'  => 'sign_system'
                ]
              ],
              [
                [
                  'text' => 'Наблюдать, изучать работу кружков художественной самодеятельности',
                  'key'  => 'artist'
                ],
                [
                  'text' => 'Наблюдать, изучать жизнь микробов',
                  'key'  => 'nature'
                ]
              ],
              [
                [
                  'text' => 'Обслуживать, налаживать медицинские приборы, аппараты ',
                  'key'  => 'tech'
                ],
                [
                  'text' => 'Оказывать людям медицинскую помощь при ранениях, ушибах, ожогах и т.п.',
                  'key'  => 'human'
                ]
              ],
              [
                [
                  'text' => 'Художественно описывать, изображать события (наблюдаемые и представляемые)',
                  'key'  => 'sign_system'
                ],
                [
                  'text' => 'Составлять точные описания-отчеты о наблюдаемых явлениях, событиях, измеряемых объектах и др.',
                  'key'  => 'artist'
                ]
              ],
              [
                [
                  'text' => 'Делать лабораторные анализы в больнице',
                  'key'  => 'nature'
                ],
                [
                  'text' => 'Принимать, осматривать больных, беседовать с ними, назначать лечение',
                  'key'  => 'human'
                ]
              ],
              [
                [
                  'text' => 'Красить или расписывать стены помещений, поверхность изделий',
                  'key'  => 'artist'
                ],
                [
                  'text' => 'Осуществлять монтаж или сборку машин, приборов',
                  'key'  => 'tech'
                ]
              ],
              [
                [
                  'text' => 'Организовать культпоходы сверстников или младших в театры, музеи, экскурсии, туристические походы и т.п. ',
                  'key'  => 'human'
                ],
                [
                  'text' => 'Играть на сцене, принимать участие в концертах
                  ',
                  'key'  => 'artist'
                ]
              ],
              [
                [
                  'text' => 'Изготовлять по чертежам детали, изделия (машины, одежду), строить здания',
                  'key'  => 'tech'
                ],
                [
                  'text' => 'Заниматься черчением, копировать чертежи, карты',
                  'key'  => 'sign_system'
                ]
              ],
              [
                [
                  'text' => 'Вести борьбу с болезнями растений, с вредителями леса, сада',
                  'key'  => 'nature'
                ],
                [
                  'text' => 'Работать на клавишных машинах (пишущей машинке, телетайпе, наборной машине и др.)',
                  'key'  => 'sign_system'
                ]
              ],
            ];
          ?>

          <?php foreach ($questions as $i => $question): ?>
            <div class="test__block">
              <p class="test__question"><?php echo $questionText ?></p>
              <?php foreach ($question as $answer): ?>
                <label class="test__answer">
                  <input class="test__input" value="<?php echo $value ?>" data-key="<?php echo $answer['key'] ?>" type="radio" name="<?php echo 'ans_' . $i ?>">
                  <span><?php echo $answer['text'] ?></span>
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
        <?php $results = get_field('test_results') ?>
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