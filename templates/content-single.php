<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('h-entry'); ?>>
    <header>
      <h1 class="p-name">
        <?php the_title(); ?>
      </h1>
    </header>
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
