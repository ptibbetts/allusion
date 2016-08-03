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
            echo '<ul class="o-listOfLinks">';
        }
    }else{
        echo '<h3 style="text-align:right">'.$current_year.'</h3>';
        echo '<ul class="o-listOfLinks">';
    } ?>
    <article <?php post_class('h-entry'); ?>>
      <?php if (get_the_title()): ?>
        <header>
          <h1 class="p-name">
            <?php the_title(); ?>
          </h1>
        </header>
      <?php endif; ?>
      <div class="e-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages([
          'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'),
          'after' => '</p></nav>'
        ]); ?>
        <?php get_template_part('templates/entry-meta'); ?>
      </footer>
    </article>
  <?php endwhile; ?>
  </ul>

<?php endif; ?>

<?php the_posts_navigation(); ?>
