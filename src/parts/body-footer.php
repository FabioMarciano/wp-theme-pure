<!-- MAIN FOOTER -->
<footer id="body-footer">
	<div itemscope itemtype="https://schema.org/MedicalBusiness">
		<figure itemscope itemprop="image">
			<img itemprop="url" src="https://1.gravatar.com/avatar/13d4cf8bce64a6fd4adad8eb748e6387?s=180&d=mm&r=g" width="64" height="64" alt="">
		</figure>
		<h2 itemprop="name">Vivian Perez Marciano</h2>
		<h3 itemprop="description">
			<strong>Psicóloga</strong> especializada em <em>Terapia Cogitivo Comportamental</em>.
			<abbr itemprop="memberOf" content="Conselho Regional de Psicologia">CRP</abbr> <mark itemprop="identifier" title="Registro no Conselho Regional de Psicologia (CPR)">12345678</mark>
		</h3>
		<mark itemprop="openingHours" content="Mo-Fr 09:00-17:00">Atendimento de segunda a sexta, das 9h00 às 17h</mark>
		<strong itemprop="telephone" content="+55 11 952051393">Telefone: +55 11 952051393</strong>
		<address itemscope itemprop="address" itemtype="https://schema.org/PostalAddress">
			<strong itemprop="streetAddress">Avenida Zumkeller, 933</strong>
			<span itemprop="addressLocality">São Paulo</span>
			<span itemprop="addressRegion">São Paulo</span>
			<span itemprop="addressCountry" content="BR">Brasil</span>
			<span itemprop="postalCode">02420-001</span>
		</address>
		<div itemscope itemprop="geo" itemtype="https://schema.org/GeoCoordinates">
			<figure>
				<img itemprop="url" src="http://localhost:8000/wp-content/uploads/2024/06/Screenshot-from-2024-06-14-15-43-48.png" width="320" height="240" alt="">
			</figure>
			<meta itemprop="latitude" content="0.00">
			<meta itemprop="longitude" content="0.00">
		</div>
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

		<meta itemprop="priceRange" content="$$">
		<meta itemprop="paymentAccepted" content="Dinheiro, Cartão de Crédito, Cartão de Débito, PIX, Transferência Bancária">
		<meta itemprop="url" content="https://localhost:8000/">
		<p>&copy; <time itemprop="foundingDate" datetime="2025-01-01">2025</time>.</p>
	</div>
</footer>
<!-- /MAIN FOOTER -->
