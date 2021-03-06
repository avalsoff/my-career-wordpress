<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Career
 */

	$current_post_type = get_post_type();
?>


<li class="search-list__item">
  <?php 
    $pageNum = $wp_query->query['paged'] ? $wp_query->query['paged'] : 1;
    $postNum = $wp_query->current_post + 1;
    $postsPerPage = $wp_query->query_vars['posts_per_page'];
    $postIndex =  $postNum + $postsPerPage * ($pageNum - 1);
  ?>
  <div class="search-list__count"><?php echo $postIndex ?>.</div>
	<div class="search-list__item-body">
		<a class="link search-list__link" href="<?php
			if ($current_post_type == 'announcement') {
				echo get_field('post_link');
			} else {
				the_permalink();
			}
		?>"><?php the_title() ?></a>
		<p class="text search-list__text">
		<?php 
			if ($current_post_type) {
				$post_type_data = get_post_type_object( $current_post_type );
				echo $post_type_data->labels->singular_name;
			}
		?>
		</p>
	</div>
</li>
