<li class="search-list__item">
  <?php 
    $pageNum = $wp_query->query['paged'] ? $wp_query->query['paged'] : 1;
    $postNum = $wp_query->current_post + 1;
    $postsPerPage = $wp_query->query_vars['posts_per_page'];
    $postIndex =  $postNum + $postsPerPage * ($pageNum - 1);
  ?>
  <div class="search-list__count"><?php echo $postIndex ?>.</div>
  <div class="search-list__item-body">
    <a class="link search-list__link" href="<?php the_permalink() ?>"><?php the_title() ?></a>
    <table class="search-list__table">
      <tr>
        <td class="search-list__table-title">Адрес</td>
        <td>
          <?php echo get_field('address') ?>
        </td>
      </tr>
      <tr>
        <td class="search-list__table-title">Телефон</td>
        <td>
          <?php echo get_field('phone') ?>
        </td>
      </tr>
      <tr>
        <td class="search-list__table-title">Сайт</td>
        <td>
          <a href="<?php echo get_field('site') ?>" class="link">
            <?php echo get_field('site') ?>
          </a>
        </td>
      </tr>
    </table>
  </div>
</li>