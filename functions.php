<?php

function get_field_safe(...$args)
{
	return function_exists('get_field') ? get_field(...$args) : null;
}

if (function_exists('get_field')) {
	require_once __DIR__ . '/classes/PXGutenbergTheme.php';

	new PXGutenbergTheme();
}
