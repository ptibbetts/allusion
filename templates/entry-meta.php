<div class="c-Post-meta">

  <div>
    <span class="c-Post-metaName">Published:</span>
    <time class="o-timestamp dt-published"
      datetime="<?= get_post_time('c', true); ?>">
      <?= get_the_date(); ?> at <?= get_the_time(); ?>
    </time>
  </div>

  <?php if (get_the_date() !== get_the_modified_date()) : ?>
    <div>
      <span class="c-Post-metaName">Updated:</span>
      <time class="o-timestamp dt-published"
        datetime="<?= get_post_time('c', true); ?>">
        <?= get_the_modified_date(); ?> at <?= get_the_modified_time(); ?>
      </time>
    </div>
  <?php endif; ?>

  <span class="c-Post-byline">by
    <a href="https://paultibbetts.uk" class="p-author h-card">
      <img src="https://secure.gravatar.com/avatar/36790fabdc80d52c19e45c2df8acb55a" alt="Paul Tibbetts" class="u-photo">
    </a>
  </span>

  <?php $tags = get_the_tags(); if ($tags) : ?>
    <div class="c-Post-tagsContainer">
      <span class="c-Post-metaName">Tagged: </span>
      <ul class="c-Post-tags u-listInline">
        <?php foreach ($tags as $tag ) : ?>
          <li class="c-Post-tag">
            <a href="<?= get_term_link($tag); ?>" class="c-Post-tagLink p-category">
              <?= $tag->name; ?><!-- comments needed to remove gap
         --></a><!--
       --></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <span class="c-Post-metaName">Permalink:</span>

  <a href="<?php the_permalink(); ?>" class="c-Post-link u-url" rel="bookmark">
    <?= get_permalink(); ?>
  </a>

</div>
