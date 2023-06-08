import MicroModal from 'micromodal';

export const Modals = (function () {
	'use strict';

	const config = {
		disableScroll: true,
		disableFocus: true,
		awaitOpenAnimation: true,
		awaitCloseAnimation: true,
	};

	function init() {
		MicroModal.init(config);
	}

	function show(id) {
		MicroModal.show(id, config);
	}

	return {
		init: init,
		show: show,
	};
})();
