<div class="o-teaser">

  <a href="<?= get_permalink(); ?>" class="o-teaser-link">
    <?= get_the_title(); ?>
  </a>

  <?php the_excerpt(); ?>

  <a href="<?= get_permalink(); ?>" class="o-teaser-meta">

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
