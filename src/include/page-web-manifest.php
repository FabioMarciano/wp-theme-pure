<?php
/* Web Manifest page
 * Outputs the Web Manifest settings page
**/

function page_web_manifest()
{
?>
	<div class="wrap">
		<h1>Web Manifest</h1>

		<form method="post" action="options.php" novalidate="novalidate">
			<input type="hidden" name="pwa_page" value="web_manifest">
			<input type="hidden" name="action" value="update">

			<table class="form-table" role="presentation">

				<tbody>
					<tr>
						<th scope="row">
							<label for="filename">Nome do arquivo</label>
						</th>
						<td>
							<input name="filename" type="text" id="filename" placeholder="manifest.json" value="manifest.json" class="regular-text">
							<p class="description" id="tagline-filename">Default: manifest.json</p>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sitename">Título do site</label>
						</th>
						<td>
							<input name="sitename" type="text" id="sitename" value="" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="shortname">Nome curto</label>
						</th>
						<td>
							<input name="shortname" type="text" id="shortname" value="" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="description">Descrição</label>
						</th>
						<td>
							<input name="description" type="text" id="description" value="" class="regular-text">
							<p class="description" id="tagline-description">Em poucas palavras, explique do que se trata este site. Exemplo: “Só mais um site WordPress.”</p>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="start-url">URL de início</label>
						</th>
						<td>
							<input name="starturl" type="text" id="start-url" placeholder="/" value="" class="regular-text">
							<p class="description" id="tagline-start-url">Default: /</p>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="background-color">Cor de fundo</label>
						</th>
						<td>
							<input name="bgcolor" type="text" id="background-color" value="#ffffff" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="theme-color">Cor do tema</label>
						</th>
						<td>
							<input name="themecolor" type="text" id="theme-color" value="#ffffff" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="start-url">Display</label>
						</th>
						<td>
							<select name="display" id="display">
								<option selected="selected" value="fullscreen">Fullscreen</option>
								<option value="standalone">Standalone</option>
								<option value="minimal-ui">Minimal-UI</option>
								<option value="browser">Browser</option>
							</select>
							<p class="description" id="tagline-display">Default: fullscreen</p>
							<script>
								const listDisplay = document.querySelector('select[name="display"]');
								const display = {
									"fullscreen": "All of the available display area is used and no user agent chrome is shown.",
									"standalone": "The application will look and feel like a standalone application. This can include the application having a different window, its own icon in the application launcher, etc. In this mode, the user agent will exclude UI elements for controlling navigation, but can include other UI elements such as a status bar",
									"minimal-ui": "The application will look and feel like a standalone application, but will have a minimal set of UI elements for controlling navigation. The elements will vary by browser.",
									"browser": "The application opens in a conventional browser tab or new window, depending on the browser and platform. This is the default.",
								};

								const loadDisplay = () => {

									const index = listDisplay.selectedIndex;
									const option = document.querySelectorAll('select[name="display"] option')[index].value;
									document.querySelector('#tagline-display').textContent = display[option];
								}

								(() => {
									listDisplay.addEventListener('change', () => {
										loadDisplay();
									});
								})();

								loadDisplay();
							</script>
						</td>
					</tr>
					<tr class="hide-if-no-js site-icon-section">
						<th scope="row">Ícone do site</th>
						<td>


							<div id="site-icon-preview" class="site-icon-preview wp-clearfix settings-page-preview  hidden">
								<div class="favicon-preview">
									<img src="http://localhost:8000/wp-admin/images/browser.png" class="browser-preview" width="182" alt="">
									<div class="favicon">
										<img id="browser-icon-preview" src="" alt="">
									</div>
									<span id="site-icon-preview-site-title" class="browser-title" aria-hidden="true">Vivian Perez Marciano</span>
								</div>
								<img id="app-icon-preview" class="app-icon-preview" src="" alt="">
							</div>

							<input type="hidden" name="site_icon" id="site_icon_hidden_field" value="0">
							<div class="action-buttons">
								<button type="button" id="choose-from-library-button" class="upload-button button-add-media button-add-site-icon" data-alt-classes="button" data-size="512" data-choose-text="Choose a Site Icon" data-update-text="Change Site Icon" data-update="Set as Site Icon" data-state="">
									Choose a Site Icon </button>
								<button id="js-remove-site-icon" type="button" class="button button-secondary reset hidden">
									Remove Site Icon </button>
							</div>

							<p class="description">
								The Site Icon is what you see in browser tabs, bookmark bars, and within the WordPress mobile apps. It should be square and at least <code>512 × 512</code> pixels. </p>

						</td>
					</tr>

					<tr>
						<th colspan="2">
							<p class="submit">
								<input type="submit" name="submit" id="submit" class="button button-primary" value="Salvar alterações">
							</p>
						</th>
					</tr>

				</tbody>
		</form>
	</div>
<?php
} ?>
