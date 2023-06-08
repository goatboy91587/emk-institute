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
		<div class="popout-grid wysiwyg">
			<div class="left-column">
				<?php echo $left_column; ?>
			</div>
			<!-- /.left-column -->
			<div class="right-column">
				<?php echo $right_column; ?>
			</div>
			<!-- /.right-column -->
		</div>
		<!-- /.contact-grid -->
	</div>
	<!-- /.container -->
</div>
