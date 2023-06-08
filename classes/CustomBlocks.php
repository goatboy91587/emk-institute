<?php

define('PX_CUSTOM_BLOCKS', [
	/* PLOP_INJECT_EXPORT */
	array(
		'name'            => 'image-overlap',
		'title'           => __('Image Overlap'),
		'description'     => __('image overlap block (custom).'),
		'render_template' => get_template_directory() . '/blocks/image-overlap/image-overlap.php',
		'category'        => 'custom-blocks',
		'icon'            => 'format-image',
		'keywords'        => array('image-overlap', 'display'),
		'supports'        => array('align' => false)
	),

	array(
		'name'            => 'popouttext',
		'title'           => __('Popouttext'),
		'description'     => __('popouttext block (custom).'),
		'render_template' => get_template_directory() . '/blocks/popouttext/popouttext.php',
		'category'        => 'custom-blocks',
		'icon'            => 'format-image',
		'keywords'        => array('popouttext', 'display'),
		'supports'        => array('align' => false)
	),

	array(
		'name'            => 'contact',
		'title'           => __('Contact'),
		'description'     => __('contact block (custom).'),
		'render_template' => get_template_directory() . '/blocks/contact/contact.php',
		'category'        => 'custom-blocks',
		'icon'            => 'format-image',
		'keywords'        => array('contact', 'display'),
		'supports'        => array('align' => false)
	),

	array(
		'name'            => 'debates',
		'title'           => __('Debates'),
		'description'     => __('debates block (custom).'),
		'render_template' => get_template_directory() . '/blocks/debates/debates.php',
		'category'        => 'custom-blocks',
		'icon'            => 'format-image',
		'keywords'        => array('debates', 'display'),
		'supports'        => array('align' => false)
	),

	array(
		'name'            => 'board-of-directors',
		'title'           => __('Board of Directors'),
		'description'     => __('board-of-directors block (custom).'),
		'render_template' => get_template_directory() . '/blocks/board-of-directors/board-of-directors.php',
		'category'        => 'custom-blocks',
		'icon'            => 'format-image',
		'keywords'        => array('board-of-directors', 'display'),
		'supports'        => array('align' => false)
	),

	array(
		'name'            => 'columns',
		'title'           => __('Columns'),
		'description'     => __('columns block (custom).'),
		'render_template' => get_template_directory() . '/blocks/columns/columns.php',
		'category'        => 'custom-blocks',
		'icon'            => 'format-image',
		'keywords'        => array('columns', 'display'),
		'supports'        => array('align' => false)
	),

	array(
		'name'            => 'slider',
		'title'           => __('Slider'),
		'description'     => __('slider block (custom).'),
		'render_template' => get_template_directory() . '/blocks/slider/slider.php',
		'category'        => 'custom-blocks',
		'icon'            => 'format-image',
		'keywords'        => array('slider', 'display'),
		'supports'        => array('align' => false),
		'example' =>
			array (
				'attributes' =>
				array (
				'mode' => 'preview',
				'data' =>
				array (
					'content' => '<h2 style="text-align: center;">Slider</h2>
			<p style="text-align: center;">Here is a sample slider block.</p>
			',
					'slides' =>
					array (
					1 =>
					array (
						'content' => '<h2 style="text-align: center;">Slide Two Content</h2>
			',
						'image' =>
						array (
						'ID' => 203,
						'id' => 203,
						'title' => 'alexandra-zelena-zWQACFHm0og-unsplash',
						'filename' => 'alexandra-zelena-zWQACFHm0og-unsplash-scaled.jpg',
						'filesize' => 728805,
						'url' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-scaled.jpg',
						'link' => 'https://testing.test/sample-blocks/alexandra-zelena-zwqacfhm0og-unsplash/',
						'alt' => '',
						'author' => '1',
						'description' => '',
						'caption' => '',
						'name' => 'alexandra-zelena-zwqacfhm0og-unsplash',
						'status' => 'inherit',
						'uploaded_to' => 108,
						'date' => '2023-02-08 17:56:06',
						'modified' => '2023-02-08 17:56:06',
						'menu_order' => 0,
						'mime_type' => 'image/jpeg',
						'type' => 'image',
						'subtype' => 'jpeg',
						'icon' => 'https://testing.test/wp-includes/images/media/default.png',
						'width' => 2560,
						'height' => 1707,
						'sizes' =>
						array (
							'thumbnail' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-150x150.jpg',
							'thumbnail-width' => 150,
							'thumbnail-height' => 150,
							'medium' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-300x200.jpg',
							'medium-width' => 300,
							'medium-height' => 200,
							'medium_large' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-768x512.jpg',
							'medium_large-width' => 768,
							'medium_large-height' => 512,
							'large' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1024x683.jpg',
							'large-width' => 1024,
							'large-height' => 683,
							'1536x1536' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1536x1024.jpg',
							'1536x1536-width' => 1536,
							'1536x1536-height' => 1024,
							'2048x2048' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-2048x1365.jpg',
							'2048x2048-width' => 2048,
							'2048x2048-height' => 1365,
							'html_small' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-200x133.jpg',
							'html_small-width' => 200,
							'html_small-height' => 133,
							'html_medium' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-768x768.jpg',
							'html_medium-width' => 768,
							'html_medium-height' => 768,
							'html_large' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1400x1400.jpg',
							'html_large-width' => 1400,
							'html_large-height' => 1400,
						),
						'html_small' => '<img width="2560" height="1707" src="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-scaled.jpg" class="attachment-small size-small" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-scaled.jpg 2560w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-300x200.jpg 300w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1024x683.jpg 1024w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-768x512.jpg 768w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1536x1024.jpg 1536w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-2048x1365.jpg 2048w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-200x133.jpg 200w" sizes="(max-width: 2560px) 100vw, 2560px" />',
						'html_medium' => '<img width="300" height="200" src="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-300x200.jpg" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-300x200.jpg 300w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1024x683.jpg 1024w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-768x512.jpg 768w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1536x1024.jpg 1536w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-2048x1365.jpg 2048w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-200x133.jpg 200w" sizes="(max-width: 300px) 100vw, 300px" />',
						'html_large' => '<img width="1024" height="683" src="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1024x683.jpg" class="attachment-large size-large" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1024x683.jpg 1024w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-300x200.jpg 300w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-768x512.jpg 768w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1536x1024.jpg 1536w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-2048x1365.jpg 2048w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-200x133.jpg 200w" sizes="(max-width: 1024px) 100vw, 1024px" />',
						'html' => '<img width="2560" height="1707" src="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-scaled.jpg" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-scaled.jpg 2560w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-300x200.jpg 300w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1024x683.jpg 1024w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-768x512.jpg 768w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1536x1024.jpg 1536w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-2048x1365.jpg 2048w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-200x133.jpg 200w" sizes="(max-width: 2560px) 100vw, 2560px" />',
						),
					),

					),
					'background_color' => 'bg--transparent',
					'padding' => 'small',
					'block_settings' =>
					array (
					'background_color' => 'bg--transparent',
					'padding' => 'small',
					),
					'block_id' => '',
				),
				),
			),
	),

	array(
		'name'            => 'text-and-media',
		'title'           => __('Text and Media'),
		'description'     => __('text-and-media block (custom).'),
		'render_template' => get_template_directory() . '/blocks/text-and-media/text-and-media.php',
		'category'        => 'custom-blocks',
		'icon'            => 'format-image',
		'keywords'        => array('text-and-media', 'display'),
		'supports'        => array('align' => false),
		'example' =>
			array (
			'attributes' =>
			array (
				'mode' => 'preview',
				'data' =>
				array (
				'text' => '<h2 class="color-white" style="text-align: center;">Media and Text</h2>
		',
				'image' =>
				array (
					'ID' => 210,
					'id' => 210,
					'title' => 'takashi-miyazaki-BFQlxG_tsg4-unsplash',
					'filename' => 'takashi-miyazaki-BFQlxG_tsg4-unsplash-scaled.jpg',
					'filesize' => 271850,
					'url' => 'https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-scaled.jpg',
					'link' => 'https://testing.test/sample-blocks/takashi-miyazaki-bfqlxg_tsg4-unsplash/',
					'alt' => '',
					'author' => '1',
					'description' => '',
					'caption' => '',
					'name' => 'takashi-miyazaki-bfqlxg_tsg4-unsplash',
					'status' => 'inherit',
					'uploaded_to' => 108,
					'date' => '2023-02-08 20:02:08',
					'modified' => '2023-02-08 20:02:08',
					'menu_order' => 0,
					'mime_type' => 'image/jpeg',
					'type' => 'image',
					'subtype' => 'jpeg',
					'icon' => 'https://testing.test/wp-includes/images/media/default.png',
					'width' => 2560,
					'height' => 1600,
					'sizes' =>
					array (
					'thumbnail' => 'https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-150x150.jpg',
					'thumbnail-width' => 150,
					'thumbnail-height' => 150,
					'medium' => 'https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-300x188.jpg',
					'medium-width' => 300,
					'medium-height' => 188,
					'medium_large' => 'https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-768x480.jpg',
					'medium_large-width' => 768,
					'medium_large-height' => 480,
					'large' => 'https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-1024x640.jpg',
					'large-width' => 1024,
					'large-height' => 640,
					'1536x1536' => 'https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-1536x960.jpg',
					'1536x1536-width' => 1536,
					'1536x1536-height' => 960,
					'2048x2048' => 'https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-2048x1280.jpg',
					'2048x2048-width' => 2048,
					'2048x2048-height' => 1280,
					'html_small' => 'https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-200x125.jpg',
					'html_small-width' => 200,
					'html_small-height' => 125,
					'html_medium' => 'https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-768x768.jpg',
					'html_medium-width' => 768,
					'html_medium-height' => 768,
					'html_large' => 'https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-1400x1400.jpg',
					'html_large-width' => 1400,
					'html_large-height' => 1400,
					),
					'html_small' => '<img width="2560" height="1600" src="https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-scaled.jpg" class="attachment-small size-small" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-scaled.jpg 2560w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-300x188.jpg 300w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-1024x640.jpg 1024w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-768x480.jpg 768w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-1536x960.jpg 1536w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-2048x1280.jpg 2048w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-200x125.jpg 200w" sizes="(max-width: 2560px) 100vw, 2560px" />',
					'html_medium' => '<img width="300" height="188" src="https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-300x188.jpg" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-300x188.jpg 300w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-1024x640.jpg 1024w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-768x480.jpg 768w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-1536x960.jpg 1536w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-2048x1280.jpg 2048w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-200x125.jpg 200w" sizes="(max-width: 300px) 100vw, 300px" />',
					'html_large' => '<img width="1024" height="640" src="https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-1024x640.jpg" class="attachment-large size-large" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-1024x640.jpg 1024w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-300x188.jpg 300w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-768x480.jpg 768w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-1536x960.jpg 1536w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-2048x1280.jpg 2048w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-200x125.jpg 200w" sizes="(max-width: 1024px) 100vw, 1024px" />',
					'html' => '<img width="2560" height="1600" src="https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-scaled.jpg" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-scaled.jpg 2560w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-300x188.jpg 300w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-1024x640.jpg 1024w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-768x480.jpg 768w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-1536x960.jpg 1536w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-2048x1280.jpg 2048w, https://testing.test/wp-content/uploads/2023/02/takashi-miyazaki-BFQlxG_tsg4-unsplash-200x125.jpg 200w" sizes="(max-width: 2560px) 100vw, 2560px" />',
				),
				'media_type' => 'image',
				'layout' => 'text-media',
				'background_color' => 'bg--black',
				'padding' => 'small',
				'block_settings' =>
				array (
					'background_color' => 'bg--black',
					'padding' => 'small',
				),
				'block_id' => '',
				),
			),
			),
	),

	array(
		'name'            => 'media',
		'title'           => __('Media'),
		'description'     => __('media block (custom).'),
		'render_template' => get_template_directory() . '/blocks/media/media.php',
		'category'        => 'custom-blocks',
		'icon'            => 'format-image',
		'keywords'        => array('media', 'display'),
		'supports'        => array('align' => false),
		'example' =>
			array (
				'attributes' =>
				array (
				'mode' => 'preview',
				'data' =>
				array (
					'image' =>
					array (
					'ID' => 203,
					'id' => 203,
					'title' => 'alexandra-zelena-zWQACFHm0og-unsplash',
					'filename' => 'alexandra-zelena-zWQACFHm0og-unsplash-scaled.jpg',
					'filesize' => 728805,
					'url' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-scaled.jpg',
					'link' => 'https://testing.test/sample-blocks/alexandra-zelena-zwqacfhm0og-unsplash/',
					'alt' => '',
					'author' => '1',
					'description' => '',
					'caption' => '',
					'name' => 'alexandra-zelena-zwqacfhm0og-unsplash',
					'status' => 'inherit',
					'uploaded_to' => 108,
					'date' => '2023-02-08 17:56:06',
					'modified' => '2023-02-08 17:56:06',
					'menu_order' => 0,
					'mime_type' => 'image/jpeg',
					'type' => 'image',
					'subtype' => 'jpeg',
					'icon' => 'https://testing.test/wp-includes/images/media/default.png',
					'width' => 2560,
					'height' => 1707,
					'sizes' =>
					array (
						'thumbnail' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-150x150.jpg',
						'thumbnail-width' => 150,
						'thumbnail-height' => 150,
						'medium' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-300x200.jpg',
						'medium-width' => 300,
						'medium-height' => 200,
						'medium_large' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-768x512.jpg',
						'medium_large-width' => 768,
						'medium_large-height' => 512,
						'large' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1024x683.jpg',
						'large-width' => 1024,
						'large-height' => 683,
						'1536x1536' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1536x1024.jpg',
						'1536x1536-width' => 1536,
						'1536x1536-height' => 1024,
						'2048x2048' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-2048x1365.jpg',
						'2048x2048-width' => 2048,
						'2048x2048-height' => 1365,
						'html_small' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-200x133.jpg',
						'html_small-width' => 200,
						'html_small-height' => 133,
						'html_medium' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-768x768.jpg',
						'html_medium-width' => 768,
						'html_medium-height' => 768,
						'html_large' => 'https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1400x1400.jpg',
						'html_large-width' => 1400,
						'html_large-height' => 1400,
					),
					'html_small' => '<img width="2560" height="1707" src="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-scaled.jpg" class="attachment-small size-small" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-scaled.jpg 2560w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-300x200.jpg 300w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1024x683.jpg 1024w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-768x512.jpg 768w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1536x1024.jpg 1536w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-2048x1365.jpg 2048w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-200x133.jpg 200w" sizes="(max-width: 2560px) 100vw, 2560px" />',
					'html_medium' => '<img width="300" height="200" src="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-300x200.jpg" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-300x200.jpg 300w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1024x683.jpg 1024w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-768x512.jpg 768w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1536x1024.jpg 1536w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-2048x1365.jpg 2048w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-200x133.jpg 200w" sizes="(max-width: 300px) 100vw, 300px" />',
					'html_large' => '<img width="1024" height="683" src="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1024x683.jpg" class="attachment-large size-large" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1024x683.jpg 1024w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-300x200.jpg 300w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-768x512.jpg 768w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1536x1024.jpg 1536w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-2048x1365.jpg 2048w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-200x133.jpg 200w" sizes="(max-width: 1024px) 100vw, 1024px" />',
					'html' => '<img width="2560" height="1707" src="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-scaled.jpg" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-scaled.jpg 2560w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-300x200.jpg 300w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1024x683.jpg 1024w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-768x512.jpg 768w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-1536x1024.jpg 1536w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-2048x1365.jpg 2048w, https://testing.test/wp-content/uploads/2023/02/alexandra-zelena-zWQACFHm0og-unsplash-200x133.jpg 200w" sizes="(max-width: 2560px) 100vw, 2560px" />',
					),
					'media_type' => 'image',
					'background_color' => 'bg--black',
					'padding' => 'medium',
					'block_settings' =>
					array (
					'background_color' => 'bg--black',
					'padding' => 'medium',
					),
					'block_id' => '',
				),
				),
			),
	),

	array(
		'name'            => 'form',
		'title'           => __('Form'),
		'description'     => __('form block (custom).'),
		'render_template' => get_template_directory() . '/blocks/form/form.php',
		'category'        => 'custom-blocks',
		'icon'            => 'format-image',
		'keywords'        => array('form', 'display'),
		'supports'        => array('align' => false),
		'example' =>
  array (
    'attributes' =>
    array (
      'mode' => 'preview',
      'data' =>
      array (
        'content' => '<h2 style="text-align: center;">Get in touch with us!</h2>
<p style="text-align: center;">Lets make an awesome website together. Use this form and we will get in touch with you shortly.</p>
',
        'gravity_forms_shortcode' => '<script type="text/javascript"></script>
                <div class="gf_browser_chrome gform_wrapper gravity-theme" id="gform_wrapper_1" >
                        <div class="gform_heading">
                            <h2 class="gform_title">Contact Form</h2>
                            <span class="gform_description"></span>
                        </div><form method="post" enctype="multipart/form-data"  id="gform_1" action="/sample-blocks/" novalidate>
                        <div class="gform_body gform-body"><div id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below"><fieldset id="field_1_1"  class="gfield field_sublabel_below field_description_below gfield_visibility_visible"  data-js-reload="field_1_1"><legend class="gfield_label gfield_label_before_complex"  >Name</legend><div class="ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name" id="input_1_1">

                            <span id="input_1_1_3_container" class="name_first" >
                                                    <input type="text" name="input_1.3" id="input_1_1_3" value=""   aria-required="false"     />
                                                    <label for="input_1_1_3" >First</label>
                                                </span>

                            <span id="input_1_1_6_container" class="name_last" >
                                                    <input type="text" name="input_1.6" id="input_1_1_6" value=""   aria-required="false"     />
                                                    <label for="input_1_1_6" >Last</label>
                                                </span>

                        </div></fieldset><div id="field_1_3"  class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_visible"  data-js-reload="field_1_3"><label class="field_label for="input_1_3" >Email</label><div class="ginput_container ginput_container_email">
                            <input name="input_3" id="input_1_3" type="email" value="" class="large"    aria-invalid="false"  />
                        </div></div><div id="field_1_4"  class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_visible"  data-js-reload="field_1_4"><label class="gfield_label" for="input_1_4" >Message</label><div class="ginput_container ginput_container_textarea"><textarea name="input_4" id="input_1_4" class="textarea large"      aria-invalid="false"   rows="10" cols="50"></textarea></div></div></div></div>
        <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_1" class="gform_button button" value="Submit"  onclick="if(window["gf_submitting_1"]){return false;}  if( !jQuery("#gform_1")[0].checkValidity || jQuery("#gform_1")[0].checkValidity()){window["gf_submitting_1"]=true;}  " onkeypress="if( event.keyCode == 13 ){ if(window["gf_submitting_1"]){return false;} if( !jQuery("#gform_1")[0].checkValidity || jQuery("#gform_1")[0].checkValidity()){window["gf_submitting_1"]=true;}  jQuery("#gform_1").trigger("submit",[true]); }" />
            <input type="hidden" class="gform_hidden" name="is_submit_1" value="1" />
            <input type="hidden" class="gform_hidden" name="gform_submit" value="1" />

            <input type="hidden" class="gform_hidden" name="gform_unique_id" value="" />
            <input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsIjc1MjE2MDIwZThkMDhkMTNmODFmNzMzOTE4N2Q5ODE3Il0=" />
            <input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0" />
            <input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1" />
            <input type="hidden" name="gform_field_values" value="" />

        </div>
                        </form>
                        </div>',
        'form_source' => 'gravity',
        'background_color' => 'bg--transparent',
        'padding' => 'small',
        'block_settings' =>
        array (
          'background_color' => 'bg--transparent',
          'padding' => 'small',
        ),
        'block_id' => '',
      ),
    ),
  ),
	),

	array(
		'name'            => 'accordion',
		'title'           => __('Accordion'),
		'description'     => __('accordion block (custom).'),
		'render_template' => get_template_directory() . '/blocks/accordion/accordion.php',
		'category'        => 'custom-blocks',
		'icon'            => 'format-image',
		'keywords'        => array('accordion', 'display'),
		'supports'        => array('align' => false),
		'example' =>
				array (
					'attributes' =>
					array (
					'mode' => 'preview',
					'data' =>
					array (
						'content' => '<h2 style="text-align: center;">Sample Accordion.</h2>
				<p style="text-align: center;">Below are sample drawers to illustrate the use of a simple text accordion block.</p>
				',
						'drawers' =>
						array (
						0 =>
						array (
							'title' => 'Step One',
							'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
				',
						),
						1 =>
						array (
							'title' => 'Step Two',
							'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
				',
						),
						),
						'background_color' => 'bg--transparent',
						'padding' => 'small',
						'block_settings' =>
						array (
						'background_color' => 'bg--transparent',
						'padding' => 'small',
						),
						'block_id' => '',
					),
					),
				),

	),


	[
		'name'            => 'banner',
		'title'           => __('Banner'),
		'description'     => __('A custom banner block.'),
		'render_template' => get_template_directory() . '/blocks/banner/banner.php',
		'category'        => 'custom-blocks',
		'icon'            => 'format-image',
		'keywords'        => ['banner', 'display'],
		'supports' => [
			'align' => false
		],
		'example' =>
			array (
				'attributes' =>
				array (
				'mode' => 'preview',
				'data' =>
				array (
					'content' => '<h1 style="text-align: center;">Here is an awesome banner</h1>
			<h3 style="text-align: center;">Learn more about how you can also have an awesome banner.</h3>
			',
					'background_image' =>
					array (
					'ID' => 147,
					'id' => 147,
					'title' => 'remi-devaux-A94d3FxWCco-unsplash',
					'filename' => 'remi-devaux-A94d3FxWCco-unsplash-scaled.jpg',
					'filesize' => 455287,
					'url' => 'https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-scaled.jpg',
					'link' => 'https://testing.test/sample-blocks/remi-devaux-a94d3fxwcco-unsplash/',
					'alt' => '',
					'author' => '1',
					'description' => '',
					'caption' => '',
					'name' => 'remi-devaux-a94d3fxwcco-unsplash',
					'status' => 'inherit',
					'uploaded_to' => 108,
					'date' => '2023-02-07 21:00:56',
					'modified' => '2023-02-07 21:00:56',
					'menu_order' => 0,
					'mime_type' => 'image/jpeg',
					'type' => 'image',
					'subtype' => 'jpeg',
					'icon' => 'https://testing.test/wp-includes/images/media/default.png',
					'width' => 1708,
					'height' => 2560,
					'sizes' =>
					array (
						'thumbnail' => 'https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-150x150.jpg',
						'thumbnail-width' => 150,
						'thumbnail-height' => 150,
						'medium' => 'https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-200x300.jpg',
						'medium-width' => 200,
						'medium-height' => 300,
						'medium_large' => 'https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-768x1151.jpg',
						'medium_large-width' => 768,
						'medium_large-height' => 1151,
						'large' => 'https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-683x1024.jpg',
						'large-width' => 683,
						'large-height' => 1024,
						'1536x1536' => 'https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-1025x1536.jpg',
						'1536x1536-width' => 1025,
						'1536x1536-height' => 1536,
						'2048x2048' => 'https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-1366x2048.jpg',
						'2048x2048-width' => 1366,
						'2048x2048-height' => 2048,
						'html_small' => 'https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-133x200.jpg',
						'html_small-width' => 133,
						'html_small-height' => 200,
						'html_medium' => 'https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-768x768.jpg',
						'html_medium-width' => 768,
						'html_medium-height' => 768,
						'html_large' => 'https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-1400x1400.jpg',
						'html_large-width' => 1400,
						'html_large-height' => 1400,
					),
					'html_small' => '<img width="1708" height="2560" src="https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-scaled.jpg" class="attachment-small size-small" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-scaled.jpg 1708w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-200x300.jpg 200w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-683x1024.jpg 683w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-768x1151.jpg 768w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-1025x1536.jpg 1025w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-1366x2048.jpg 1366w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-133x200.jpg 133w" sizes="(max-width: 1708px) 100vw, 1708px" />',
					'html_medium' => '<img width="200" height="300" src="https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-200x300.jpg" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-200x300.jpg 200w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-683x1024.jpg 683w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-768x1151.jpg 768w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-1025x1536.jpg 1025w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-1366x2048.jpg 1366w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-133x200.jpg 133w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-scaled.jpg 1708w" sizes="(max-width: 200px) 100vw, 200px" />',
					'html_large' => '<img width="683" height="1024" src="https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-683x1024.jpg" class="attachment-large size-large" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-683x1024.jpg 683w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-200x300.jpg 200w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-768x1151.jpg 768w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-1025x1536.jpg 1025w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-1366x2048.jpg 1366w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-133x200.jpg 133w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-scaled.jpg 1708w" sizes="(max-width: 683px) 100vw, 683px" />',
					'html' => '<img width="1708" height="2560" src="https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-scaled.jpg" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-scaled.jpg 1708w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-200x300.jpg 200w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-683x1024.jpg 683w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-768x1151.jpg 768w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-1025x1536.jpg 1025w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-1366x2048.jpg 1366w, https://testing.test/wp-content/uploads/2023/02/remi-devaux-A94d3FxWCco-unsplash-133x200.jpg 133w" sizes="(max-width: 1708px) 100vw, 1708px" />',
					),
					'background_type' => 'image',
					'background_color' => 'bg--transparent',
					'padding' => 'medium',
					'block_settings' =>
					array (
					'background_color' => 'bg--transparent',
					'padding' => 'medium',
					),
					'block_id' => '',
				),
				),
			),
	],
	[
		'name'            => 'text',
		'title'           => __('Text'),
		'description'     => __('A custom text block.'),
		'render_template' => get_template_directory() . '/blocks/text/text.php',
		'category'        => 'custom-blocks',
		'icon'            => 'editor-textcolor',
		'keywords'        => ['text', 'editor', 'heading', 'paragraph', 'content'],
		'supports' => [
			'align' => false
		],
		'example' =>
		array (
		  'attributes' =>
		  array (
			'mode' => 'preview',
			'data' =>
			array (
			  'text_columns' =>
			  array (
				0 =>
				array (
				  'content' => '<h1 style="text-align: center;">Sample Text Column</h1>
	  <p style="text-align: center;">Here is a sample text block</p>
	  ',
				),

			  ),
			  'layout' => 'text-columns',
			  'background_color' => 'bg--white',
			  'padding' => 'small',
			  'block_settings' =>
			  array (
				'background_color' => 'bg--white',
				'padding' => 'small',
			  ),
			  'block_id' => '',
			),
		  ),
		),
	]
]);
