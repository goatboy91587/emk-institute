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


<div id="<?= $id ?>" class="<?= $classes ?> <?php echo $background_color; ?> <?php echo 'padding--'.$padding.''; ?> <?php echo 'media--'.$media_type.''; ?> ">

	<div class="container">
		<?php 
		
			if($media_type == 'image' && !empty($image)) {
				echo '<div class="image">';
				echo $image['html_large'];
				echo '</div>';
			}
			if($media_type == 'video-link' && !empty($video_link)) {
				echo '<div class="video--link iframe">';
				echo $video_link;
				echo '</div>';
			}
			if($media_type == 'video-file' && !empty($video_file)) {
				echo '<div class="video--file iframe">';
				echo '<video src="'.$video_file['url'].'"></video>';
				echo '</div>';
			}
			
		
		
		?>
	</div>
	
	<?= $is_preview ? '<span class="block-badge">' . $block['title'] . '</span>' : '' ?>
</div>
