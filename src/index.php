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
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempus in risus nec consequat. Etiam at erat in ex fermentum sollicitudin. Donec at scelerisque dui, at iaculis turpis. Nulla facilisi. Phasellus in lorem non mauris laoreet elementum non ac risus. Integer id commodo elit. Proin eget efficitur purus. Integer a purus volutpat, gravida lacus ac, mollis odio. In et nisl in arcu viverra sodales.</p>
				<p>Suspendisse non ullamcorper dui, sit amet cursus ante. Suspendisse sodales faucibus ante, vitae euismod quam sagittis et. Duis pulvinar augue ut urna lacinia, ac bibendum diam pharetra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean sagittis sapien vel elit ullamcorper, nec laoreet sapien viverra. Nulla eget iaculis nisl. Duis viverra ultricies lorem, ac viverra dolor consectetur sed. Nam imperdiet tellus ut tortor finibus, nec iaculis odio ullamcorper. Maecenas a imperdiet nibh, sodales accumsan urna. Pellentesque feugiat massa quam, id condimentum enim porttitor ac. Etiam molestie in felis quis sagittis. Pellentesque commodo posuere aliquet. Sed vitae blandit justo. Nunc id justo arcu.</p>
				<p>Ut placerat ante eget massa pretium, nec convallis mauris cursus. Morbi nibh nisi, tincidunt in leo vel, interdum rutrum elit. Vestibulum eget vulputate augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec eu mi congue, luctus sapien ut, vehicula arcu. Donec purus nisl, semper id dui a, tristique vulputate ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla dictum vestibulum leo, a dapibus risus.</p>
				<p>Etiam tempus ultrices nulla eget feugiat. Nullam ultrices orci tellus, nec euismod metus sollicitudin sit amet. Fusce egestas congue nibh vel malesuada. Nam at nunc ac nibh pharetra laoreet semper sed dolor. Proin venenatis turpis nisi, ut fringilla quam scelerisque in. Integer consequat ante a consequat commodo. Fusce tempus rhoncus tincidunt. Nullam euismod commodo congue. Proin sit amet dignissim ipsum, eu commodo quam. Sed lobortis urna et ipsum egestas feugiat vel fermentum augue. Praesent iaculis non leo quis rutrum. Duis gravida velit vitae turpis rutrum sodales. Phasellus sit amet mattis lorem. Vivamus ut malesuada orci.</p>
				<p>Etiam rhoncus libero eros, nec dignissim tortor varius in. Nunc suscipit sem ex. Phasellus eget felis at purus ultricies scelerisque eu non sem. Nunc eu ornare turpis, consequat interdum ante. Ut nec ullamcorper odio, vitae bibendum lorem. Nulla feugiat tincidunt lectus sit amet dapibus. Aenean sed diam nunc. Ut vestibulum, dolor id egestas congue, lacus sem placerat elit, in fringilla lorem sem sit amet nulla. Sed vel mauris a augue eleifend mattis egestas a felis. Cras nunc velit, rhoncus nec risus quis, ornare posuere augue. Ut pellentesque pulvinar maximus. Nam ac facilisis odio. Ut suscipit odio non nisi tincidunt vehicula. Donec vitae ligula mi.</p>
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
	<!-- BODY FOOTER -->
	<?php get_template_part('parts/body-footer'); ?>
	<?php wp_footer(); ?>
	<!-- /BODY FOOTER -->
</body>
<!-- /TEMPLATE BODY -->

</html>
