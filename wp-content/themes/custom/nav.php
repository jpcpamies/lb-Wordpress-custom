
<nav class="Nav-header">
	<div class="Nav-header__left">
		<a class='Nav-header__logo' href="http://wp-custom:8888">
			<span>LOGO</span>
		</a>
	</div>
	<div class="Nav-header__right">
		<?php wp_nav_menu(
			array(
				'theme_location'  => 'menu-header',
				'container'       => 'Nav__right',
				'container_class' => 'div',
				'menu_class'      => 'Nav__list',
				)
			); 
		?>
	</div>
</nav>