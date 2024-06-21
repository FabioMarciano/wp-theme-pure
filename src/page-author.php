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
		<section>
			<header>
				<h3>Lista de autores</h3>
			</header>
			<ul>
				<li>
					<a href="/author/admin/">Admin</a>
				</li>
			</ul>
			<footer>
				Exibindo autores entre <var>21</var> e <var>30</var> de <var>447</var>
			</footer>
		</section>
		<nav id="author-pager">
			<header>Navegação por paginas</header>
			<ol>
				<li><a href="#" title="Ir para a primeira página">Primeira</a></li>
				<li><a href="#" title="Ir para a página anterior">Anterior</a></li>
				<li><a href="#" title="Ir para a próxima página">Próxima</a></li>
				<li><a href="#" title="Ir para a última página">Última</a></li>
				<li>1</li>
				<li><a href="#" title="Ir para a página número 2">2</a></li>
				<li><a href="#" title="Ir para a página número 3">3</a></li>
				<li><a href="#" title="Ir para a página número 4">4</a></li>
				<li><a href="#" title="Ir para a página número 45">45</a></li>
			</ol>
			<footer>Exibindo página <var>1</var> de <var>45</var></footer>
		</nav>
		<footer>MAIN FOOTER</footer>
	</main>
	<!-- /MAIN CONTENT AREA -->
	<!-- TEMPLATE FOOTER -->
	<?php wp_footer(); ?>
	<!-- /TEMPLATE FOOTER -->
</body>
<!-- /TEMPLATE BODY -->

</html>
