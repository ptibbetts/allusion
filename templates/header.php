<header class="c-Header" role="banner">

	<div class="l l-container l-container--fluid">

		<div class="l-i u-1/2">

			<a href="<?= esc_url(home_url('/')); ?>" class="c-Brand">
				<div class="c-Logo-padding">
					<img src="https://secure.gravatar.com/avatar/36790fabdc80d52c19e45c2df8acb55a" alt="my face" class="c-Logo">
				</div>
			</a>

		</div>

		<div class="l-i u-1/2 u-flex u-flexAlign--end u-flexJustify--center u-flexColumn">

			<nav class="c-Navigation">
	      <?php
	      if (has_nav_menu('primary_navigation')) :
	        wp_nav_menu([
						'theme_location' => 'primary_navigation',
						'menu_class' => 'c-Navigation-list',
						'link_before'=> '<span class="c-Navigation-link">',
						'link_after' => '</span>',
						'walker' => new NavigationClassWalker()
					]);
	      endif;
	      ?>
			</nav>

		</div>

	</div>

</header>
