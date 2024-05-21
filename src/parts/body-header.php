<!-- MAIN HEADER -->
<header id="body-header">
	<!-- MAIN HEADER WORKSPACE -->
	<div>
		<?php
		$headlineTag = ["h2", "h1"];
		$headlineTag = $headlineTag[intval(is_home() || is_front_page())];
		?>

		<<?php echo $headlineTag; ?> id="body-header-headline">
			<a itemprop="url" href="/"><?php echo get_bloginfo('name'); ?></a>
		</<?php echo $headlineTag; ?>>
	</div>
	<!-- /MAIN HEADER WORKSPACE -->
</header>
<!-- /MAIN HEADER -->
