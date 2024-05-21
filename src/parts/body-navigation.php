<?php
$mainMenu = wp_get_nav_menu_items('main-navigation');
$socialNetworking = wp_get_nav_menu_items('social-networking');

if ($mainMenu && sizeof($mainMenu) > 0) :

?>
	<!-- NAVIGATION MENU -->
	<nav id="body-nav">
		<header id="body-nav-header">
			<h2 id="body-nav-headline">Menu de navegação</h2>
		</header>
		<ul id="body-nav-list" itemscope itemtype="https://schema.org/SiteNavigationElement">
			<?php
			foreach ($mainMenu as $key => $item) :
			?>
				<li itemprop="name">
					<?php
					$enableAttr = ["url", "class", "target", "title"];
					$attributes = [];

					foreach ($enableAttr as $index => $key) {
						if ($item->$key != null && $item->$key != "") {
							$value = is_array($item->$key) ? implode(" ", $item->$key) : $item->$key;
							$key = $key != "url" ? $key : "href";
							$attributes[$key] = $value;
						}
					}

					hook_tag_builder("a", $attributes, $item->title);
					?>
				</li>
			<?php
			endforeach;
			?>
		</ul>
		<footer id="body-nav-footer">
			<?php if ($socialNetworking && sizeof($socialNetworking) > 0) : ?>
				<!-- SOCIAL NETWORK -->
				<ul itemscope itemtype="https://schema.org/Organization" id="body-nav-social-network">
					<?php
					foreach ($socialNetworking as $key => $item) :
					?>
						<li itemprop="sameAs">
							<?php
							$enableAttr = ["url", "class", "target", "title"];
							$attributes = [];

							foreach ($enableAttr as $index => $key) {
								if ($item->$key != null && $item->$key != "") {
									$value = is_array($item->$key) ? implode(" ", $item->$key) : $item->$key;
									$key = $key != "url" ? $key : "href";
									$attributes[$key] = $value;
								}
							}

							hook_tag_builder("a", $attributes, $item->title);
							?>
						</li>
					<?php endforeach; ?>
				</ul>
				<!-- /SOCIAL NETWORK -->
			<?php endif; ?>
		</footer>
	</nav>
	<!-- /NAVIGATION MENU -->
<?php
endif;

?>
