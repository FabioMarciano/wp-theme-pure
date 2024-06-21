<?php

/**
 * The Blog template file
 *
 * @package WordPress
 * @subpackage Pure
 * @since Pure 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php schema_type('Blog'); ?>>
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
		<header>HEADER DE BLOG</header>
		<!-- /MAIN HEADER -->
		<!-- MAIN ARTICLE -->
		<article>
			<!-- ARTICLE HEADER -->
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			<!-- /ARTICLE HEADER -->
			<!-- ARTICLE WORKSPACE -->
			<div>
				<?php $args = array(
					'post_type' => 'post',
					'orderby'    => 'post_date',
					'post_status' => 'publish',
					'order'    => 'DESC',
					'posts_per_page' => 10, // -1 will retrive all the post that is published
					'offset' => 0
				);
				$query = new WP_Query($args);

				?>
				<pre>COUNT: <?php echo $query->post_count; ?>/<?php print_r($_GET); ?>

				<?php #print_r($query);
				?></pre>
				<?php if ($query->have_posts()) : ?>
					<ul>
						<?php while ($query->have_posts()) : $query->the_post(); ?>
							<li itemprop="name">
								<h3><?php the_title(sprintf('<a href="%s">', esc_url(get_permalink())), '</a>'); ?></h3>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php else : ?>
					NADA AQUI

				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
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
		<footer></footer>
		<!-- /MAIN FOOTER -->
	</main>
	<!-- /MAIN CONTENT AREA -->
	<!-- TEMPLATE FOOTER -->
	<?php wp_footer(); ?>
	<!-- /TEMPLATE FOOTER -->
</body>
<!-- /TEMPLATE BODY -->

</html>
