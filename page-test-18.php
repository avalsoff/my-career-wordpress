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
          Оцените каждый из предложенных предложенный вопросов и выберите один из трех вариантов ответов на него
        </p>
        <div class="test__main">
          <small class="test__top-index"></small>
          <?php
            $answerType1 = [
              [
                'text'  => 'Да',
                'value' => 2
              ],
              [
                'text'  => 'Затрудняюсь ответить',
                'value' => 1
              ],
              [
                'text'  => 'Нет',
                'value' => 2
              ]
            ];

            $answerType1Indexes = [2, 5, 6, 8, 10, 11, 13, 14, 15, 16, 17, 18, 19, 20, 21, 24, 25, 26, 27];

            $answerType2 = [
              [
                'text'  => 'Да',
                'value' => 0
              ],
              [
                'text'  => 'Затрудняюсь ответить',
                'value' => 1
              ],
              [
                'text'  => 'Нет',
                'value' => 2
              ]
            ];

            $customAnswer1 = [
              [
                'text'  => 'Логичность текста',
                'value' => 2
              ],
              [
                'text'  => 'Затрудняюсь ответить',
                'value' => 1
              ],
              [
                'text'  => 'Образность изложения',
                'value' => 2
              ]
            ];
            $customAnswer1Index = 18;

            $customAnswer2 = [
              [
                'text'  => 'Обеспечивала меня нужной порцией адреналина',
                'value' => 0
              ],
              [
                'text'  => 'Затрудняюсь ответить',
                'value' => 1
              ],
              [
                'text'  => 'Давала бы мне ощущение спокойствия и надежности',
                'value' => 2
              ]
            ];
            $customAnswer2Index = 21;

            $questions = [
              'Работа, связанная с учетом и контролем, – это довольно скучно.',
              'Я предпочту заниматься финансовыми операциями, а не, например, музыкой.',
              'Невозможно точно рассчитать, сколько времени уйдет на дорогу до работы, по крайней мере, мне.',
              'Я часто рискую.',
              'Меня раздражает беспорядок.',
              'Я охотно почитал(а) бы на досуге о последних достижениях в различных областях науки.',
              'Записи, которые я делаю, не очень хорошо структурированы и организованы.',
              'Я предпочитаю разумно распределять деньги, а не тратить все сразу.',
              'У меня наблюдается, скорее, рабочий беспорядок на столе, чем расположение вещей по аккуратным «стопочкам».',
              'Меня привлекает работа, где необходимо действовать согласно инструкции или четко заданному алгоритму.',
              'Если бы я что-то собирал(а), я бы постарался(ась) привести в порядок коллекцию, все разложить по папочкам и полочкам.',
              'Терпеть не могу наводить порядок и систематизировать что бы то ни было.',
              'Мне нравится работать на компьютере – оформлять или просто набирать тексты, производить расчеты.',
              'Прежде чем действовать, надо продумать все детали.',
              'На мой взгляд, графики и таблицы – очень удобный и информативный способ предоставления информации.',
              'Мне нравятся игры, в которых я могу точно рассчитать шансы на успех и сделать осторожный, но точный ход.',
              'При изучении иностранного языка я предпочитаю начинать с грамматики, а не получать разговорный опыт без знания грамматических основ.',
              'Сталкиваясь с какой-либо проблемой, я пытаюсь всесторонне ее изучить (ознакомиться с соответствующей литературой, поискать нужную информацию в интернете, поговорить со специалистами).',
              'Если я выражаю свои мысли на бумаге, мне важнее...',
              'У меня есть ежедневник, в который я записываю важную информацию на несколько дней вперед.',
              'Я с удовольствием смотрю новости политики и экономики.',
              'Я бы хотел(а), чтобы моя будущая профессия.',
              'Я доделываю работу в последний момент.',
              'Взяв книгу, я всегда ставлю ее на место.',
              'Когда я ложусь спать, то уже наверняка знаю, что буду делать завтра.',
              'В своих словах и поступках я следую пословице «Семь раз отмерь, один – отрежь».',
              'Перед ответственными делами я всегда составляю план их выполнения.',
              'После вечеринки мытье посуды я откладываю до утра.'
            ];
          ?>

          <?php foreach ($questions as $qIndex => $question): ?>
            <div class="test__block">
              <p class="test__question">
                <?php echo $question ?>
              </p>
              <?php
                if ($qIndex == $customAnswer1Index) {
                  $answer = $customAnswer1;
                } else if ($qIndex == $customAnswer2Index) {
                  $answer = $customAnswer2;
                } else if ( in_array($qIndex, $answerType1Indexes) ) {
                  $answer = $answerType1;
                } else {
                  $answer = $answerType2;
                }
              ?>
              <?php foreach ($answer as $item): ?>
                <label class="test__answer">
                  <input class="test__input" value="<?php echo $item['value'] ?>" data-key="test" type="radio"
                    name="<?php echo 'ans_' . $qIndex ?>">
                  <span>
                    <?php echo $item['text'] ?></span>
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
          Вы набрали {{res}} баллов!
        </div>
        <?php foreach ($results as $resKey => $res): ?>
          <div class="test__res generic-content profs-list" data-key="<?php echo $resKey ?>">
            <?php echo $results[$resKey][0] ?>
            <?php if ($results[$resKey][1]): ?>
              <ul>
                <?php foreach ($results[$resKey][1] as $profID): ?>
                <li>
					<? if ( get_post_field('post_content', $profID) ) { ?>
					<a href="<? echo get_permalink($profID); ?>"><?php echo get_the_title($profID); ?></a>
					<? } else { echo get_the_title($profID); } ?>
				</li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
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
  careerTest(true);
</script>

</body>

</html>