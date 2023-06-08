<?php

$blockFields = get_fields();
$customBlock = PXUtils::parse_custom_block($block, $blockFields);

if (is_array($blockFields)) {
	extract($blockFields);
}

// if block field is empty, do preview window, extract data array
if (empty($blockFields)) {
	extract($block['data']);
} else {
	if (!empty($blockFields)) {
		extract($blockFields);
	}
	$data_example = [
		'example' => [
			'attributes' => [
				'mode' => 'preview',
				'data' => $blockFields
			]
		]
	];
}

$rightChevronSvg = file_get_contents(get_template_directory() . '/assets/images/right-chevron.svg');
?>

<div id="<?= $customBlock->id ?>" class="<?= $customBlock->classesString ?> py-0">
	<div class="glide relative border-t-8 border-base-red">
		<div class="glide__track" data-glide-el="track">
			<ul class="glide__slides">
				<?php foreach ($slides as $slide) :?>
				<li class="glide__slide bg-base-blue relative">
					<?php if (!empty($slide['image'])) : ?>
					<img class="object-cover object-center absolute w-full h-full z-0 top-0 opacity-10 pointer-events-none"
						src="<?= $slide['image']['sizes']['large'] ?? $slide['image']['url'] ?>"
						alt="<?= $slide['image']['caption'] ?? $slide['image']['description'] ?>">
					<?php endif; ?>
					<div class="relative text-white min-h-[50vh] flex flex-col justify-center px-12 lg:px-24 space-y-5">
						<div class="container">
							<?= $slide['content'] ?? '' ?>
						</div>
						<!-- /.container -->
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>


		<div class="glide__arrows absolute bottom-0 right-0 z-10 flex space-x-2" data-glide-el="controls">
			<button class="glide__arrow glide__arrow--left w-12 h-12 text-white bg-base-blue" data-glide-dir="&lt;"><span
					class="block scale-50 -rotate-180"><?= $rightChevronSvg ?></span></button>
			<button class="glide__arrow glide__arrow--right w-12 h-12 text-white bg-base-blue" data-glide-dir="&gt;"><span class="block scale-50"><?= $rightChevronSvg ?></span></button>
		</div>
	</div>

	<?= $is_preview ? '<span class="block-badge">' . $block['title'] . '</span>' : '' ?>
</div>
