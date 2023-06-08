<?php

$blockFields = get_fields();
$customBlock = PXUtils::parse_custom_block($block, $blockFields);

if (is_array($blockFields)) {
	extract($blockFields);
}

$customBlock->classesString .= ' relative flex flex-col justify-center';
$customBlock->classesString .= isset($blockFields['sub-banner_content']) || isset($blockFields['sub-banner_logos']) ? ' mb-0 lg:pb-44' : '';
$customBlock->classesString .= isset($text_color) && $text_color === 'white' ? ' text-white' : '';
$customBlock->classesString .= isset($blockFields['sub-banner_logos']) ? ' mb-24' : '';
$customBlock->classesString .= ' ' . $blockFields['background_color'];

// if block field is empty, do preview window, extract data array
if (empty($blockFields)) {
	extract($block['data']);
} else {
	$data_example = [
		'example' => [
			'attributes' => [
				'mode' => 'preview',
				'data' => $blockFields
			]
		]
	];
}?>

<div id="<?= $customBlock->id ?>" class="<?= $customBlock->classesString ?>">
	<?php if (isset($background_image)) :?>
	<img class="object-cover object-center absolute w-full h-full z-0 top-0"
		src="<?= $background_image['sizes']['large'] ?? $background_image['url'] ?>"
		alt="<?= $background_image['caption'] ?? $background_image['description'] ?>">
	<div class="object-cover object-center absolute w-full h-full z-0 top-0 bg-gradient-to-b from-black/5 to-black/40"></div>
	<?php endif; ?>

	<?= isset($content) ? '<div class="container relative wysiwyg"><div>' . $content . '</div></div>' : '' ?>



	<?php if (isset($blockFields['sub-banner_logos'])) :?>
	<div class="container absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2">
		<ul class="bg-white p-8 shadow-lg flex items-center justify-center space-x-6">
			<?php foreach ($blockFields['sub-banner_logos'] as $logo) :?>
			<a href="#" class="block flex-1 h-24 relative">
				<img class="mx-auto object-contain object-center h-24 w-52"
					src="<?= $logo['image']['sizes']['large'] ?? $logo['image']['url'] ?>"
					alt="<?= $logo['image']['caption'] ?? $logo['image']['description'] ?>">
			</a>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php endif; ?>

	<?= $is_preview ? '<span class="block-badge">' . $block['title'] . '</span>' : '' ?>
</div>

<?php if (isset($blockFields['sub-banner_content'])) :?>
<div class="sub-banner__content">
	<!-- <div class="bg-base-blue text-white p-8 absolute bottom-0 translate-y-1/2 lg:max-w-[80%] shadow-xl"> -->
	<div class="container">
		<div class="sub-banner__layout">
			<?= $blockFields['sub-banner_content'] ?>
		</div>
		<!-- /.sub-banner__layout -->
	</div>
	<!-- /.container -->
</div>
<!-- /.sub-banner__content -->
<?php endif; ?>