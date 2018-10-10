<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Career
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('page'); ?>>
  <div class="visually-hidden">
    <!-- inject:svg -->
    <!-- endinject -->
  </div>
  <header class="page__header header">
    <div class="header__top-header">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-5">
            <a href="<?php echo site_url() ?>" class="logo">
              <div class="logo__image-wrapper">
                <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" class="logo__image">
              </div>
              <div class="logo__caption-wrapper">
                <b class="logo__heading">Моя карьера</b>
                <p class="logo__caption">Портал профориентации населения Сахалинской области</p>
              </div>
            </a>
          </div>
          <div class="col-lg-7">
            <nav class="top-nav">
              <ul class="top-nav__items">
                <li class="top-nav__item">
                  <a href="#" class="top-nav__link">
                    О проекте
                  </a>
                </li>
                <li class="top-nav__item">
                  <a href="#" class="top-nav__link">
                    Контакты
                  </a>
                </li>
                <li class="top-nav__item">
                  <a href="#" class="top-nav__link">
                    Карта сайта
                  </a>
                </li>
              </ul>
              <ul class="top-nav__items top-nav__items--icons">
                <li class="top-nav__item">
                  <a href="#" class="top-nav__link top-nav__link--icon top-nav__link--icon--eye">
                  </a>
                </li>
                <li class="top-nav__item">
                  <a href="#" class="top-nav__link top-nav__link--icon top-nav__link--icon--search">
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="header__menu">
      <div class="container">
        <nav class="menu">
          <button class="menu__link menu__link--hamburger ">Гамбургер</button>
          <ul class="menu__items">
            <li class="menu__item menu__item--menu">
              <a href="#" class="menu__link">Меню</a>
            </li>
            <li class="menu__item">
              <a href="#" class="menu__link">Экономика и рынок труда</a>
            </li>
            <li class="menu__item">
              <a href="#" class="menu__link">Барометр занятости</a>
            </li>
            <li class="menu__item">
              <a href="#" class="menu__link">Профориентация</a>
            </li>
            <li class="menu__item">
              <a href="#" class="menu__link">Профессиии</a>
            </li>
            <li class="menu__item">
              <a href="#" class="menu__link">Образование</a>
            </li>
            <li class="menu__item">
              <a href="#" class="menu__link">Работодатели</a>
            </li>
            <li class="menu__item">
              <a href="#" class="menu__link">Полезные материалы</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>