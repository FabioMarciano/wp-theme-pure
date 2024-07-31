<?php

/**
 * The Not Found template file
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
			<h2>Página não encontrada</h2>
			<p>A página que você está procurando não pôde ser encontrada, mas temos algumas sugestões de conteúdos para te oferecer.</p>
		</header>
		<article>
			<header>
				<h2>Mapa do site</h2>
				<p>Segue uma relação de páginas que você pode visitar:</p>
			</header>
			<div>
				<?php
				$args = array(
					'menu' => 'main-menu',
					'container' => false,
					'menu_id' => 'main-menu',
					'items_wrap' => '<menu itemscope itemtype="https://schema.org/SiteNavigationElement">%3$s</menu>',
					'theme_location' => 'main-menu'
				);
				wp_nav_menu($args);
				?>
			</div>
		</article>
		<footer>
			<h2>Contato</h2>
			<p>Se não encontrou oque estava procurando, você pode em contato com a gente:</p>
			<form mathod="post" action="#">
				<fieldset>
					<legend>Dados Pessoais:</legend>
					<fieldset>
						<label for="frm-name">Nome:</label>
						<input id="frm-name" type="text" name="name">
					</fieldset>
					<fieldset>
						<label for="frm-email">E-mail:</label>
						<input id="frm-email" type="email" name="email">
					</fieldset>
					<fieldset>
						<label for="frm-telephone">Telefone:</label>
						<input id="frm-telephone" type="tel" name="telephone" pattern="\([0-9]{2}\) [0-9]{1} [0-9]{4}-[0-9]{4}" placeholder="(xx) x xxxx-xxxx">
					</fieldset>
				</fieldset>

				<fieldset>
					<legend>Mensagem:</legend>
					<fieldset>
						<label for="frm-message">Mensagem:</label>
						<textarea id="frm-message" name="auth-message" rows="5" cols="30"></textarea>
					</fieldset>
				</fieldset>
				<fieldset>
					<legend>Autorizações:</legend>
					<fieldset>
						<label for="frm-auth-tel">Autorizo entrar em contato pelo número de telefone</label>
						<input id="frm-auth-tel" type="checkbox" name="auth-tel">
					</fieldset>
					<fieldset>
						<label for="frm-auth-email">Autorizo entrar em contato pelo e-mail de contato</label>
						<input id="frm-auth-email" type="checkbox" name="auth-email">
					</fieldset>
				</fieldset>
				<fieldset>
					<legend>Ações:</legend>
					<fieldset>
						<button type="submit">Enviar</button>
					</fieldset>
				</fieldset>
			</form>
		</footer>
	</main>
	<!-- /MAIN CONTENT AREA -->
	<!-- TEMPLATE FOOTER -->
	<?php get_footer(); ?>
	<!-- /TEMPLATE FOOTER -->
</body>
<!-- /TEMPLATE BODY -->

</html>
