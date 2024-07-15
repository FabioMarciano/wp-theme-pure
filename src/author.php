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
			<?php $breadCrumbList = [
				["name" => "Página Inicial", "permalink" => get_bloginfo('url')],
				["name" => "Autores", "permalink" => trim(get_bloginfo('url'), "/") . "/author/"],
				["name" => get_the_author_meta('display_name'), "permalink" => trim(get_bloginfo('url'), "/") . "/author/" . get_the_author_meta('nicename')]
			];

			if (sizeof($breadCrumbList) > 0) :
			?>
				<ul itemscope itemtype="http://schema.org/BreadcrumbList">
					<?php foreach ($breadCrumbList as $index => $item) : $item = (object)$item; ?>
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
	<!-- TEMPLATE FOOTER -->
	<?php get_footer(); ?>
	<!-- /TEMPLATE FOOTER -->
</body>
<!-- /TEMPLATE BODY -->

</html>
