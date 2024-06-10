<?php

require_once("include/hook-pwa.php");
require_once("include/hook-tag-builder.php");
require_once("include/hook-web-manifest.php");
require_once("include/page-web-manifest.php");
require_once("include/page-pwa.php");

/**
 * Footer actions
 */

add_action('wp_footer', function () {
	include("footer.php");
	hook_pwa("service-worker.js");
	hook_tag_builder("script", ["src" => get_theme_file_uri("/assets/script/main.js"),  "defer" => "defer"]);
});

/**
 * Header action
 * @params {string} filepath - service worker filepath
 */

add_action('wp_head', function () {
	hook_web_manifest();
});

/**
 * Removing emoji scripts and styles
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/**
 * Removing link wlw manifest manifest
 */
remove_action('wp_head', 'wlwmanifest_link');

/**
 * Removing default robots metatag
 */
remove_action('wp_head', 'wp_robots', 1);

/**
 * Removing default shortlik metatag
 */
remove_action('wp_head', 'wp_shortlink_wp_head', 10);

/**
 * Removing default oembed metatag
 */
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

/**
 * Removing default rss feed metatag
 */
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);

/**
 * Removing WP generator metatag
 */
remove_action('wp_head', 'wp_generator');

/**
 * Removing rsd/rpc link tag
 */
remove_action('wp_head', 'rsd_link');

/**
 * Removing REST api link tag
 */
remove_action('wp_head', 'rest_output_link_wp_head', 10, 0);

/**
 * Removing unused and adding default styles
 */
add_action('wp_enqueue_scripts', function () {
	wp_dequeue_style('global-styles');
	wp_dequeue_style('classic-theme-styles');
	wp_dequeue_style('wp-block-library');

	wp_enqueue_style('style', get_stylesheet_uri());
});

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
	add_theme_support('post-thumbnails');
});

/**
 * Schema type selector function
 */
function get_schema_type()
{
	$schema = array("WebSite" => is_home(), "WebSite" => is_front_page(), "NewsArticle" => is_single(), "ProfilePage" => is_author());
	$type = "WebPage";
	foreach ($schema as $key => $value) {
		$type = $value ? $key : $type;
	}
	return $type;
}

/**
 * Schema head function
 */
function schema_head()
{
	$url = (is_home() || is_front_page()) ? get_site_url() : get_the_permalink();

	hook_tag_builder("meta", ["itemprop" => "url", "content" => $url], null, true);
	echo "\n\t";

	if (is_home() || is_front_page()) {
		hook_tag_builder("meta", ["itemprop" => "name", "content" =>  get_bloginfo('name')], null, true);
		echo "\n";
	}
}

/**
 * Remove admin bar
 */

add_filter('show_admin_bar', '__return_false');

/**
 * Remove prefix from archive
 */
add_filter('get_the_archive_title', function ($title) {

	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = get_the_author();
	} elseif (is_tax()) {
		$title = sprintf(__('%1$s'), single_term_title('', false));
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	}

	return $title;
});

/**
 * Schema type by template
 */
function schema_type()
{
	echo "itemscope itemtype=\"http://schema.org/" . get_schema_type() . "\"";
}

/**
 * Custom PWA menu
 */

add_action('admin_menu', 'menu_pwa');
function menu_pwa()
{
	add_menu_page('PWA', 'PWA', 'manage_options', 'pwa-page', 'page_pwa', 'dashicons-admin-site-alt3', 80);
}

/**
 * Custom Manifest submenu
 */

add_action('admin_menu', 'submenu_web_manifest');

function submenu_web_manifest()
{
	add_submenu_page(
		'pwa-page',
		'Web Manifest',
		'Web Manifest',
		'manage_options',
		'manifest',
		'page_web_manifest',
		1
	);
}
