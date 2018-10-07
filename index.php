<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Career
 */

get_header();
?>

<main class="page__main index-page">
	<div class="container">
		<section class="index-page__carousel">
			<div class="slide">
				<div class="slide__image-wrapper">
					<img src="./img/index-slide-1.jpg" alt="" class="slide__image">
				</div>
				<h3 class="slide__heading">
					<a href="#" class="link link--title">
						Неделя без турникетов
					</a>
				</h3>
				<p class="slide__caption">В Сахалинской области для школьников с 16 по 22 октября 2017 года пройдет
					всероссийская акция «Неделя без турникетов»</p>
			</div>

			<div class="slide">
				<div class="slide__image-wrapper">
					<img src="./img/index-slide-1.jpg" alt="" class="slide__image">
				</div>
				<h3 class="slide__heading">
					<a href="#" class="link link--title">
						Нацфинал «Молодые профессионалы»
					</a>
				</h3>
				<p class="slide__caption">В Сахалинской области для школьников с 16 по 22 октября 2017 года пройдет
					всероссийская акция «Неделя без турникетов»</p>
			</div>

			<div class="slide">
				<div class="slide__image-wrapper">
					<img src="./img/index-slide-2.jpg" alt="" class="slide__image">
				</div>
				<h3 class="slide__heading">
					<a href="#" class="link link--title">
						Нацфинал «Молодые профессионалы»
					</a>
				</h3>
				<p class="slide__caption">В Сахалинской области для школьников с 16 по 22 октября 2017 года пройдет
					всероссийская акция «Неделя без турникетов»</p>
			</div>
		</section>

		<section class="index-page__links-group links-group">
			<ul class="links-group__items">
				<li class="links-group__item">
					<div class="links-group__image logo-image">
						<img src="./img/schoolars.jpg" alt="" class="logo-image__image">
					</div>
					<a href="#" class="links-group__link link link--title">Школьникам</a>
				</li>

				<li class="links-group__item">
					<div class="links-group__image logo-image">
						<img src="./img/student.jpg" alt="" class="logo-image__image">
					</div>
					<a href="#" class="links-group__link link link--title">Студентам</a>
				</li>

				<li class="links-group__item">
					<div class="links-group__image logo-image">
						<img src="./img/parents.jpg" alt="" class="logo-image__image">
					</div>
					<a href="#" class="links-group__link link link--title">Родителям</a>
				</li>

				<li class="links-group__item">
					<div class="links-group__image logo-image">
						<img src="./img/employeers.jpg" alt="" class="logo-image__image">
					</div>
					<a href="#" class="links-group__link link link--title">Ищущим работу</a>
				</li>

			</ul>
		</section>

		<section>
			<div class="section-header">
				<div class="row justify-content-between align-items-baseline">
					<div class="col-md-6">
						<h2 class="heading heading--section">определи свой профессиональный профиль</h2>
					</div>
					<div class="col-md-6">
						<a href="#" class="link link--icon link--icon--list">Сайт опросов кадрового обеспечения Сахалинской
							области</a>
					</div>
				</div>
			</div>

			<div class="index-page__links-group links-group">
				<ul class="links-group__items">
					<li class="links-group__item">
						<div class="links-group__image logo-image">
							<img src="./img/boy.jpg" alt="" class="logo-image__image">
						</div>
						<a href="#" class="links-group__link link link--title">11-13 лет</a>
					</li>

					<li class="links-group__item">
						<div class="links-group__image logo-image">
							<img src="./img/girl.jpg" alt="" class="logo-image__image">
						</div>
						<a href="#" class="links-group__link link link--title">14-15 лет</a>
					</li>

					<li class="links-group__item">
						<div class="links-group__image logo-image">
							<img src="./img/teenage.jpg" alt="" class="logo-image__image">
						</div>
						<a href="#" class="links-group__link link link--title">16-17 лет</a>
					</li>

					<li class="links-group__item">
						<div class="links-group__image logo-image">
							<img src="./img/adult.jpg" alt="" class="logo-image__image">
						</div>
						<a href="#" class="links-group__link link link--title">18 лет и старше</a>
					</li>

				</ul>
			</div>
		</section>

		<section class="row">
			<div class="col-lg-6">
				<div class="section-header">
					<div class="row">
						<div class="col-auto">
							<h2 class="heading heading--section">Полезные ссылки</h2>
						</div>
					</div>
				</div>

				<div class="text text--list text--with-bg text--left-border">
					<ul class="text__list">
						<li class="text__list-item">Профессиональная ориентация
							<a href="#" class="link">(просмотреть)</a>
						</li>
						<li class="text__list-item">Ранжирование профессий
							<a href="#" class="link">(просмотреть)</a>
						</li>
						<li class="text__list-item">Результаты прогнозирования
							<a href="#" class="link">(просмотреть)</a>
						</li>
						<li class="text__list-item">Инвестиционные проекты
							<a href="#" class="link">(просмотреть)</a>
						</li>
						<li class="text__list-item">Закон о занятости населения в Российской Федерации
							<a href="#" class="link">(скачать)</a>
						</li>
						<li class="text__list-item">Aдминистративный регламент предоставления государственной услуги по
							организации профессиональной ориентации граждан в целях выбора сферы деятельности (профессии),
							трудоустройства, прохождения профессионального обучения и получения дополнительного профессионального
							образования
							<a href="#" class="link">(скачать)</a>
						</li>
						<li class="text__list-item">Административный регламент предоставления государственной услуги по
							профессиональному обучению и дополнительному профессиональному образованию безработных граждан,
							включая обучение в другой местности
							<a href="#" class="link">(скачать)</a>
						</li>
						<li class="text__list-item">Федеральный закон N 273-ФЗ "Об образовании в Российской Федерации"
							<a href="#" class="link">(скачать)</a>
						</li>
					</ul>
				</div>

			</div>

			<div class="col-lg-6 index-page__news">
				<div class="section-header">
					<div class="row justify-content-between align-items-baseline">
						<div class="col-auto">
							<h2 class="heading heading--section">Последние новости</h2>
						</div>
						<div class="col-auto">
							<a href="" class="link link--icon link--icon--list">Все новости</a>
						</div>
					</div>
				</div>

				<ul class="index-page__news-list">
					<li class="news-item">
						<div class="news-item__image logo-image logo-image--small">
							<img src="./img/new-1.jpg" alt="" class="logo-image__image">
						</div>
						<div class="news-item__caption">
							<span class="news-item__date">05.08.2018</span>
							<a href="#" class="link">В Южно-Сахалинск прилетели более 400 участников чемпионата «Молодые
								профессионалы»</a>
						</div>
					</li>

					<li class="news-item">
						<div class="news-item__image logo-image logo-image--small">
							<img src="./img/new-2.jpg" alt="" class="logo-image__image">
						</div>
						<div class="news-item__caption">
							<span class="news-item__date">05.08.2018</span>
							<a href="#" class="link">В Южно-Сахалинск прилетели более 400 участников чемпионата «Молодые
								профессионалы»</a>
						</div>
					</li>

					<li class="news-item">
						<div class="news-item__image logo-image logo-image--small">
							<img src="./img/new-1.jpg" alt="" class="logo-image__image">
						</div>
						<div class="news-item__caption">
							<span class="news-item__date">05.08.2018</span>
							<a href="#" class="link">В Южно-Сахалинск прилетели более 400 участников чемпионата «Молодые
								профессионалы»</a>
						</div>
					</li>

					<li class="news-item">
						<div class="news-item__image logo-image logo-image--small">
							<img src="./img/new-2.jpg" alt="" class="logo-image__image">
						</div>
						<div class="news-item__caption">
							<span class="news-item__date">05.08.2018</span>
							<a href="#" class="link">В Южно-Сахалинск прилетели более 400 участников чемпионата «Молодые
								профессионалы»</a>
						</div>
					</li>
				</ul>
			</div>
		</section>

	</div>
</main>

<?php
get_footer();