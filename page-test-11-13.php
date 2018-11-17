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
						'title' => 'главная'
          ],
          [
            'профориентация' => '/vocational-guidance',
            'title'          => 'профориентация'
          ]
				]); 
			?>

    <h1 class="heading heading--page">
      <?php the_title() ?>
    </h1>

    <div class="test">
      <div class="test__description">
        <h2>Личностный опросник Айзенка (подростковый)</h2>
        <p>
          Темперамент человека не определяет однозначно успешность профессиональной деятельности.
        </p>
        <p>
          Тем не менее, установлено, что существует соответствие между особенностями личности человека и качеством
          его
          работы. Выполнив опросник Айзенка, Вы сможете определить насколько выражены у Вас базовые свойства
          темперамента и к какому типу темперамента вы относитесь (поскольку чистые типы встречаются крайне редко,
          скорее всего Вы узнаете, какой тип является преобладающим).
        </p>
        <p>
          По результатам тестирования Вы получите рекомендации, касающиеся того, какие виды профессиональной
          деятельности Вам подходят, а какие, наоборот, будут вызывать у Вас затруднения.
        </p>
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
      <style>
        .test__res {
          display: none;
        }
      </style>
      <div class="test__result">
        <?php $results = get_field('test_results')?>
        <?php foreach ($results as $resKey => $res): ?>
          <div class="test__res generic-content" data-key="<?php echo $resKey ?>">
            <?php echo $results[$resKey][0] ?>
            <ul>
              <?php foreach ($results[$resKey][1] as $profID): ?>
                <li><a href="#"><?php echo get_the_title($profID) ?></a></li>
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
  const elem = {
    startBtn: $('.test__button--start'),
    description: $('.test__description'),
    questionsBlock: $('.test__questions'),
    questions: $('.test__block'),
    prevBtn: $('.test__button--prev'),
    nextBtn: $('.test__button--next'),
    result: $('.test__result'),
    topIndex: $('.test__top-index'),
    bottomIndex: $('.test__bottom-index'),
    answerBtns: $('.test__answer')
  }
  elem.currentQuestion = elem.questions.first();

  const fadeDelay = 150;
  const maxIndex = elem.questions.length;
  let currentIndex = 0;
  const testResult = {};
  const testHistory = [];


  elem.startBtn.click(() => {
    elem.description.fadeOut(fadeDelay);
    elem.startBtn.fadeOut(fadeDelay, () => {
      elem.questionsBlock.fadeIn(fadeDelay);
      elem.currentQuestion.fadeIn(fadeDelay);
    });
    elem.prevBtn.prop('disabled', true);
    elem.nextBtn.prop('disabled', true);
    if (currentIndex === maxIndex) {
      elem.nextBtn.prop('disabled', true);
    }
    updateIndexes();
  });

  elem.nextBtn.click(() => {
    const checked = elem.currentQuestion.find('.test__input:checked');
    if (!checked.length) {
      return;
    }

    const current = {
      value: Number(checked.val()),
      key: checked.data('key')
    }

    testResult[current.key] = testResult[current.key] ?
      testResult[current.key] + current.value :
      current.value;

    testHistory.push(current);

    if (elem.prevBtn.is(':disabled')) {
      elem.prevBtn.prop('disabled', false)
    }

    elem.currentQuestion.fadeOut(fadeDelay, function () {
      elem.currentQuestion = $(this).next();
      elem.currentQuestion.fadeIn(fadeDelay);
    });
    elem.nextBtn.prop('disabled', true);

    ++currentIndex;
    if (currentIndex === maxIndex) {
      const [resultKey, ] = Object.entries(testResult).reduce(([maxKey, maxVal], [curKey, curVal]) => {	
        return curVal >= maxVal ? [curKey, curVal] : [maxKey, maxVal];
      });

      elem.questionsBlock.fadeOut(fadeDelay, () => {
        elem.result.fadeIn(fadeDelay);
        $('.test__res[data-key="' + resultKey + '"]').show();
      });
    } else {
      updateIndexes();
    }
  });

  elem.prevBtn.click(() => {
    if (elem.nextBtn.is(':disabled')) {
      elem.nextBtn.prop('disabled', false);
    }

    const {
      key: lastKey,
      value: lastValue
    } = testHistory.pop();
    testResult[lastKey] -= lastValue;

    elem.currentQuestion.fadeOut(fadeDelay, function () {
      elem.currentQuestion = $(this).prev();
      elem.currentQuestion.fadeIn(fadeDelay);
    });
    elem.nextBtn.prop('disabled', true);
    if (--currentIndex === 0) {
      elem.prevBtn.prop('disabled', true)
    }
    updateIndexes();
  });

  elem.answerBtns.click(() => {
    elem.nextBtn.prop('disabled', false);
  });

  function updateIndexes() {
    elem.topIndex.html(`Вопрос ${currentIndex + 1} из ${maxIndex}`);
    elem.bottomIndex.html(`${currentIndex + 1} / ${maxIndex}`);
  }
</script>

</body>

</html>