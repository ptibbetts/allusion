<header class="Header" role="banner">

	<div class="container container--fluid">

		<a href="<?= esc_url(home_url('/')); ?>" class="Brand">
			<div class="Logo-padding">
				<img src="https://secure.gravatar.com/avatar/36790fabdc80d52c19e45c2df8acb55a" alt="my face" class="Logo">
			</div>
		</a>

		<nav class="Navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu([
					'theme_location' => 'primary_navigation',
					'menu_class' => 'Navigation-list',
					'link_before'=> '<span class="Navigation-link">',
					'link_after' => '</span>',
					'walker' => new NavigationClassWalker()
				]);
      endif;
      ?>
		</nav>
	</div>

</header>
