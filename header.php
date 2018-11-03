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
              <?php
                class topMenuWalker extends Walker_Nav_Menu {
                  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
                    $output .= '<li class="top-nav__item">';
                
                    $attributes .= !empty( $item->url ) ? ' class="top-nav__link" href="' . esc_attr($item->url) . '"' : '';
                    $item_output = $args->before;

                    $item_output .= '<a'. $attributes .'>'.$item->title.'</a>';
                
                    $item_output .= $args->after;
                    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
                  }
                }

                $topWalker = new topMenuWalker();

                wp_nav_menu([
                  'theme_location' => 'headerTopMenu',
                  'menu_class' => 'top-nav__items',
                  'container' => '',
                  'menu_id' => 'htm1',
                  'walker' => $topWalker
                ]);
              ?>
              <ul class="top-nav__items top-nav__items--icons">
                <li class="top-nav__item">
                  <a href="#" class="top-nav__link top-nav__link--icon top-nav__link--icon--eye">
                  </a>
                </li>
                <li class="top-nav__item">
                  <a href="<?php echo site_url('/search'); ?>" class="top-nav__link top-nav__link--icon top-nav__link--icon--search">
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
          <?php
            class mainMenuWalker extends Walker_Nav_Menu {
              function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
                if ($item->menu_order == 1) {
                  $output .= '<li class="menu__item menu__item--menu"><a href="#" class="menu__link">Меню</a></li>';
                }

                $output .= '<li class="menu__item">';
            
                $attributes .= !empty( $item->url ) ? ' class="menu__link" href="' . esc_attr($item->url) . '"' : '';
                $item_output = $args->before;

                $item_output .= '<a'. $attributes .'>'.$item->title.'</a>';
            
                $item_output .= $args->after;
                $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
              }
            }

            $walker = new mainMenuWalker();

            wp_nav_menu([
              'theme_location' => 'headerBottomMenu',
              'menu_class' => 'menu__items',
              'container' => '',
              'menu_id' => 'hbm1',
              'walker' => $walker
            ]);
          ?>
        </nav>
      </div>
    </div>
  </header>