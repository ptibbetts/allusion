<article <?php post_class('h-entry'); ?>>
  <header>
    <h2 class="p-name">
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </h2>
  </header>
  <div class="p-summary">
    <?php the_content(); ?>
  </div>
  <footer>
    <?php wp_link_pages([
      'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'),
      'after' => '</p></nav>'
    ]); ?>
    <?php if (is_single()): get_template_part('templates/entry-meta'); endif;?>
  </footer>
</article>

<footer>
  <?php wp_link_pages([
    'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'),
    'after' => '</p></nav>'
  ]); ?>
  <div class="c-Post-meta" style="margin-bottom:3rem">
    <a href="<?= get_permalink(); ?>">
      <time class="o-timestamp dt-published"
        datetime="<?= get_post_time('c', true); ?>">
        <?= human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?>
      </time>
      <?php
      $tags = get_the_tags();
      if ($tags) :
        echo '<ul class="u-listInline">';
        foreach ($tags as $tag ) :
          echo '<li>#'. $tag->name .'</li> ';
        endforeach;
        echo '</ul>';
      endif;
      ?>
    </a>
  </div>
</footer>
