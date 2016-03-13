<div class="teaser">

  <a href="<?= get_permalink(); ?>" class="teaser-link">

    <?= get_the_title(); ?>

    <div class="teaser-meta">

      <time class="timestamp dt-published"
        datetime="<?= get_post_time('c', true); ?>">
        <?= human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?>
      </time>

      <?php
      $tags = get_the_tags();
      if ($tags) :
        echo '<ul class="inline-list">';
        foreach ($tags as $tag ) :
          echo '<li>#'. $tag->name .'</li> ';
        endforeach;
        echo '</ul>';
      endif;
      ?>

    </div>

  </a>

</div>
