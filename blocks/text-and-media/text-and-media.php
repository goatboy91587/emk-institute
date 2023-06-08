<?php
$blockFields = get_fields();
$customBlock = PXUtils::parse_custom_block($block, $blockFields);

if (empty($blockFields)) {
	extract($block['data']);
} else {
	extract($blockFields);
	$data_example = [
		'example' => [
			'attributes' => [
				'mode' => 'preview',
				'data' => $blockFields
			]
		]
	];
}

$mediaObject = match ($media_type) {
	'image' => sprintf('<img src="%s" class="object-cover object-center absolute w-full h-full top-0 opacity-100 group-hover:opacity-0 transition" />', $image['sizes']['large'] ?? $image['url']),

	'video-link' => $video_link,

	'video-file' => '<video class="object-cover object-center absolute w-full h-full top-0 opacity-100 group-hover:opacity-0 transition" autoplay muted loop playsinline>'
		. '<source src="' . $video['url'] . '" type="video/mp4">'
		. '</video>',

	default => null
};

?>
<!-- bg-none, bg-light-blue, bg-base-blue, bg-base-gray -->
<div id="<?= $customBlock->id ?>" class="<?= $customBlock->classesString ?> lg:flex">
	<div class="container">
		<div class="lg:flex">
			<div class="relative aspect-video bg-base-gray lg:w-1/2 <?= $layout === 'text-media' ? 'lg:order-2' : '' ?>">
				<?= $mediaObject ?>
			</div>
			<div
				class="p-10 wysiwyg lg:p-16 lg:w-1/2 lg:flex lg:flex-col lg:justify-center <?= $blockFields['background_color']; ?> <?= ($blockFields['background_color'] == 'bg-base-blue') ? 'text-white' : ''; ?>">
				<?= $text ?? '' ?>
			</div>
		</div>
	</div>
	<!-- /.container -->

	<?= $is_preview ? '<span class="block-badge">' . $block['title'] . '</span>' : '' ?>
</div>