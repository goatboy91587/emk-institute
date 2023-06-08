<?php

/**
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param boolean $is_preview True during AJAX preview.
 * @param integer $post_id The post ID this block is saved to.
 */
$id = $block['name'] . '-' . $block['id'];
$blockName = str_replace('acf/', '', $block['name']);
$classes = 'pxblock pxblock--' . $blockName;
$blockFields = get_fields();

if (!empty($block['className'])) {
	$classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
	$classes .= ' align' . $block['align'];
}
if (!empty($blockFields['block_id'])) {
	$id = str_replace(' ', '-', strtolower($blockFields['block_id']));
}
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

$layout ??= '';

?>


<div id="<?= $id ?>" class="<?= $classes ?> <?php echo $layout; ?> <?php if(!empty($background_color)){echo $background_color;}?>">

	<div class="container">

		<?php if ($layout == 'text-columns' && is_array($text_columns) && count($text_columns)) {
			echo '<div class="text columns">';
			foreach ($text_columns as $col) {
				echo '<div class="column wysiwyg">';
				echo $col['content'];
				echo '</div>';
			}
			echo '</div>';
		} else {
			if (!empty($text)) {
				echo '<div class="text wysiwyg">';
				echo $text;
				echo '</div>';
			}
		}

?>


	</div>


	<?= $is_preview ? '<span class="block-badge">' . $block['title'] . '</span>' : '' ?>
</div>
