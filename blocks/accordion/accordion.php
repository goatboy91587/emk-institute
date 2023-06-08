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

if (!empty($block['className'])) $classes .= ' ' . $block['className'];
if (!empty($block['align'])) $classes .= ' align' . $block['align'];
if (!empty($blockFields['block_id'])) $id = str_replace(' ', '-', strtolower($blockFields['block_id']));
if ( empty($blockFields) ) {
	extract($block['data']);
} else {
	if (!empty($blockFields)) { extract($blockFields); }
	$data_example = array(
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => $blockFields
			)
		)
	);
	// echo "<pre>", var_export($data_example), "</pre>";
} ?>

<div id="<?= $id ?>" class="<?= $classes ?> <?php echo $background_color; ?> <?php echo 'padding--'.$padding.''; ?>">

	<div class="container">
		<?php if(!empty($content)){
			echo '<div class="accordion__content">';
			echo $content;
			echo '</div>';
		} ?>

		<?php if(is_array($drawers) && count($drawers)) {
			echo '<div class="accordion__drawers">';

			foreach($drawers as $drawer) {
				echo '<div class="drawer">';

					echo '<div class="drawer__title drawer-trigger">';
					echo $drawer['title'];
					echo '</div>';

					echo '<div class="drawer__content">';
					echo $drawer['content'];
					echo '</div>';

				echo '</div>';
			}

			echo '</div>';
		} ?>
	</div>
	
	<?= $is_preview ? '<span class="block-badge">' . $block['title'] . '</span>' : '' ?>
</div>
