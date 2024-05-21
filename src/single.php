<?php

/**
 * The Post template file
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
		<header>HEADER DO SINGLE</header>
		<article>
			<header>
				<h1 id="article-headline" itemprop="headline">Header do article</h1>
				<h2 id="article-description" itemprop="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
				<address itemscope itemprop="author" itemtype="https://schema.org/Person">
					<a href="https://valor.globo.com/autores/tais-hirata/" itemprop="url">
						<strong itemprop="name">Fabio Marciano</strong>
					</a>
				</address>
			</header>
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu. Vehicula ipsum a arcu cursus. Pellentesque habitant morbi tristique senectus et netus et. Turpis massa sed elementum tempus egestas. Magna etiam tempor orci eu lobortis elementum. Faucibus nisl tincidunt eget nullam non nisi est. Proin sed libero enim sed faucibus. At quis risus sed vulputate odio. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Nunc congue nisi vitae suscipit tellus. Vitae aliquet nec ullamcorper sit amet risus nullam eget felis. At tellus at urna condimentum mattis pellentesque id nibh tortor. Viverra suspendisse potenti nullam ac. Morbi enim nunc faucibus a pellentesque sit amet.</p>

				<p>Libero id faucibus nisl tincidunt eget nullam. At augue eget arcu dictum varius duis at consectetur lorem. Ut faucibus pulvinar elementum integer. Adipiscing vitae proin sagittis nisl. Faucibus a pellentesque sit amet porttitor. Aliquet nibh praesent tristique magna sit amet. Volutpat est velit egestas dui id ornare arcu. Odio facilisis mauris sit amet massa vitae tortor condimentum. Id leo in vitae turpis massa sed. Pulvinar mattis nunc sed blandit libero volutpat sed cras. Sit amet justo donec enim diam vulputate ut. Pretium quam vulputate dignissim suspendisse in est ante in nibh. Iaculis eu non diam phasellus vestibulum lorem sed risus ultricies. Pellentesque elit eget gravida cum sociis. Orci phasellus egestas tellus rutrum. Scelerisque purus semper eget duis.</p>

				<p>Lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci. Et odio pellentesque diam volutpat. Aenean vel elit scelerisque mauris pellentesque pulvinar. Eget aliquet nibh praesent tristique magna sit. Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Non blandit massa enim nec dui nunc mattis enim ut. Tortor posuere ac ut consequat semper. Convallis a cras semper auctor neque vitae tempus quam pellentesque. Sed velit dignissim sodales ut. Sed vulputate odio ut enim. Nunc scelerisque viverra mauris in. Quisque non tellus orci ac. Posuere urna nec tincidunt praesent semper feugiat nibh sed pulvinar. Nunc consequat interdum varius sit amet mattis vulputate.</p>

				<p>Augue lacus viverra vitae congue eu consequat. In arcu cursus euismod quis viverra nibh cras pulvinar mattis. Et malesuada fames ac turpis egestas integer eget. Nibh praesent tristique magna sit amet purus. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Vulputate dignissim suspendisse in est ante. Adipiscing elit ut aliquam purus sit. Adipiscing elit ut aliquam purus sit amet luctus venenatis lectus. Suspendisse in est ante in. Ac auctor augue mauris augue. Eget nunc scelerisque viverra mauris in aliquam. Dignissim cras tincidunt lobortis feugiat vivamus at augue. Quis vel eros donec ac odio tempor orci. Est ante in nibh mauris. Integer eget aliquet nibh praesent tristique magna sit amet purus. Nisi lacus sed viverra tellus in.</p>

				<p>Auctor elit sed vulputate mi sit amet mauris. Suspendisse potenti nullam ac tortor vitae purus faucibus. Massa placerat duis ultricies lacus sed. Facilisis sed odio morbi quis commodo odio aenean sed. Lectus vestibulum mattis ullamcorper velit sed. Urna neque viverra justo nec ultrices dui sapien eget. Malesuada bibendum arcu vitae elementum curabitur vitae. Amet mattis vulputate enim nulla aliquet porttitor lacus. Cras fermentum odio eu feugiat. Ridiculus mus mauris vitae ultricies. Proin libero nunc consequat interdum varius sit amet. Ultrices in iaculis nunc sed augue lacus viverra vitae. Neque convallis a cras semper auctor neque. Neque convallis a cras semper auctor neque. A arcu cursus vitae congue mauris. Nisl nunc mi ipsum faucibus vitae. Volutpat est velit egestas dui id ornare.</p>
			</div>
			<footer>Footer do article</footer>
		</article>
		<aside>Article ASIDE</aside>
		<footer>FOOTER DO SINGLE</footer>
	</main>
	<!-- /MAIN CONTENT AREA -->

	<!-- BODY FOOTER -->
	<?php get_template_part('parts/body-footer'); ?>
	<!-- /BODY FOOTER -->

	<?php wp_footer(); ?>
</body>
<!-- /TEMPLATE BODY -->

</html>
