<div class="news-item__image logo-image logo-image--small">
  <img src="<?php the_post_thumbnail_url(); ?>" class="logo-image__image">
</div>
<div class="news-item__caption">
  <span class="news-item__date">
    <?php echo get_the_date('d.m.y') ?></span>
  <a href="<?php the_permalink(); ?>" class="link">
    <?php the_title(); ?></a>
</div>