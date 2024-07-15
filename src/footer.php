<?php

/**
 * The footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Pure
 * @since Pure 1.0
 */

require_once("include/hook-tag-builder.php");

get_template_part('parts/body-footer');

hook_tag_builder("script", ["src" => get_theme_file_uri("/assets/script/main.js"),  "defer" => "defer"]);
