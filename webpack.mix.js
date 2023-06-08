let mix = require('laravel-mix')
let path = require('path')

mix.options({
	legacyNodePolyfills: true,
	terser: {
		extractComments: false,
	},
	processCssUrls: false,
})
	.alias({
		'@': path.join(__dirname, 'node_modules'),
	})
	.autoload({
		jquery: ['$', 'window.jQuery', 'jQuery'],
	})

	.webpackConfig({
		devtool: 'source-map',
		module: {
			rules: [
				{
					test: /\.scss$/,
					loader: 'import-glob-loader',
				},
			],
		},
	})

	.js('src/app.js', 'dist')
	.css('src/app.css', 'dist')
	.sass('src/blocks.scss', 'dist/blocks.css')
	.extract()
	.sourceMaps()
	.browserSync({
		proxy: process.env.MIX_PROXY,
		files: [
			'dist',
			'blocks/**/*.php',
			'template-parts/**/*.php',
			'./*.php',
		],
	})
	.disableNotifications()
