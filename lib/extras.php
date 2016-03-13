<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Show only articles on the posts page
 */
function articles_as_posts_page( $query ) {

	if( $query->is_main_query() && $query->is_home() ) {
    $only_articles = array(
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
  	);
		$query->set( 'tax_query', $only_articles );
    $query->set( 'posts_per_page', '999' );
	}
}
add_action( 'pre_get_posts',__NAMESPACE__. '\\articles_as_posts_page' );

/**
 * Change 'asides' archive title to 'Notes'
 */
add_filter('get_the_archive_title', function ($title) {
  if ( is_tax( 'post_format', 'post-format-aside' ) ) {
    $title = _x( 'Notes', 'post format archive title' );
  }
    return $title;
});
