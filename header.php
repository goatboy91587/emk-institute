<!DOCTYPE html>
<html class="no-js <?php if (isset($_GET['grid']) && $_GET['grid'] !== 'false') {
	echo ' debug ';
}?>" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<link rel="stylesheet" href="https://use.typekit.net/igr3nej.css">
	<?php
		$favicon = get_field_safe('favicon', 'options');
if ($favicon == null) :
	?>
	<link rel="icon" type="image/png" href="<?= get_template_directory_uri() . '/assets/images/favicon-32x32.png' ?>">
	<?php else : ?>
	<link rel="icon" type="image/png" href="<?= $favicon['url']; ?>">
	<?php endif; ?>

	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<?= get_field_safe('global_header_scripts', 'option'); ?>
	<?= get_field_safe('content_header_scripts'); ?>
</head>

<?php $id = get_the_id();
$type = get_post_type($id);
?>

<body class="<?php if($type == 'debate') {
	echo 'debate-single';
}?>">

	<?php if (!isset($_COOKIE['acceptedCookiePrompt']) && get_field_safe('activate_gdpr', 'option')) : ?>
	<!-- <div role="region" aria-label="<?php _e('Cookie consent banner', 'pxdomain') ?>" class="cookie-banner">
	<div class="container">
		<span class="cookie_label"><?= get_field_safe('gdpr_label', 'option') ?></span>
		<div class="cookie-banner__actions">
			<button class="cookie_btn accept">
				<?php _e('Accept', 'pxdomain') ?>
			</button>
			<button class="cookie_btn dismiss">
				<?php _e('Decline', 'pxdomain') ?>
			</button>
		</div>
	</div>
	</div> -->
	<?php endif; ?>

	<?php the_field('content_body_scripts'); ?>

	<a href="#pxMainContent"
		class="block w-px h-px fixed border-b border-gray-800 text-black bg-white font-bold text-lg focus:px-6 focus:py-4 focus:w-full focus:h-auto overflow-hidden"><?= get_field_safe('skip_content_label', 'option') ?></a>

	<div class="bg-base-blue secondary-menu">
		<div class="container flex items-center justify-end space-x-8 text-white">
			<?php
				wp_nav_menu([
					'menu_class' => 'social-nav-items flex items-center space-x-3',
					'container' => false,
					'walker' => new SocialMenuWalker(),
					'theme_location' => 'social-menu'
				]);
?>

			<!-- <a href="#" data-micromodal-trigger="some-modal-id">Search</a> -->
			<?php
				$donate_button = get_field('donate_button', 'option');
?>
			<?php if ($donate_button) :?>
			<a href="<?= $donate_button['url']; ?>"
				class="btn bg-base-red"><?= $donate_button['title']; ?></a>
			<?php else: ?>
			<a href="#" class="btn bg-base-red">Donate</a>
			<?php endif; ?>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.utility-bar -->

	<header class="site-header absolute w-full isolate z-10 bg-base-blue">
		<div class="container header-container flex items-center">

			<nav class="site-header__nav flex items-center justify-between w-full text-white">

				<a href="/" class="logo w-56 lg:w-auto transition">
					<?= file_get_contents(get_template_directory() . '/assets/images/logo.svg'); ?>
				</a>

				<?php wp_nav_menu([
					'menu_class' => 'header-nav-items nav-items lrg:flex items-center space-x-5',
					'container' => false,
					'walker' => new CustomMenu(),
					'theme_location' => 'main-menu'
				]); ?>

			</nav>

			<button class="site-header__mobile-trigger" aria-expanded="false" aria-controls="menu">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</button>

		</div>
	</header>

	<?php get_template_part('template-parts/modal', null, ['id' => 'some-modal-id', 'content' => 'your modal content']); ?>

	<main id="pxMainContent">