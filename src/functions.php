<?php

require_once("include/hook-tag-builder.php");

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
function get_schema_type($type = "")
{
	if ($type == "") {
		$schema = array("WebSite" => is_home() || is_front_page(), "NewsArticle" => is_single(), "ProfilePage" => is_author());

		$type = "WebPage";
		foreach ($schema as $key => $value) {
			$type = $value ? $key : $type;
		}
	}

	return $type;
}

/**
 * Schema type by template
 */
function schema_type($type = "")
{
	echo "itemscope itemtype=\"http://schema.org/" . get_schema_type($type) . "\"";
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
 * Register theme menus
 */

add_action('init', function () {
	register_nav_menus(
		array(
			'main-menu' => __('Main menu'),
			'social-menu' => __('Social Menu')
		)
	);
});

/**
 * Nav menu items attributes
 */
add_filter('nav_menu_item_attributes', function ($atts, $item, $args) {
	$itemprop = ["main-menu" => "name", "social-menu" => "sameAs"];

	if (array_key_exists($args->menu, $itemprop)) {
		$atts['itemprop'] = $itemprop[$args->menu];
	}

	return $atts;
}, 10, 3);

// --------------------
// SETTINGS
// --------------------
/* code similar to your example */

class MySettingsPage
{
	/**
	 * Holds the values to be used in the fields callbacks
	 */
	private $options;

	/**
	 * Start up
	 */
	public function __construct()
	{
		add_action('admin_menu', array($this, 'add_plugin_page'));
		add_action('admin_init', array($this, 'page_init'));
	}

	/**
	 * Add options page
	 */
	public function add_plugin_page()
	{
		// This page will be under "Settings"
		add_options_page(
			'Settings Admin',
			'My Settings',
			'manage_options',
			'my-setting-admin',
			array($this, 'create_admin_page')
		);
	}

	/**
	 * Register and add settings
	 */
	public function page_init()
	{
		register_setting(
			'my_option_group', // Option group
			'my_option_name', // Option name
			array($this, 'sanitize') // Sanitize
		);

		add_settings_section(
			'setting_section_id', // ID
			'My Custom Settings', // Title
			array($this, 'print_section_info'), // Callback
			'my-setting-admin' // Page
		);

		add_settings_field(
			'id_number', // ID
			'ID Number', // Title
			array($this, 'id_number_callback'), // Callback
			'my-setting-admin', // Page
			'setting_section_id' // Section
		);

		add_settings_field(
			'title',
			'Title',
			array($this, 'title_callback'),
			'my-setting-admin',
			'setting_section_id'
		);
	}

	/**
	 * Options page callback
	 */
	public function create_admin_page()
	{
		// Set class property
		$this->options = get_option('my_option_name');
?>
		<div class="wrap">
			<?php screen_icon(); ?>
			<h2>My Settings</h2>
			<form method="post" action="options.php">
				<?php
				// This prints out all hidden setting fields
				settings_fields('my_option_group');
				do_settings_sections('my-setting-admin');
				submit_button();
				?>
			</form>
		</div>
<?php
	}



	/**
	 * Sanitize each setting field as needed
	 *
	 * @param array $input Contains all settings fields as array keys
	 */
	public function sanitize($input)
	{
		if (!is_numeric($input['id_number']))
			$input['id_number'] = '';

		if (!empty($input['title']))
			$input['title'] = sanitize_text_field($input['title']);

		return $input;
	}

	/**
	 * Print the Section text
	 */
	public function print_section_info()
	{
		print 'Enter your settings below:';
	}

	/**
	 * Get the settings option array and print one of its values
	 */
	public function id_number_callback()
	{
		printf(
			'<input type="text" id="id_number" name="my_option_name[id_number]" value="%s" />',
			esc_attr($this->options['id_number'])
		);
	}

	/**
	 * Get the settings option array and print one of its values
	 */
	public function title_callback()
	{
		printf(
			'<input type="text" id="title" name="my_option_name[title]" value="%s" />',
			esc_attr($this->options['title'])
		);
	}
}

if (is_admin())
	$my_settings_page = new MySettingsPage();
