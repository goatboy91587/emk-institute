<?php

require_once __DIR__ . '/PXBlocks.php';
require_once __DIR__ . '/PXUtils.php';
require_once __DIR__ . '/WYSIWYG.php';
require_once __DIR__ . '/RESTLogic.php';
require_once __DIR__ . '/MenuWalker.php';
require_once __DIR__ . '/SocialMenuWalker.php';
require_once __DIR__ . '/PXEditor.php';

class PXGutenbergTheme
{
	protected $pxBlocks;
	protected $pxEditor;

	public function __construct()
	{
		$this->pxBlocks = new PXBlocks([
			[
				'slug' => 'custom-blocks',
				'title' => __('Custom Blocks', 'custom-blocks')
			]
		]);
		$this->register_actions();
		$this->register_shortcodes();
		$this->register_filters();
		$this->pxEditor = new PXEDITOR();
	}

	public function register_actions()
	{
		add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
		add_action('enqueue_block_editor_assets', [$this, 'enqueue_assets']);
		add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_assets']);
		add_action('acf/include_field_types', [$this, 'include_custom_field_types']);
		add_action('wp_head', [$this, 'modify_head']);
		add_action('init', [$this, 'init_hooks']);
		add_action('acf/init', [$this, 'add_option_pages']);
		add_action('login_enqueue_scripts', [$this, 'login_page_hooks']);
		add_action('rest_api_init', [$this, 'rest_init_hooks']);
		add_action('admin_init', [$this, 'admin_init_hooks']);
		add_action('admin_init', [$this, 'add_tinymce_editor_styles']);
		add_action('after_setup_theme', [$this, 'add_theme_support_hook']);
		add_action('show_user_profile', ['USERS', 'extra_user_profile_fields']);
		add_action('edit_user_profile', ['USERS', 'extra_user_profile_fields']);
		add_action('personal_options_update', ['USERS', 'save_extra_user_profile_fields']);
		add_action('edit_user_profile_update', ['USERS', 'save_extra_user_profile_fields']);
	}

	public function register_filters()
	{
		add_filter('acf/format_value/type=image', ['PXUtils', 'format_acf_images'], 100, 3);
		add_filter('acf/format_value/type=file', ['PXUtils', 'format_acf_videos'], 100, 3);
		add_filter('acf/format_value/type=gallery', ['PXUtils', 'format_acf_gallery_images'], 100, 3);
		add_filter('acf/fields/wysiwyg/toolbars', ['WYSIWYG', 'modify_acf_wysiwyg_toolbars'], 10, 1);
		add_filter('tiny_mce_before_init', ['WYSIWYG', 'modify_tiny_mce_format_options'], 10, 1);
		add_filter('the_content', [$this, 'iframe_wrapper'], 10, 1);
		add_filter('pre_get_posts', ['PXUtils', 'exclude_noindexed_pages_from_search'], 10, 1);
		add_filter('rest_endpoints', [$this, 'disable_rest_endpoints'], 10, 1);

		/**
		 * Add automatic image sizes
		 */
		if (function_exists('add_image_size')) {
			add_image_size('html_small', 200, 200, false);
			add_image_size('html_medium', 768, 768, true);
			add_image_size('html_large', 1400, 1400, true);
		}

		add_filter('upload_mimes', function ($mimeTypes) {
			$mimeTypes['svg'] = 'image/svg+xml';
			return $mimeTypes;
		});
	}

	public static function add_tinymce_editor_styles()
	{
		add_editor_style('dist/app.css');
	}

	public function add_theme_support_hook()
	{
		add_theme_support('menus');
		add_theme_support('editor-styles');
	}

	public function register_shortcodes()
	{
		add_shortcode('year', fn () => date('Y'));
	}

	public function enqueue_assets()
	{
		wp_dequeue_style('wp-block-library');
		wp_dequeue_style('wp-block-library-theme');

		if (!is_admin()) {
			wp_enqueue_style('main', get_template_directory_uri() . '/dist/app.css', [], filemtime(get_template_directory() . '/dist/app.css'));
			wp_enqueue_style('blocks', get_template_directory_uri() . '/dist/blocks.css', [], filemtime(get_template_directory() . '/dist/blocks.css'));
		}

		wp_enqueue_script('manifest', get_template_directory_uri() . '/dist/manifest.js', [], filemtime(get_template_directory() . '/dist/manifest.js'), true);
		wp_enqueue_script('vendor', get_template_directory_uri() . '/dist/vendor.js', ['manifest'], filemtime(get_template_directory() . '/dist/vendor.js'), true);
		wp_enqueue_script('main', get_template_directory_uri() . '/dist/app.js', ['vendor'], filemtime(get_template_directory() . '/dist/app.js'), true);
	}

	public function enqueue_admin_assets()
	{
	}

	public function admin_init_hooks()
	{
		WYSIWYG::add_tinymce_editor_styles();
	}

	public function include_custom_field_types()
	{
		if (!is_dir(get_template_directory() . '/custom-field-types')) {
			return;
		}

		$customFieldTypes = array_values(array_diff(scandir(get_template_directory() . '/custom-field-types'), ['.', '..']));

		foreach ($customFieldTypes as $fieldType) {
			$fieldFile = get_template_directory() . '/custom-field-types/' . $fieldType . '/' . $fieldType . '.php';

			if (file_exists($fieldFile)) {
				include_once $fieldFile;
			}
		}
	}

	public function modify_head()
	{
		PXUtils::add_google_analytics();
	}

	public function init_hooks()
	{
		(new CustomPostTypes())->register();
		$this->register_menu_areas();
	}

	public function login_page_hooks()
	{
		PXUtils::set_login_page_styles();
	}

	public function rest_init_hooks()
	{
		$R = new RESTLogic();
		$R->register_fields();
		$R->register_routes();
	}

	public function add_option_pages()
	{
		if (function_exists('acf_add_options_page')) {
			acf_add_options_page([
				'page_title' => 'Theme General Settings',
				'menu_title' => 'Theme Settings',
				'menu_slug' => 'theme-general-settings',
				'capability' => 'edit_posts',
				'redirect' => false
			]);

			acf_add_options_page([
				'page_title' => 'Modals',
				'menu_title' => 'Modals',
				'menu_slug' => 'theme-modals',
				'capability' => 'edit_posts',
				'icon_url' => 'dashicons-editor-expand',
				'redirect' => false
			]);
		}
	}

	public function register_menu_areas()
	{
		register_nav_menus(
			[
				'main-menu' => __('Main Menu'),
				'social-menu' => __('Social Menu'),
				'legal-menu' => __('Legal Menu'),
				'footer-links' => __('Footer Links'),
			]
		);

		// Important for calling proper menus
		global $theme_locations;
		$theme_locations = get_nav_menu_locations();
	}

	public function iframe_wrapper($content)
	{
		// match any iframes
		preg_match_all('~<iframe.*</iframe>|<embed.*</embed>~', $content, $matches);

		foreach ($matches[0] as $match) {
			// wrap matched iframe with div
			$wrappedframe = '<div class="iframe">' . $match . '</div>';

			//replace original iframe with new in content
			$content = str_replace($match, $wrappedframe, $content);
		}

		return $content;
	}

	public function disable_rest_endpoints($endpoints)
	{
		$endpointsBlacklist = [
			'/wp/v2/users',
			'/wp/v2/users/(?P<id>[\d]+)',
			'/oembed/1.0/embed',
		];

		foreach ($endpointsBlacklist as $endpoint) {
			if (isset($endpoints[$endpoint])) {
				unset($endpoints[$endpoint]);
			}
		}

		return $endpoints;
	}
}
