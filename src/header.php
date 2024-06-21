<?php

/**
 * The header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Pure
 * @since Pure 1.0
 */

?>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php
			$title = [is_author() ? get_the_author_meta("nicename") : (is_archive() ? get_the_category()[0]->name : get_the_title())];
			// if (!is_single()) {
			// 	array_unshift($title, get_bloginfo('name'));
			// }
			echo implode(": ", $title)
			?></title>
	<meta name="description" content="<?php
										$description = is_single() ? get_the_excerpt() : get_bloginfo('description');
										echo esc_attr($description);
										?>">
	<?php schema_head(); ?>
	<meta name="theme-color" content="#ccc">
	<?php wp_head(); ?>
</head>
