<?php

class WYSIWYG
{
	public static function add_tinymce_editor_styles()
	{
		add_editor_style('dist/app.css');
		add_editor_style('dist/blocks.css');
	}

	public static function modify_acf_wysiwyg_toolbars($toolbars)
	{
		$fullToolbar = [
			'formatselect',
			'styleselect',
			'removeformat',
			'|',
			'bold',
			'italic',
			'blockquote',
			'hr',
			'|',
			'numlist',
			'bullist',
			'|',
			'link',
			'unlink',
			'|',
			'alignleft',
			'aligncenter',
			'alignright'
		];

		$basicToolbar = [
			'bold',
			'italic',
			'link',
			'unlink',
			'forecolor',
			'removeformat'
		];

		unset($toolbars['Full'], $toolbars['Basic']);

		$toolbars['Full'] = [];
		$toolbars['Full'][1] = $fullToolbar;

		$toolbars['Basic'] = [];
		$toolbars['Basic'][1] = $basicToolbar;

		return $toolbars;
	}

	public static function modify_tiny_mce_format_options($initArray)
	{
		$styleFormats = [];
		$header_formats = [];

		for ($i = 1; $i < 7; $i++) {
			$header_formats[] = [
				'title' => 'Header' . $i,
				'selector' => 'h1, h2, h3, h4, h5, p, a, li, blockquote',
				'inline' => 'span',
				'classes' => 'h' . $i
			];
		}

		$text_colors = [
			[
				'title' => 'White',
				'selector' => 'span, p, h1, h2, h3, h4, h5, a, ul, li, blockquote',
				'inline' => 'span',
				'classes' => 'text-white',
			],
			[
				'title' => 'Blue',
				'selector' => 'span, p, h1, h2, h3, h4, h5, a, ul, li, blockquote',
				'inline' => 'span',
				'classes' => 'text-base-blue',
			],
			[
				'title' => 'Red',
				'selector' => 'span, p, h1, h2, h3, h4, h5, a, ul, li, blockquote',
				'inline' => 'span',
				'classes' => 'text-base-red',
			]
		];

		$styleFormats = array_merge($styleFormats, [
			[
				'title' => 'Header Formats',
				'items' => $header_formats
			],
			[
				'title' => 'Text Color',
				'items' => $text_colors
			],
			[
				'title' => 'Layout',
				'items' => [
					[
						'title' => 'Margin top (small)',
						'classes' => 'mt-4',
						'selector' => 'span, p, h1, h2, h3, h4, h5, a, ul, li, blockquote',
					],
					[
						'title' => 'Margin top (medium)',
						'classes' => 'mt-8',
						'selector' => 'span, p, h1, h2, h3, h4, h5, a, ul, li, blockquote',
					],
					[
						'title' => 'Margin top (large)',
						'classes' => 'mt-12',
						'selector' => 'span, p, h1, h2, h3, h4, h5, a, ul, li, blockquote',
					]
				]
			],
			[
				'title' => 'Button',
				'inline' => 'a',
				'classes' => 'btn',
				'selector' => 'a'
			],
			[
				'title' => 'Button (red)',
				'inline' => 'a',
				'classes' => 'btn bg-base-red',
				'selector' => 'a'
			],
			[
				'title' => 'Button (video)',
				'inline' => 'a',
				'classes' => 'btn btn--video',
				'selector' => 'a'
			],
			[
				'title' => 'Arrow link',
				'inline' => 'a',
				'classes' => 'arrow-link',
				'selector' => 'a'
			],
			[
				'title' => 'Indented tag',
				'block' => 'p',
				'classes' => 'indented-tag',
				'selector' => 'p'
			],
			[
				'title' => 'Paragraph - large (18px)',
				'classes' => 'text-lg',
				'selector' => 'p'
			],
			[
				'title' => 'Paragraph - xl (20px)',
				'classes' => 'text-xl leading-[1.8]',
				'selector' => 'p'
			],
			[
				'title' => 'Paragraph - xxl (30px)',
				'classes' => 'text-3xl leading-[1.8]',
				'selector' => 'p'
			]
		]);

		// $custom_colors = '
		// "160f46", "Dark Blue",
		// "0e0fed", "Royal Blue",
		// "00a9e0", "Cyan",
		// "c529bb", "Magenta",
		// ';

		// $initArray['block_formats'] = 'Paragraph=p; Header 1=h1; Header 2=h2; Header 3=h3; Header 4=h4; Header 5=h5';
		$initArray['body_class'] = 'wysiwyg';
		// $initArray['style_formats_autohide'] = true;
		$initArray['relative_urls'] = true;
		// $initArray['textcolor_map'] = '[' . $custom_colors . ']';
		// $initArray['textcolor_rows'] = 1;
		$initArray['style_formats'] = json_encode($styleFormats);

		return $initArray;
	}
}
