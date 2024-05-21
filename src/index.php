<?php

/**
 * The main template file
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
		<header>HOME</header>
		<section>
			<header>
				<h2>Today's Highlights</h2>
			</header>
			<footer>
				<a href="#">See more</a>
			</footer>
		</section>
		<footer></footer>
	</main>
	<!-- /MAIN CONTENT AREA -->

	<!-- BODY FOOTER -->
	<?php get_template_part('parts/body-footer'); ?>
	<!-- /BODY FOOTER -->

	<?php wp_footer(); ?>
</body>
<!-- /TEMPLATE BODY -->

</html>
