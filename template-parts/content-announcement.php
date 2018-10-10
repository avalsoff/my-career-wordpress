<div class="slide">
  <a href="<?php echo get_field('post_link') ?>" class="slide__image-wrapper">
    <img src="<?php echo get_field('new_image')['url'] ?>" alt="" class="slide__image">
  </a>
  <h3 class="slide__heading">
    <a href="<?php echo get_field('post_link') ?>" class="link link--title">
      <?php the_title(); ?>
    </a>
  </h3>
  <p class="slide__caption"><?php the_excerpt(); ?></p>
</div>