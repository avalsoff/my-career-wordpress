<li class="search-list__item">
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