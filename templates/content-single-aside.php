<?php
if (get_the_title() != '') :
  $title = get_the_title();
  $display_content = true;
else:
  $title = get_the_content();
  $display_content = false;
endif;
?>

<article <?php post_class('h-entry'); ?>>
  <header>
    <h1 class="p-name">
      <?= $title; ?>
    </h1>
  </header>
  <div class="e-content" <?php echo (!$display_content ? 'style="display:none"' : ''); ?>>
    <?php the_content(); ?>
  </div>
  <footer>
    <?php wp_link_pages([
      'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'),
      'after' => '</p></nav>'
    ]); ?>
    <?php if (!is_single()) : ?>
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
    <?php else: ?>
      <?php get_template_part('templates/entry-meta'); ?>
    <?php endif; ?>
  </footer>
</article>
