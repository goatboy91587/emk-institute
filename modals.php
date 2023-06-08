<?php
$modals = get_field('modals', 'options');

if ($modals) :
	foreach ($modals as $modal) :
		$modalID = str_replace(' ', '-', strtolower($modal['modal_id']));
?>

<div id="<?= $modalID ?>" aria-hidden="true" class="modal">
	<div class="modal__overlay" tabindex="-1" data-micromodal-close>
		<div class="modal__dialog" role="dialog" aria-modal="true" aria-labelledby="<?= $modalID ?>">
			<button aria-label="Close modal" data-micromodal-close>Close Modal</button>
			<div id="<?= $modalID ?>-content" class="modal__content">
				<?= $modal['modal_content'] ?>
			</div>
		</div>
	</div>
</div>

<?php
	endforeach;
endif;
?>
