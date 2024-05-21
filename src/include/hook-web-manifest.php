<?php
/* Web Manifest hook
 * Outputs the manifest file
 * @returns {string} tag - manifest file tag
**/

function hook_web_manifest()
{
?>
	<link rel="manifest" href="<?php echo get_theme_file_uri("/manifest.json"); ?>">
<?php
}
?>
