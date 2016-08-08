<?php
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 5,
	'tax_query' => array(
		array(
			'taxonomy' => 'post_format',
			'field'    => 'slug',
			'terms'    => array( 'post-format-link'),
      'operator' => 'IN'
		),
	),
);
$posts = new WP_Query( $args );

if ( $posts->have_posts() ) : ?>

	<div class="c-Posts c-Posts--recent">
	  <h2 class="c-Posts-header">Latest Links</h2>
		<ul class="o-listOfLinks">
		  <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
		    <li><?php get_template_part('templates/teaser-excerpt');?></li>
		  <?php endwhile; ?>
		</ul>

		<a href="<?= get_post_format_link('link'); ?>"
		  class="c-Posts-allLink">
		  All Links
		</a>

	</div>

<?php endif; wp_reset_postdata(); ?>
