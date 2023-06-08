<?php

$blockFields = get_fields();
$customBlock = PXUtils::parse_custom_block($block, $blockFields);

if (is_array($blockFields)) {
	extract($blockFields);
}

?>
<div id="<?= $customBlock->id ?>" class=" <?= $customBlock->classesString ?>">
	<div class="container">

		


		<?php

			$debates = get_fields();

			foreach ( $debates['debates'] as $debate ) {
				$debate = $debate['debate'];
				$id = $debate->ID;
				$title = $debate->post_title;
				$fields = get_fields($id);
				$content = $fields['preview_content'];
				$image = $fields['featured_image']['sizes']['large'];
				$url = ( !empty($fields['link']) ) ? $fields['link']['url'] : get_permalink();
				$url_title = ( !empty($fields['link']) ) ? $fields['link']['title'] : get_the_title();
				?>
				<div class="debate-grid">
					<div class="debate preview-content">
						<a class="full-link" href="<?php echo $url; ?>">Full link</a>
						<div class="debate__image">
							<?php echo $fields['preview_content_background_image']['html_large']; ?>
						</div>
						<!-- /.debate__image -->
						<div class="debate__content">
							<h2><?php echo $title; ?></h2>
							<div class="excerpt"><?php echo $content; ?></div>
							<?php if (!empty($url)) { ?>
							<a class="arrow-link" href="<?php echo $url; ?>"><?php echo $url_title; ?></a>
							<?php } ?>
						</div>
					</div>
					<div class="debate featured-image">
						<a class="full-link" href="<?php echo $url; ?>">Full link</a>
						<div class="debate__image">
							<?php echo $fields['featured_image']['html_large']; ?>
						</div>
						<!-- /.debate__image -->
						<div class="debate__content">
							<h2><?php echo $title; ?></h2>
							<?php if (!empty($url)) { ?>
							<a class="arrow-link" href="<?php echo $url; ?>"><?php echo $url_title; ?></a>
							<?php } ?>
							
						</div>
					</div>
				</div>
				<!-- /.debate -->
				<?php
			}
		 ?>

		 </div>
		<!-- /.debate-grid -->


	</div>
</div>
