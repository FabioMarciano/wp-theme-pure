<?php
/* Tag builder hook
 * Outputs the tag and its attributes
 * @param {string} tag - the name of the tag
 * @param {array} attributes - the tag attributes (key, value pairs)
 * @param {boolean} autoClose - the tag close method
 * @returns {string} html - html script block
**/

function hook_tag_builder($tag, $attributes = [], $content = null)
{
	$list = array($tag);
	$autoClose = $content === null;

	foreach ($attributes as $key => $value) {
		array_push($list, $key . "=\"" . $value . "\"");
	}

	echo "<" . implode(" ", $list) . ">" . (!$autoClose ? $content . "</" . $tag . ">" : "");
}
