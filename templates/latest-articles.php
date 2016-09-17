<?php
$args = array(
	'post_type' => 'post',
  'posts_per_page' => 3,
	'tax_query' => array(
		array(
			'taxonomy' => 'post_format',
			'field'    => 'slug',
      'terms' => array(
        'post-format-aside',
        'post-format-gallery',
        'post-format-link',
        'post-format-image',
        'post-format-quote',
        'post-format-status',
        'post-format-audio',
        'post-format-chat',
        'post-format-video'
      ),
      'operator' => 'NOT IN'
		),
	),
);
$posts = new WP_Query( $args );

if ( $posts->have_posts() ) : ?>
<div class="c-Posts c-Posts--recent">
	<h2 class="c-Posts-header">Latest Articles</h2>
		<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
      <div style="margin-bottom:2rem">
        <?php get_template_part('templates/teaser-article');?>
      </div>
		<?php endwhile; ?>

	<a href="<?= get_permalink(get_option('page_for_posts' )); ?>"
		class="c-Posts-allLink">
		All Articles
	</a>

</div>
<?php endif; wp_reset_postdata(); ?>
