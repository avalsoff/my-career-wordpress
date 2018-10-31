<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Career
 */

?>

<footer class="footer">
	<div class="footer__main">
		<div class="container">
			<div class="footer">
				<div class="row">
					<div class="col-md-3">
						<div class="footer__caption-wrapper">
							<b class="footer__heading">Моя карьера</b>
							<p class="footer__caption">
								Портал по профориентации населения Сахалинской области
							</p>
						</div>
					</div>
					<div class="col-md-3">
						<ul class="footer__links">
							<li class="footer__item">
								<a href="#" class="footer__link">Экономика и рынок труда</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Барометр занятости</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Профориентация</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Профессии</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer__links">
							<li class="footer__item">
								<a href="#" class="footer__link">Образование</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Работодатели</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Полезные материалы</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Новости</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer__links">
							<li class="footer__item">
								<a href="#" class="footer__link">О проекте</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Контакты</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Карта сайта</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Сайт опросов</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer__info">
		<div class="container">
			<div class="justify-content-between">
				<p class="footer__text">
					Сайт разработан в веб агенстве <a href="#" class="link link--small">«На Волне»</a>
				</p>
				<p class="footer__text">
					© Агентство по труду и занятости населения Сахалинской области, 2018
				</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
<script>
  economyPage()
</script>

</body>

</html>