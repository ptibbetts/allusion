<?php get_template_part('templates/page','header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php else: ?>

  <?php while (have_posts()) : the_post(); ?>
    <?php
    $current_year = get_the_date('F Y');

    if( 0 != $wp_query->current_post ) {
        $f = $wp_query->current_post - 1;
        $old_date =   mysql2date( 'F Y', $wp_query->posts[$f]->post_date );

        if($current_year != $old_date) {
            echo '</ul>';
            echo '<h3 style="text-align:right">'.$current_year.'</h3>';
        }
    }else{
        echo '<h3 style="text-align:right">'.$current_year.'</h3>';
    } ?>
    <?php get_template_part('templates/content-single-aside'); ?>
  <?php endwhile; ?>
  </ul>

<?php endif; ?>

<?php the_posts_navigation(); ?>
