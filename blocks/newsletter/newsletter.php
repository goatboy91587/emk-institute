<?php

$blockFields = get_fields();
$customBlock = PXUtils::parse_custom_block($block, $blockFields);

if (is_array($blockFields)) {
	extract($blockFields);
}

?>
<div id="<?= $customBlock->id ?>" class=" <?= $customBlock->classesString ?>">
	<?= $is_preview ? '<span class="block-badge">' . $customBlock->title . '</span>' : '' ?>
	<div class="container bg-base-gray">
		<div class="intro">
			<?php echo $intro_content; ?>
		</div>
		<?php echo $mailchimp_html; ?>
	</div>
	<!-- /.container -->
</div>
