<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Career
 */

get_header();
?>


<main class="profs-page">
  <div class="container">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item">
        <a href="#" class="breadcrumbs__link link">главная</a>
      </li>
    </ul>
    <h1 class="heading heading--page">Профессии</h1>

    <section class="directory">
      <pre>
        <?php
          print_r($wp_query->posts);
        ?>
      </pre>
      <?php 
        ########
        #      #
        #      #
        ########
      ?>
      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">А</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Авиаконструктор</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Агроинженер</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Агроном</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Администратор баз данных</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Арматурщик</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Архитектор</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">Б</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Бетонщик</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Биолог</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">В</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Воспитатель детей дошкольного возраста</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Воспитатель детей дошкольного возраста с отклонениями в развитии и
            с сохраненным развитием</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Врач</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">Г</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Геодезист</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Графический дизайнер</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">Д</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Делопроизводитель</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">И</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Инженер по автоматизации и механизации производственных процессов</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Инженер по автоматизации технологических процессов</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Инженер по землеустройству</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Инженер по качеству</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Инженер по охране труда</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Инженер по пожарной безопасности</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Инженер по транспорту</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Инженер связи</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Инженер-конструктор</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Инженер-материаловед</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Инженер-программист</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Инженер-строитель</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Инженер-электроник</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">К</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Каменщик</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Косметолог</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">Л</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Лаборант химического анализа</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">М</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Маляр</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Мастер декоративных работ</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Мастер столярно-плотницких работ</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Машинист зерновых погрузочно-разгрузочных машин</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Медицинская сестра</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Менеджер</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Менеджер по персоналу</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Менеджер по туризму</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Металлург</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Метролог</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Мехатроник</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Мобильный робототехник</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">Н</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Наладчик-ремонтник промышленного оборудования</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Наноинженер</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">О</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Обвальщик тушек птицы</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Облицовщик-плиточник</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Обработчик рыбы</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Оператор беспилотных летательных аппаратов</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Оператор птицефабрик и механизированных ферм</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Оператор свиноводческих комплексов и механизированных ферм</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Оператор станков с программным управлением</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Официант, бармен</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">П</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Парикмахер</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Переводчик</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Повар-кондитер</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Портной</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Программист</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Продавец</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Психолог</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">Р</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Разработчик web и мультимедийных приложений</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">С</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Санитар ветеринарный</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Сантехник</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Сборщик электронных систем (специалист по электронным приборам и
            устройствам)</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Сварщик</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Сетевой и системный администратор</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Слесарь</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Слесарь по</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">КИПиА</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Слесарь по ремонту автомобилей</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Слесарь по ремонту газового оборудования</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Слесарь-сборщик летательных аппаратов</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Слесарь-трубопроводчик</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Социальный работник</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Специалист в области контрольно-измерительных приборов и
            автоматики (по отраслям)</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Специалист по аддитивным технологиям</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Специалист по гостеприимству</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Специалист по обслуживанию телекоммуникаций</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Специалист по производству и обслуживанию авиатехники</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Специалист по связям с общественностью</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Специалист по социальной работе</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Специалист по термической обработке металлов</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Специалист по техническому контролю качества продукции</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Специалист по технологии машиностроения</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Специалист по холодильно-вентиляционной технике</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Судокорпусник-ремонтник</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">Т</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Техник авиационных двигателей</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Техник по автоматизированным системам управления технологическими
            процессами</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Техник по биотехническим и медицинским аппаратам и системам</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Техник по защите информации</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Техник по композитным материалам</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Техник по обслуживанию роботизированного производства</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Техник по организации перевозок и управления на транспорте</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Техник по технической эксплуатации гидравлических машин,
            гидроприводов и гидропневмоавтоматики</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Техник-конструктор</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Техник-механик в сельском хозяйстве</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Техник-полиграфист</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Технолог-конструктор швейных изделий</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Технолог легкой промышленности</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Товаровед</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Токарь-универсал</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">У</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Учитель</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Учитель начальных классов</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Учитель начальных классов, компенсирующего и
            коррекционно-развивающего образования</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">Ф</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Фельдшер</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Фрезеровщик</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">Ш</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Штукатур</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">Э</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Экономист</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Электромонтажник</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Электромонтер по ремонту и обслуживанию электрооборудования</a>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Энергетик</a>
        </li>
      </ul>

      <ul class="directory__group">
        <li class="directory__item">
          <h3 class="directory__heading">Ю</h3>
        </li>
        <li class="directory__item">
          <a href="#" class="link directory__link">Юрист</a>
        </li>
      </ul>

    </section>
  </div>
</main>



<?php
get_footer();