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

get_header('index');
?>

<main class="page__main index-page">
	<div class="container">
		<section class="index-page__carousel">
			<?php										
				$indexAnnouncements = new WP_Query([
					'posts_per_page' => -1,
					'post_type' => 'announcement'
				]);

				if (  $indexAnnouncements->have_posts() ) {
					while ( $indexAnnouncements->have_posts() ) {
						$indexAnnouncements->the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					}
				}          
				wp_reset_postdata();
			?>
		</section>

		<section class="index-page__links-group links-group">
			<ul class="links-group__items">
				<li class="links-group__item">
					<a href="#" class="links-group__image logo-image">
						<img src="<?php bloginfo('template_url'); ?>/images/schoolars.jpg" alt="" class="logo-image__image">
					</a>
					<a href="#" class="links-group__link link link--title">Школьникам</a>
				</li>

				<li class="links-group__item">
					<a href="#" class="links-group__image logo-image">
						<img src="<?php bloginfo('template_url'); ?>/images/student.jpg" alt="" class="logo-image__image">
					</a>
					<a href="#" class="links-group__link link link--title">Студентам</a>
				</li>

				<li class="links-group__item">
					<a href="#" class="links-group__image logo-image">
						<img src="<?php bloginfo('template_url'); ?>/images/parents.jpg" alt="" class="logo-image__image">
					</a>
					<a href="#" class="links-group__link link link--title">Родителям</a>
				</li>

				<li class="links-group__item">
					<a href="#" class="links-group__image logo-image">
						<img src="<?php bloginfo('template_url'); ?>/images/employeers.jpg" alt="" class="logo-image__image">
					</a>
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
						<a href="#" class="links-group__image logo-image">
							<img src="<?php bloginfo('template_url'); ?>/images/boy.jpg" alt="" class="logo-image__image">
						</a>
						<a href="#" class="links-group__link link link--title">11-13 лет</a>
					</li>

					<li class="links-group__item">
						<a href="#" class="links-group__image logo-image">
							<img src="<?php bloginfo('template_url'); ?>/images/girl.jpg" alt="" class="logo-image__image">
						</a>
						<a href="#" class="links-group__link link link--title">14-15 лет</a>
					</li>

					<li class="links-group__item">
						<a href="#" class="links-group__image logo-image">
							<img src="<?php bloginfo('template_url'); ?>/images/teenage.jpg" alt="" class="logo-image__image">
						</a>
						<a href="#" class="links-group__link link link--title">16-17 лет</a>
					</li>

					<li class="links-group__item">
						<a href="#" class="links-group__image logo-image">
							<img src="<?php bloginfo('template_url'); ?>/images/adult.jpg" alt="" class="logo-image__image">
						</a>
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
							<h2 class="heading heading--section">Интересные ссылки</h2>
						</div>
					</div>
				</div>

				<div class="text text--list text--with-bg text--left-border generic-content">
					<!-- <ul class="text__list">
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
          </ul> -->
          <?php the_field('interesting_links') ?>
				</div>

			</div>

			<div class="col-lg-6 index-page__news">
				<div class="section-header">
					<div class="row justify-content-between align-items-baseline">
						<div class="col-auto">
							<h2 class="heading heading--section">Последние новости</h2>
						</div>
						<div class="col-auto">
							<a href="<?php echo site_url('/news'); ?>" class="link link--icon link--icon--list">Все новости</a>
						</div>
					</div>
				</div>

				<ul class="index-page__news-list">
					<?php						
					$lastNews = new WP_Query([
						'posts_per_page' => 4,
						'post_type' => 'new'
					]);
	
					if ( $lastNews->have_posts() ) {
						while ( $lastNews->have_posts() ) {
							$lastNews->the_post();
							echo '<li class="news-item">';
							get_template_part( 'template-parts/content', get_post_type() );
							echo '</li>';
						}
					}          
					wp_reset_postdata();
					?>
				</ul>
			</div>
		</section>

	</div>
</main>

<?php
get_footer();