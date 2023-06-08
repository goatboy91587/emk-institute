export const Accordion = (() => {
	'use strict';

	function init() {
		var $trigger = $('.drawer-trigger');
		var $drawer = $('.drawer__content');

		$drawer.hide();

		$trigger.on('click', function(event) {

			$(this).parent().find('.drawer__content').slideToggle();
			
			
		});
	}

	return {
		init: init,
		name: 'accordion'
	};
})();
