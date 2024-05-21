<?php

/**
 * The Author List Page template file
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
		<header>
			<h1><?php echo get_the_title(); ?></h1>
			<h2><?php echo get_the_excerpt(); ?></h2>
		</header>
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
