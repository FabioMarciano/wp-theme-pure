<?php

/**
 * The Post template file
 *
 * @package WordPress
 * @subpackage Pure
 * @since Pure 1.0.0
 */


$postID = get_the_ID();
$postData = get_post($postID);

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
		<header>HEADER DO SINGLE</header>
		<!-- /MAIN HEADER -->
		<?php the_post_thumbnail(); ?>
		<!-- MAIN ARTICLE -->
		<article>
			<!-- ARTICLE HEADER -->
			<header>
				<h1 id="article-headline" itemprop="headline"><?php echo $postData->post_title; ?></h1>
				<h2 id="article-description" itemprop="description"><?php echo $postData->post_excerpt; ?></h2>
				<address itemscope itemprop="author" itemtype="https://schema.org/Person">
					<a itemprop="url" href="/author/admin/">
						<strong itemprop="name">Fabio Marciano</strong>
					</a>
				</address>
				<div>
					Publicado em <time itemprop="datePublished" datetime="<?php echo get_post_time("Y-m-d H:i:s P", false); ?>"><?php echo $postData->post_date; ?></time>, atualizado em <time itemprop="dateModified" datetime="<?php echo get_post_modified_time("Y-m-d H:i:s P", false); ?>"><?php echo $postData->post_modified; ?></time>
				</div>
			</header>
			<!-- /ARTICLE HEADER -->
			<!-- FEATURED IMAGE -->
			<figure itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
				<img itemprop="url" src="https://picsum.photos/id/22/1024/400" width="1024" height="400" alt="Alternative text" fetchpriority="high">
				<figcaption itemprop="caption">
					<p>Lorem legenda ipsum dolor sit amet, consectuter admi pleasi lorem.</p>
				</figcaption>
			</figure>
			<!-- /FEATURED IMAGE -->
			<!-- ARTICLE WORKSPACE -->
			<div itemprop="articleBody">
				<?php the_content(); ?>
			</div>
			<!-- /ARTICLE WORKSPACE -->
			<!-- ARTICLE FOOTER -->
			<footer>Footer do article</footer>
			<!-- /ARTICLE FOOTER -->
		</article>
		<!-- /MAIN ARTICLE -->
		<!-- MAIN ASIDE -->
		<aside>MAIN ASIDE</aside>
		<!-- /MAIN ASIDE -->
		<!-- MAIN FOOTER -->
		<footer>FOOTER DO SINGLE</footer>
		<!-- /MAIN FOOTER -->
	</main>
	<!-- /MAIN CONTENT AREA -->
	<!-- TEMPLATE FOOTER -->
	<?php get_footer(); ?>
	<!-- /TEMPLATE FOOTER -->
</body>
<!-- /TEMPLATE BODY -->

</html>
