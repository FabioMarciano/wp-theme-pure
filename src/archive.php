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
	<!-- BODY FOOTER -->
	<?php get_template_part('parts/body-footer'); ?>
	<!-- /BODY FOOTER -->
	<?php wp_footer(); ?>
</body>
<!-- /TEMPLATE BODY -->

</html>
