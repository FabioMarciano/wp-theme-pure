<?php

/**
 * The Archive template file
 *
 * @package WordPress
 * @subpackage Pure
 * @since Pure 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php schema_type(); ?>>
<!-- TEMPLATE HEAD -->
<?php get_header(); ?>
<!-- /TEMPLATE HEAD -->
<!-- TEMPLATE BODY -->

<body>
	<!-- BODY HEADER -->
	<?php get_template_part('parts/body-header'); ?>
	<!-- /BODY HEADER -->
	<!-- BODY NAVIGATION -->
	<?php get_template_part('parts/body-navigation'); ?>
	<!-- /BODY NAVIGATION -->
	<!-- MAIN CONTENT AREA -->
	<main>
		<nav>
			<?php
			$breadCrumbList = [];
			function getBreadcrumb($id = "0")
			{
				global $breadCrumbList;
				if ($id != "0") {
					$item = get_term($id);
					$item->permalink = get_tag_link($id);
					array_push($breadCrumbList, $item);
					return getBreadcrumb($item->parent);
				} else {
					$permalink = implode("/", [get_option('home', '/'), trim(get_option('category_base', 'category'), "/")]);
					array_push($breadCrumbList, (object)["name" => "Categorias", "slug" => "categorias", "permalink" => $permalink]);
					$breadCrumbList = array_reverse($breadCrumbList);
					return $breadCrumbList;
				}
			}

			getBreadcrumb(get_queried_object()->term_id);
			if (sizeof($breadCrumbList) > 0) :
			?>
				<ul itemscope itemtype="http://schema.org/BreadcrumbList">
					<?php foreach ($breadCrumbList as $index => $item) : ?>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
							<a itemprop="item" href="<?php echo $item->permalink; ?>">
								<strong itemprop="name"><?php echo $item->name; ?></strong>
								<meta itemprop="position" content="<?php echo intval($index + 1); ?>">
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</nav>
		<!-- MAIN HEADER -->
		<header>
			<?php the_archive_title('<h1>', '</h1>'); ?>
		</header>
		<!-- /MAIN HEADER -->
		<!-- MAIN FOOTER -->
		<footer>
			<?php $description = get_the_archive_description();
			echo $description; ?>
		</footer>
		<!-- MAIN FOOTER -->
	</main>
	<!-- /MAIN CONTENT AREA -->
	<!-- TEMPLATE FOOTER -->
	<?php get_footer(); ?>
	<!-- /TEMPLATE FOOTER -->
</body>
<!-- /TEMPLATE BODY -->

</html>
