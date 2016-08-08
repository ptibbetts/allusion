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
          <span class="c-Post-metaName">Published:</span>
          <time class="o-timestamp dt-published"
            datetime="<?= get_post_time('c', true); ?>">
            <?= get_the_date(); ?> at <?= get_the_time(); ?>
          </time>
        </a>
      </div>
    <?php else: ?>
      <?php get_template_part('templates/entry-meta'); ?>
    <?php endif; ?>
  </footer>
</article>
