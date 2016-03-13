<div class="Post-meta">

  <div>
    <span class="Post-metaName">Published:</span>
    <time class="timestamp dt-published"
      datetime="<?= get_post_time('c', true); ?>">
      <?= get_the_date(); ?> at <?= get_the_time(); ?>
    </time>
  </div>

  <?php if (get_the_date() !== get_the_modified_date()) : ?>
    <div>
      <span class="Post-metaName">Last updated:</span>
      <time class="timestamp dt-published"
        datetime="<?= get_post_time('c', true); ?>">
        <?= get_the_modified_date(); ?> at <?= get_the_modified_time(); ?>
      </time>
    </div>
  <?php endif; ?>


  <?php $tags = get_the_tags(); if ($tags) : ?>
    <div class="Post-tagsContainer">
      <span class="Post-metaName">Tagged: </span>
      <ul class="Post-tags inline-list">
        <?php foreach ($tags as $tag ) : ?>
          <li class="Post-tag">
            <a href="<?= get_term_link($tag); ?>" class="Post-tagLink p-category">
              <?= $tag->name; ?><!-- comments needed to remove gap
         --></a><!--
       --></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <span class="Post-metaName">Permalink:</span>

  <a href="<?php the_permalink(); ?>" class="Post-link u-url" rel="bookmark">
    <?= get_permalink(); ?>
  </a>

</div>
