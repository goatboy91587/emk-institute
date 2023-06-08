<?php

$blockFields = get_fields();
$customBlock = PXUtils::parse_custom_block($block, $blockFields);

if (is_array($blockFields)) {
	extract($blockFields);
}

?>
<div id="<?= $customBlock->id ?>" class="<?= $customBlock->classesString ?> bg-base-gray py-9 lg:py-24">
	<?= $is_preview ? '<span class="block-badge">' . $customBlock->title . '</span>' : '' ?>

	<div class="container grid grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-14">
		<?php foreach ($directors as $director) :?>
			<?php
				$slug = sanitize_title($director['name']);
				// echo "<pre>", print_r($director), "</pre>";
			 ?>
		<div class="profile " data-micromodal-trigger="<?= $slug ?>">
		<?php if(!empty($director['portrait'])){ ?>
			<img class="object-cover  w-full h-48 mb-3 bg-white object-center"
				src="<?= $director['portrait']['sizes']['large'] ?? $director['portrait']['url'] ?>"
				alt="<?= $director['portrait']['caption'] ?? $director['portrait']['description'] ?>">
		<?php } ?>
			<h5 class="text-base-blue"><?= $director['name'] ?></h5>
			<p class="text-sm"><?= $director['position'] ?></p>
		</div>

		<!-- start modal -->
		<div id="<?= $slug ?>" aria-hidden="true" class="modal modal--bod">
			<div class="modal__overlay" tabindex="-1" data-micromodal-close>
				<div class="modal__dialog" role="dialog" aria-modal="true" aria-labelledby="<?= $director['name'] ?>">
					<button aria-label="Close modal" data-micromodal-close class="profile-modal__close">Close</button>

					<div class="profile-modal__content">

						<div class="profile__left">
							<?php if(!empty($director['portrait'])){ ?>
							<div class="profile__portrait">
								<img class="object-cover  w-full h-48 mb-3 bg-white object-center"
								src="<?= $director['portrait']['sizes']['large'] ?? $director['portrait']['url'] ?>"
								alt="<?= $director['portrait']['caption'] ?? $director['portrait']['description'] ?>">
							</div>
							<?php } ?>
							<div class="profile__name">
								<?php echo $director['name']; ?>
							</div>
							<!-- /.profile__name -->
							<div class="profile__position">
								<?php echo $director['position']; ?>
							</div>
							<!-- /.profile__position -->
						</div>
						<!-- /.profile__left -->

						<div class="profile__right">
							<div class="profile__content wysiwyg">
								<?= $director['bio'] ?>
							</div>
						</div>
						<!-- /.profile__right -->

					</div>

				</div>
			</div>
		</div>
		<!-- end modal -->
		<?php endforeach; ?>
	</div>
</div>
