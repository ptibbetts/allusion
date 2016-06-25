<?php

$image = get_field('image');
$user_id = 1;
$user = array_map( function( $a ){ return $a[0]; }, get_user_meta( $user_id ) );

?>

<section class="c-Introduction h-card">

	<div class="l l-container l--g u-flexJustify--between">

		<div class="l-i u-1/5">
			<?php if ($image) : ?>
				<img src="<?= $image['url']; ?>"
						 alt="<?= $image['alt']; ?>"
						 class="c-Introduction-image u-photo"
				>
			<?php endif; ?>
		</div>

		<div class="l-i u-7/10">
			<div class="c-Introduction-text">
				<h1>
					Hi, I'm
					<a href="<?= get_home_url(); ?>" class="u-url u-uid p-name">
						<?= $user['first_name'] . ' ' . $user['last_name']; ?>
					</a>
				</h1>

        <?php if (get_field('note')) : ?>
  				<p class="p-note">
  				  <?= get_field('note'); ?>
  				</p>
        <?php endif; ?>

        <?php if (get_field('locality')) : ?>
  				<p>
  				  <?= get_field('locality'); ?>
  				</p>
        <?php endif; ?>

        <?php if (get_field('introduction')) : ?>
          <p>
            <?= get_field('introduction'); ?>
          </p>
        <?php endif; ?>


        <?php if (get_field('email')) : ?>
  				<p>
            <a href="mailto:<?= get_field('email'); ?>">
              <?= get_field('email'); ?>
            </a>
  				</p>
        <?php endif; ?>

				<ul class="c-SocialList u-listInline">

          <?php if (get_field('twitter')) : ?>
  					<li class="c-SocialList-item">
  						<a href="https://twitter.com/<?= get_field('twitter'); ?>" rel="me">Twitter</a>
  					</li>
          <?php endif; ?>

          <?php if (get_field('birmingham_io')) : ?>
  					<li class="c-SocialList-item">
  						<a href="<?= get_field('birmingham_io'); ?>" rel="me">Birmingham.io</a>
  					</li>
          <?php endif; ?>

          <?php if (get_field('instagram')) : ?>
  					<li class="c-SocialList-item">
  						<a href="<?= get_field('instagram'); ?>" rel="me">Instagram</a>
  					</li>
          <?php endif; ?>

          <?php if (get_field('github')) : ?>
  					<li class="c-SocialList-item">
  						<a href="https://github.com/<?= get_field('github'); ?>" rel="me">GitHub</a>
  					</li>
          <?php endif; ?>

          <?php if (get_field('medium')) : ?>
  					<li class="c-SocialList-item">
  						<a href="<?= get_field('medium'); ?>" rel="me">Medium</a>
  					</li>
          <?php endif; ?>

          <?php if (get_field('codepen')) : ?>
  					<li class="c-SocialList-item">
  						<a href="<?= get_field('codepen'); ?>" rel="me">Codepen</a>
  					</li>
          <?php endif; ?>

          <?php if (get_field('linkedin')) : ?>
  					<li class="c-SocialList-item">
  						<a href="https://<?= get_field('linkedin'); ?>" rel="me">LinkedIn</a>
  					</li>
          <?php endif; ?>

				</ul>

			</div>
		</div>

	</div>

</section>
