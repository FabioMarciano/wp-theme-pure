<?php
/* PWA hook
 * Outputs the script to register a service worker
 * @param {string} name - service worker script name
 * @param {string} path - service worker script path
 * @returns {string} html - html script block
**/

function hook_pwa($file)
{
	if ($file != "") :
?>
		<script>
			if ('serviceWorker' in navigator) {
				navigator.serviceWorker.register('<?php echo get_theme_file_uri($file); ?>');
			}
		</script>
<?php
	endif;
} ?>
