<?php

require_once get_template_directory() . '/classes/CustomBlocks.php';

class PXBlocks
{
	public function __construct(array $customBlockCategories)
	{
		if (!function_exists('acf_register_block_type')) {
			return;
		}
	
		add_action('acf/init', function() {
			foreach (PX_CUSTOM_BLOCKS as $block) {
				acf_register_block_type($block);
			}
		});
		
		add_filter('block_categories', fn ($categories, $post) => [...$categories, ...$customBlockCategories], 10, 2);
		add_filter('allowed_block_types_all', [$this, 'allowed_block_types']);
	}


	/**
	 * Restrict the default available block types
	 * cf. https://wordpress.stackexchange.com/a/326963
	 *
	 * @param Array $allowedBlocks
	 * @return void
	 */
	public function allowed_block_types($allowedBlocks)
	{
		return [
			'core/block',
			'gravityforms/form',
			...array_map(fn ($b) => 'acf/' . $b['name'], PX_CUSTOM_BLOCKS)
		];
	}
}