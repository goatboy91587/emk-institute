<?php

class SocialMenuWalker extends Walker_Nav_Menu
{
	//
	// Begin SubMenu Output if needed
	//
	public function start_lvl(&$output, $depth = 0, $args = [])
	{
		$indent = str_repeat("\t", $depth);

		if ($depth == 0) :
			$output .= "\n$indent<div class='sub-menu-wrap'><ul class='sub-menu flex'>\n";
		else :
			$output .= "\n$indent<ul class='sub-menu'>\n";
		endif;
	}

	public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
	{
		$facebookIcon = '<img class="w-4 object-contain object-center" src="' . get_template_directory_uri() . '/assets/images/facebook.png' . '"/>';
		$instagramIcon = '<img class="w-4 object-contain object-center" src="' . get_template_directory_uri() . '/assets/images/instagram.png' . '"/>';
		$twitterIcon = '<img class="w-4 object-contain object-center" src="' . get_template_directory_uri() . '/assets/images/twitter.png' . '"/>';
		$flickrIcon = file_get_contents(get_template_directory() . '/assets/images/flickr.svg');

		// Example: Setup Variables & get custom fields that are attached to the menu item
		//
		$item_id = $item->ID;

		$classes = null;
		foreach($item->classes as $class) {
			$classes .= ' ' . $class;
		}

		$current_item_class = in_array('current-menu-item', $item->classes) ? ' active' : 'current';

		$output .= '<li class="' . $classes . ' ' . strtolower($item->title) . ' menu-item-' . $item_id . '">';

		$output .= '<a href="' . $item->url . '" class="border-none ' . $current_item_class . '">';

		// $output .= '<span class="border rounded-full border-white">';
		switch ($item->title) {
			case 'Facebook':
				$output .= $facebookIcon;
				break;
			case 'Instagram':
				$output .= $instagramIcon;
				break;
			case 'Twitter':
				$output .= $twitterIcon;
				break;
			case 'Flickr':
				$output .= $flickrIcon;
				break;
			default:
				$output .= $item->title;
				break;
		}
		// $output .= '</span>';
		$output .= '</a>';

		$output .= '' . "\n";
	}

	//
	// Wrap up SubMenu output if needed
	//
	public function end_lvl(&$output, $depth = 0, $args = [])
	{
		$indent = str_repeat("\t", $depth);
		if ($depth == 0) :
			$output .= "$indent</ul></div>\n";
		else :
			$output .= "$indent</ul>\n";
		endif;
	}
}
