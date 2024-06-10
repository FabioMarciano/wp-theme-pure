<?php
/* PWA page
 * Outputs the PWA settings page
**/

function page_pwa()
{
?>
	<div class="wrap" id="wp-media-grid" data-search="">
		<h1 class="wp-heading-inline">PWA</h1>
		<small>Progressive Web Apps</small>
		<hr class="wp-header-end">
		<div class="media-frame wp-core-ui mode-grid mode-edit hide-menu">
			<div class="media-frame-title" id="media-frame-title">
				<h1>PWA</h1>
				<small>Progressive Web Apps</small>
			</div>
			<h2 class="media-frame-menu-heading">Opções</h2>
			<ul>
				<li><a href="admin.php?page=manifest">Edit manifest file</a></li>
				<li><a href="#">Pre-cache Management</a></li>
				<li><a href="#">Cache Policy Management</a></li>
			</ul>
		</div>
	</div>
<?php
} ?>
