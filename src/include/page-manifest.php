<?php
/* PWA page
 * Outputs the PWA settings page
**/

function page_manifest()
{
?>
	<div class="wrap" id="wp-media-grid" data-search="">
		<h1 class="wp-heading-inline">Web Manifest</h1>
		<hr class="wp-header-end">
		<div class="media-frame wp-core-ui mode-grid mode-edit hide-menu">
			<div class="media-frame-title" id="media-frame-title">
				<h1></h1>
			</div>
			<h2 class="media-frame-menu-heading">Opções</h2>
			<ul>
				<li><a href="#">Edit manifest file</a></li>
				<li><a href="#">Pre-cache management</a></li>
			</ul>
		</div>
	</div>
<?php
} ?>
