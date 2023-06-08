import Glide from '@glidejs/glide'

import '@/@glidejs/glide/dist/css/glide.core.min.css'

export const Slider = (() => {
	'use strict'

	const glideOptions = {
		type: 'carousel',
		startAt: 0,
		perView: 1,
		autoplay: 5000,
		hoverpause: true,
		keyboard: true,
		gap: 0,
	}

	function init() {
		if (!window.acf && document.querySelector('.glide'))
			new Glide('.glide', glideOptions).mount()
	}

	return {
		init: init,
		name: 'slider',
	}
})()
