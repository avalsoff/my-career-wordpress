<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Career
 */

?>

	<?php
		$menuLocations = get_nav_menu_locations();
		$menuID = $menuLocations['footerMenu'];
		$menuItems = wp_get_nav_menu_items($menuID);
		$menuItemLen = count($menuItems);
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
					<?php for ($i = 0; $i < $menuItemLen; $i += $menuItemLen / 3): ?>					
						<div class="col-md-3">
							<ul class="footer__links">
								<?php for ($j = $i; $j < $menuItemLen / 3 + $i; ++$j): ?>
									<li class="footer__item">
										<a href="<?php echo $menuItems[$j]->url ?>" class="footer__link">
											<?php echo $menuItems[$j]->title ?>
										</a>
									</li>
								<?php endfor; ?>
							</ul>
						</div>
					<?php	endfor; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="footer__info">
		<div class="container">
			<div class="justify-content-between">
				<p class="footer__text">
					Сайт разработан в веб агенстве <a href="https://upwave.ru" class="link link--small">«На Волне»</a>
				</p>
				<p class="footer__text">
					© Агентство по труду и занятости населения Сахалинской области, 2018
				</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>