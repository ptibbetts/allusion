<?php get_template_part('templates/page','header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form();
  else:

   while (have_posts()) : the_post();
    $current_year = get_the_date('F Y');

    if( 0 != $wp_query->current_post ) :
        $f = $wp_query->current_post - 1;
        $old_date =   mysql2date( 'F Y', $wp_query->posts[$f]->post_date );

        if($current_year != $old_date) :
            echo '<h3 class="u-textRight">'.$current_year.'</h3>';
        endif;
    else:
        echo '<h3 class="u-textRight">'.$current_year.'</h3>';
    endif;

    if (get_post_format() == 'aside'):
      get_template_part('templates/content-single-aside');
    elseif(get_post_format() == 'link') :
      get_template_part('templates/teaser-excerpt');
    else:
      get_template_part('templates/teaser');
    endif;

  endwhile;

endif;

the_posts_navigation();
