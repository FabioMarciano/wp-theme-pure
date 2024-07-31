<!-- MAIN FOOTER -->
<footer id="body-footer">
	<div itemscope itemtype="https://schema.org/MedicalBusiness">
		<div>
			<figure itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
				<img itemprop="url" src="http://localhost:8000/wp-content/uploads/2024/07/60b37a3cd343fedecaf3bea55df07b75.jpg" width="564" height="783" alt="">
			</figure>
			<h2 itemprop="name">Vivian Perez Marciano</h2>
			<h3 itemprop="description">
				<strong>Psicóloga</strong> especializada em <abbr content="Terapia Cogitivo Comportamental">TCC</abbr> - <em>Terapia Cogitivo Comportamental</em>.
			</h3>
			<abbr itemprop="memberOf" content="Conselho Regional de Psicologia">CRP</abbr> <mark itemprop="identifier" title="Registro no Conselho Regional de Psicologia (CPR)">12345678</mark>
			<p>Atendimento de <mark itemprop="openingHours" content="Mo-Fr 09:00-17:00">segunda a sexta, das 9h00 às 17h</mark></p>
			<address itemscope itemprop="address" itemtype="https://schema.org/PostalAddress">
				<strong itemprop="streetAddress">Avenida Zumkeller, 933</strong>
				<span itemprop="addressLocality">São Paulo</span>
				<span itemprop="addressRegion">São Paulo</span>
				<span itemprop="addressCountry" content="BR">Brasil</span>
				<span itemprop="postalCode">02420-001</span>
			</address>
			<strong itemprop="telephone" content="+55 11 952051393">Telefone: +55 11 952051393</strong>
			<?php
			$args = array(
				'menu' => 'social-menu',
				'container' => false,
				'menu_id' => 'footer-social-menu',
				'items_wrap' => '<ul class="social-networking" id="%1$s">%3$s</ul>',
				'theme_location' => 'social-menu'
			);
			wp_nav_menu($args);
			?>
		</div>
		<meta itemprop="priceRange" content="$$">
		<meta itemprop="paymentAccepted" content="Dinheiro, Cartão de Crédito, Cartão de Débito, PIX, Transferência Bancária">
		<meta itemprop="url" content="https://localhost:8000/">
		<meta itemprop="foundingDate" content="2025-01-01">
	</div>
</footer>
<!-- /MAIN FOOTER -->
