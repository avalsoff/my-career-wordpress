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

<main class="contacts-page">
  <div class="container">
    <div class="contacts-page__container">
			<?php 
				pageBreadcrumbps([
					[
						'href'  => '/',
						'title' => 'Главная'
					]
				]); 
			?>

      <h1 class="heading heading--page"><?php the_title() ?></h1>
			
      <div class="text generic-content"><?php the_content() ?></div>

    </div>
  </div>
</main>

<?php
get_footer();