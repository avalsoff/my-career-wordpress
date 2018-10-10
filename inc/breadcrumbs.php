<?php
function pageBreadcrumbps($links) {
if ($links) {
?>
<ul class="breadcrumbs">
  <?php foreach ($links as $link) { ?>
    <li class="breadcrumbs__item">
      <a href="<?php echo site_url($link['href']) ?>" class="breadcrumbs__link link"><?php echo $link['title'] ?></a>
    </li>
  <?php } ?>
</ul>
<?php 
  } 
}