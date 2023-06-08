const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
	content: require('fast-glob').sync([
		'./blocks/**/*.php',
		'./classes/**/*.php',
		'./template-parts/**/*.php',
		'*.php',
	]),
	safelist: ['indented-tag', 'arrow-link', 'h-4', 'w-4'],
	theme: {
		container: {
			center: true,
			padding: {
				DEFAULT: '1rem',
				sm: '2rem',
				lg: '4rem',
				xl: '5rem',
				'2xl': '6rem',
			},
		},
		extend: {
			colors: {
				'base-blue': '#0c2e6e',
				'base-red': '#eb4438',
				'base-gray': '#e0ddd5',
				'light-blue': '#f3f8ff',
			},
			fontFamily: {
				sans: ['Arial', ...defaultTheme.fontFamily.sans],
				serif: ['Georgia', ...defaultTheme.fontFamily.serif],
				heading: [
					'trajan-pro-3',
					...defaultTheme.fontFamily.serif,
				],
			},
		},
	},
	plugins: [require('@tailwindcss/typography')],
};
