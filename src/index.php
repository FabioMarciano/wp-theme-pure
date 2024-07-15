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
		<!-- MAIN HEADER -->
		<header>HEADER DA INDEX</header>
		<!-- /MAIN HEADER -->
		<!-- MAIN ARTICLE -->
		<article>
			<!-- ARTICLE HEADER -->
			<header>
				<h2><?php the_title(); ?></h2>
			</header>
			<!-- /ARTICLE HEADER -->
			<!-- ARTICLE WORKSPACE -->
			<div>
				<?php the_content(); ?>
			</div>
			<!-- /ARTICLE WORKSPACE -->
			<!-- ARTICLE FOOTER -->
			<footer>
				<a href="#">See more</a>
			</footer>
			<!-- /ARTICLE FOOTER -->
		</article>
		<!-- /MAIN ARTICLE -->
		<!-- MAIN FOOTER -->
		<footer>MAIN FOOTER</footer>
		<!-- /MAIN FOOTER -->
	</main>
	<!-- /MAIN CONTENT AREA -->
	<!-- TEMPLATE FOOTER -->
	<?php get_footer(); ?>
	<!-- /TEMPLATE FOOTER -->
</body>
<!-- /TEMPLATE BODY -->

</html>
