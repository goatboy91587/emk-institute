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
// if block field is empty, do preview window, extract data array
if ( empty($blockFields) ) {extract($block['data']);}
else {
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

<div id="<?= $id ?>" class="<?= $classes ?> <?php echo $background_color; ?> <?php echo $padding; ?>">

	<div class="container">
		<?php if(!empty($content)){
			echo '<div class="form__content wysiwyg">';
			echo $content;
			echo '</div>';
		}?>

		<div class="form__body source--<?php echo $form_source; ?>">
			<?php

				if($form_source == 'gravity'){
					if(empty($gravity_forms_shortcode)){
						echo '<div class="empty">';
						echo 'Oops, no form shortcode code was provided.';
						echo '</div>';
					}
					if(!empty($gravity_forms_shortcode)){
						echo $gravity_forms_shortcode;
					}
				}
				if($form_source == 'html'){
					if(empty($form_html)){
						echo '<div class="empty">';
						echo 'Oops, no form HTML code was provided.';
						echo '</div>';

					}
					if(!empty($form_html)){
						echo $form_html;
					}
				}


			?>
		</div>

	</div>

	<?= $is_preview ? '<span class="block-badge">' . $block['title'] . '</span>' : '' ?>
</div>
