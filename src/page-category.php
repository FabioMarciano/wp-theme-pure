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
			Glossário
		</header>
		<!-- /MAIN HEADER -->
		<div>
			<?php
			$categories = get_terms(['taxonomy' => 'category', 'hide_empty' => 0]);
			foreach ($categories as $category) {
				echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
			}
			?>
		</div>
		<!-- MAIN FOOTER -->
		<footer>
			FOOTER
		</footer>
		<!-- MAIN FOOTER -->
	</main>
	<!-- /MAIN CONTENT AREA -->
	<!-- BODY FOOTER -->
	<?php get_template_part('parts/body-footer'); ?>
	<!-- /BODY FOOTER -->
	<?php wp_footer(); ?>
</body>
<!-- /TEMPLATE BODY -->

</html>
