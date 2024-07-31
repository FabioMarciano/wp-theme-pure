<!-- NAVIGATION MENU -->
<nav id="body-navigation">
	<header id="body-nav-header">
		<h2 id="body-nav-headline">Menu de navegação</h2>
	</header>
	<?php
	$args = array(
		'menu' => 'main-menu',
		'container' => false,
		'menu_id' => 'main-menu',
		'items_wrap' => '<menu itemscope itemtype="https://schema.org/SiteNavigationElement" id="%1$s">%3$s</menu>',
		'theme_location' => 'main-menu'
	);
	wp_nav_menu($args);
	?>

	<footer id="body-nav-footer">
		<?php
		$args = array(
			'menu' => 'nav-social-menu',
			'container' => false,
			'menu_id' => 'nav-social-menu',
			'items_wrap' => '<ul class="social-networking" id="%1$s">%3$s</ul>',
			'theme_location' => 'social-menu'
		);
		wp_nav_menu($args);
		?>
	</footer>
</nav>
<!-- /NAVIGATION MENU -->
