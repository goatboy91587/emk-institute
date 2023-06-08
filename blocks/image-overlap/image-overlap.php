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
		<div class="primary-image">
			<?php echo $primary_image['html']; ?>
		</div>
		<!-- /.primary-image -->
		<div class="secondary-image">
			<?php echo $secondary_image['html']; ?>
		</div>
		<!-- /.secondary-image -->
	</div>
	<!-- /.container -->
</div>
