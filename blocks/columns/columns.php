<?php

$blockFields = get_fields();
$customBlock = PXUtils::parse_custom_block($block, $blockFields);

if (is_array($blockFields)) {
	extract($blockFields);
}
?>
<div id="<?= $customBlock->id ?>" class=" <?= $customBlock->classesString ?>">
	<?= $is_preview ? '<span class="block-badge">' . $customBlock->title . '</span>' : '' ?>

	<div class="container">
		<div class="lg:grid lg:grid-cols-3 lg:gap-0">
			<?php foreach ($items as $column) : ?>
			<div class="<?php if($column['type'] == 'icon-link'){echo 'p-0';} else{echo 'p-10';}?> border border-base-blue group hover:cursor-pointer relative <?= $column['type'] === 'testimonial' ? 'flex flex-col justify-between' : '' ?>"
				<?= !empty($column['link']) && strlen($column['link']['url']) > 1 ? 'data-card-link' : '' ?>>
				
				<?php if ($column['type'] === 'icon-link') :?>

							
							<?php if (isset($column['image'])) : ?>
								<div class="relative aspect-square">
									<img class="object-cover object-center absolute w-full h-full top-0 opacity-100  <?= isset($column['hover_content']) && !empty($column['hover_content']) ? 'group-hover:opacity-0' : '' ?> transition"
										src="<?= $column['image']['sizes']['large'] ?? $column['image']['url'] ?>"
										alt="<?= $column['image']['caption'] ?? $column['image']['description'] ?>">
								</div>
							<?php endif; ?>

							<div class="column__content bg-base-blue/90 w-full h-full flex flex-wrap justify-center content-center items-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-100 group-hover:opacity-0 transition">
								<?php if (!empty($column['icon'])) : ?>
									
									<div class="relative w-24 h-24 mb-4">
										<img class="object-contain object-center absolute w-full h-full top-0 opacity-100 transition"
										src="<?= $column['icon']['sizes']['thumbnail'] ?? $column['icon']['url'] ?>"
										alt="<?= $column['icon']['caption'] ?? $column['icon']['description'] ?>">
									</div>
								<?php endif; ?>
								<h5 class="text-white w-full text-center"><?= $column['title'] ?></h5>
							</div>

							<div class="column__link bg-base-gray absolute bottom-0 w-full text-center p-1 left-1/2 transform -translate-x-1/2 translate-y-1/2 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transition">
							<?php if (!empty($column['link'])) : ?>
								<a href="<?= $column['link']['url'] ?>"
								class="arrow-link"><?= $column['link']['title'] ?></a>
								<?php endif; ?>
							</div>
						
					

				<?php elseif ($column['type'] === 'testimonial') :?>

				<p class="text-lg"><?= $column['quote'] ?></p>
				<p class="font-sans uppercase mt-10 text-sm">
					<b><?= $column['name'] ?></b> <br>
					<?= $column['position'] ?>
				</p>

				<?php else: ?>

				<?php if (isset($column['image'])) : ?>
				<div class="relative aspect-square mb-3">
					<img class="object-cover object-center absolute w-full h-full top-0 opacity-100  <?= isset($column['hover_content']) && !empty($column['hover_content']) ? 'group-hover:opacity-0' : '' ?> transition"
						src="<?= $column['image']['sizes']['large'] ?? $column['image']['url'] ?>"
						alt="<?= $column['image']['caption'] ?? $column['image']['description'] ?>">
				</div>
				<?php endif; ?>

				<h4 class="text-base-blue"><?= $column['title'] ?></h4>

				<?php if (!empty($column['link'])) : ?>
				<p
					class="mt-3 relative z-20 transition <?= isset($column['hover_content']) && !empty($column['hover_content']) ? 'group-hover:text-white' : '' ?>">
					<a href="<?= $column['link']['url'] ?>"
						class="arrow-link"><?= $column['link']['title'] ?></a>
				</p>
				<?php endif; ?>

				<?php if (isset($column['hover_content']) && !empty($column['hover_content'])) :?>
				<img class="object-cover object-center absolute z-30 w-full h-full top-0 left-0 opacity-0 group-hover:opacity-100 transition"
					src="<?= $column['hover_image']['sizes']['large'] ?? $column['hover_image']['url'] ?? $column['image']['sizes']['large'] ?? $column['image']['url'] ?>"
					alt="<?= $column['hover_image']['caption'] ?? $column['hover_image']['description'] ?? $column['image']['caption'] ?? $column['image']['description'] ?>">
				<div class="bg-base-blue/90 p-10 wysiwyg text-white absolute w-full h-full top-0 left-0 transition z-40 opacity-0 group-hover:opacity-100 flex flex-col justify-end">
					<?= $column['hover_content'] ?>
				</div>
				<?php endif; ?>

				<?php endif; ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>