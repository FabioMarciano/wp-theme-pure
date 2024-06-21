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
		<!-- MAIN HEADER -->
		<header>
			<?php
			$breadCrumbList = [];
			function breadcrumb($id = "0")
			{
				global $breadCrumbList;
				if ($id != "0") {
					$item = get_term($id);
					$item->permalink = get_tag_link($id);
					array_push($breadCrumbList, $item);
					return breadcrumb($item->parent);
				} else {
					$permalink = implode("/", [get_option('home', '/'), trim(get_option('category_base', 'category'), "/")]);
					array_push($breadCrumbList, ["name" => "Categorias", "slug" => "categorias", "permalink" => $permalink]);
					$breadCrumbList = array_reverse($breadCrumbList);
					return $breadCrumbList;
				}
			}
			echo "<pre>";

			print_r(breadcrumb(get_queried_object()->term_id));
			?>
			INSERIR BREADCRUMB<br>
			<pre><?php #print_r(get_term("4"));
					?></pre>
			<pre><?php #print_r(get_queried_object());
					?></pre>
			<br><?php #print_r(get_ancestors(get_queried_object()->term_id, get_queried_object()->taxonomy));
				?>
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
	<?php wp_footer(); ?>
	<!-- /TEMPLATE FOOTER -->
</body>
<!-- /TEMPLATE BODY -->

</html>
