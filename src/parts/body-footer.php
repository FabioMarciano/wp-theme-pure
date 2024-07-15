<!-- MAIN FOOTER -->
<footer id="body-footer">
	<div itemscope itemtype="https://schema.org/MedicalBusiness">
		<div>
			<figure itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
				<img itemprop="url" src="https://1.gravatar.com/avatar/13d4cf8bce64a6fd4adad8eb748e6387?s=180&d=mm&r=g" width="64" height="64" alt="">
			</figure>
			<h2 itemprop="name">Vivian Perez Marciano</h2>
			<h3 itemprop="description">
				<strong>Psicóloga</strong> especializada em <em>Terapia Cogitivo Comportamental</em>.
				<abbr itemprop="memberOf" content="Conselho Regional de Psicologia">CRP</abbr> <mark itemprop="identifier" title="Registro no Conselho Regional de Psicologia (CPR)">12345678</mark>
			</h3>
			<mark itemprop="openingHours" content="Mo-Fr 09:00-17:00">Atendimento de segunda a sexta, das 9h00 às 17h</mark>
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
				'items_wrap' => '<ul id="%1$s">%3$s</ul>',
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
