<?php

require_once __DIR__ . '/CustomPostTypes.php';

class PXUtils
{
	public static function add_google_analytics()
	{
		$path = __DIR__ . '/../html-stubs/google-analytics.html';

		if (file_exists($path)) {
			echo file_get_contents($path);
		}
	}

	public static function exclude_noindexed_pages_from_search($query)
	{
		if (is_admin() || !$query->is_search()) {
			return;
		}

		// Exclude noindexed pages from search results
		$meta_query = [
			'relation' => 'OR',
			[
				'key' => '_yoast_wpseo_meta-robots-noindex',
				'compare' => 'NOT EXISTS',
			],
			[
				'key' => '_yoast_wpseo_meta-robots-noindex',
				'value' => '0',
				'compare' => '=',
				'type' => 'NUMERIC',
			],
		];

		$query->set('meta_query', $meta_query);
	}

	public static function include_svg_markup($value, $post_id, $field)
	{
		$url = parse_url($value['url']);
		$pathInfo = pathinfo($url['path']);

		if (isset($pathInfo['extension']) && $pathInfo['extension'] === 'svg') {
			$svg = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $url['path']);
			$value['svg'] = $svg;
		}

		return $value;
	}

	public static function format_acf_images($value, $post_id, $field)
	{
		if (isset($value['url'])) {
			$url = parse_url($value['url']);
			$pathInfo = pathinfo($url['path']);
		}

		if (isset($value['ID'])) {
			$value['html'] = wp_get_attachment_image($value['ID'], 'original');

			foreach (get_intermediate_image_sizes() as $size) {
				$value['html_' . $size] = wp_get_attachment_image($value['ID'], $size);
			}
		}

		// add inline svg to image array
		if (isset($pathInfo['extension']) && $pathInfo['extension'] === 'svg') {
			$svg = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $url['path']);
			$value['html'] = $svg;
		}

		return $value;
	}

	public static function format_acf_gallery_images($value, $post_id, $field)
	{
		if (!is_iterable($value)) {
			return;
		}

		foreach ($value as $i => $image) {
			if (isset($image['ID'])) {
				$value[$i]['html'] = wp_get_attachment_image($image['ID'], 'original');
			}
		}

		return $value;
	}

	// formatting default video html //

	public static function format_acf_videos($value, $post_id, $field)
	{
		if (isset($value['url'])) {
			$url = parse_url($value['url']);
			$pathInfo = pathinfo($url['path']);
		}

		if (isset($pathInfo['extension']) && $pathInfo['extension'] === 'mp4') {
			$value['html'] = '<div class="iframe"><video src="' . $value['url'] . '" autoplay muted loop playsinline></video></div>';
		}

		return $value;
	}

	public static function set_login_page_styles()
	{
		wp_enqueue_style('custom-login', get_template_directory_uri() . '/dist/login-page.min.css');

		$style = '';
		$logo = get_field('admin_logo', 'options');
		$background_color = get_field('background_color', 'options');
		$background_image = get_field('background_image', 'options');
		$background_image_position = get_field('background_image_position', 'options');
		$background_size = get_field('background_size', 'options');
		$bodyLoginBackgroundString = 'background: ';

		if (!empty($logo)) {
			$width = ((int) $logo['width'] > 320) ? 'auto' : $logo['width'] . 'px';
			$style .= '#login h1 a,
					.login h1 a {
						background-image: url(' . $logo['url'] . ');
						width: ' . $width . ';
						background-size: contain;
					}';
		}

		$bodyLoginBackgroundString .= $background_color ?? '';
		$bodyLoginBackgroundString .= $background_image ? " url({$background_image}) no-repeat" : '';
		$bodyLoginBackgroundString .= $background_image_position ? " {$background_image_position}" : '';
		$bodyLoginBackgroundString .= $background_size ? " {$background_size}" : '';
		$bodyLoginBackgroundString .= ';';

		echo '<style>' . $style . ' body.login {' . $bodyLoginBackgroundString . '}</style>';
	}

	//
	// Pagination (Alter as needed)
	//
	public static function pagination_bar($query, $args_array = null)
	{
		$total_pages = $query->max_num_pages;
		$big = 999999999; // need an unlikely integer

		if ($total_pages > 1) {
			$paginate = paginate_links([
				'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
				'total' => $query->max_num_pages,
				'current' => max(1, get_query_var('paged')),
				'format' => '?paged=%#%',
				'show_all' => false,
				'type' => 'plain',
				'end_size' => 2,
				'mid_size' => 4,
				'prev_next' => true,
				'prev_text' => sprintf('<i></i> %1$s', __('<', 'text-domain')),
				'next_text' => sprintf('%1$s <i></i>', __('>', 'text-domain')),
				'add_args' => $args_array, //add query string array( 'category' => $_GET['cat'] ) OR false
				'add_fragment' => '',
			]);
		}

		return $paginate;
	}

	public static function parse_custom_block(array $block, array|bool $blockFields)
	{
		$b = new stdClass();

		$b->title = $block['title'];
		$b->name = $block['name'];
		$b->id = $blockFields['block_id'] ? str_replace(' ', '-', strtolower($blockFields['block_id'])) : $block['name'] . '-' . $block['id'];
		$b->classes = array_filter([...explode(' ', 'pxblock pxblock--' . str_replace('acf/', '', $block['name'])), $block['className'] ?? '', !empty($block['align']) ? ' align' . $block['align'] : '', isset($blockFields['padding']) && $blockFields['padding'] === 'padding--none' ? '!py-0' : '']);
		$b->classesString = implode(' ', $b->classes);

		return $b;
	}
}
