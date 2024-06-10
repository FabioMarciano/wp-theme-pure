<?php

/**
 * The Author template file
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

	<!-- MAIN AREA -->
	<main>
		<nav>
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo get_bloginfo('url'); ?>">
						<h3 itemprop="name">Página inicial</h3>
						<meta itemprop="position" content="1">
					</a>
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="/author/">
						<h3 itemprop="name">Autores</h3>
						<meta itemprop="position" content="2">
					</a>
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="/author/<?php echo get_the_author_meta('nicename'); ?>">
						<h3 itemprop="name"><?php echo get_the_author_meta('display_name'); ?></h3>
						<meta itemprop="position" content="3">
					</a>
				</li>
			</ul>
		</nav>
		<header>
			<figure>
				<?php echo get_avatar('fabioamarciano@gmail.com', '90'); ?>
				<figcaption>
					<?php echo get_the_author_meta('display_name'); ?>
				</figcaption>
			</figure>
			<h1><?php echo get_the_author_meta('display_name'); ?></h1>
			<h2><?php echo get_the_author_meta('description'); ?></h2>
		</header>
		<section>
			<header>
				<h3>Conteúdos de <?php echo get_the_author_meta('display_name'); ?></h3>
			</header>
			<div>
				<?php if (have_posts()) : ?>
					<ul>
						<?php while (have_posts()) : the_post(); ?>
							<li>
								<h3>
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
								</h3>
								<time datetime="<?php the_time('Y-m-d H:i:s'); ?>"><?php the_time('d M Y'); ?></time>
								<?php the_excerpt(); ?>
							</li>
						<?php endwhile;
						?>
					</ul>
				<?php else : ?>
					<p><?php _e('No posts by this author.'); ?></p>
				<?php endif; ?>
			</div>
			<footer>
				PAGINACAO DO AUTOR
			</footer>
		</section>
		<footer></footer>
	</main>
	<!-- /MAIN AREA -->

	<!-- BODY FOOTER -->
	<?php get_template_part('parts/body-footer'); ?>
	<!-- /BODY FOOTER -->

	<?php wp_footer(); ?>
</body>
<!-- /TEMPLATE BODY -->

</html>
