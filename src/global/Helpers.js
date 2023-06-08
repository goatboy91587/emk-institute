export const Helpers = (() => {
	'use strict';

	function init() {
		cardLinks();
		links();
		mobile_menu();
		body_scroll();
	}

	function cardLinks() {
		document.querySelectorAll('[data-card-link]').forEach((card) => {
			card.addEventListener('click', (e) => {
				const link = card.querySelector('a');

				if (link) link.click();
			});
		});
	}

	function links() {
		document.querySelectorAll('a').forEach((anchorTag) => {
			// External links
			if (
				anchorTag.href.indexOf(window.location.host) < 0 &&
				anchorTag.href.indexOf('mailto') < 0 &&
				anchorTag.href.indexOf('tel') < 0
			)
				anchorTag.setAttribute('target', '_blank');

			// Anchor links
			if (
				anchorTag.href.indexOf('#') === 0 &&
				!document.getElementById(anchorTag.href.replace('#', ''))
			)
				window.scrollTo({ top: 0, behavior: 'smooth' });
		});
	}

	function mobile_menu() {
		const mobileTrigger = document.querySelector(
			'.site-header__mobile-trigger'
		);
		const logo = document.querySelector('.site-header .logo');

		if (!mobileTrigger) return;

		mobileTrigger.addEventListener('click', () => {
			mobileTrigger.classList.toggle('open');
			document.body.classList.toggle('mobile-nav-open');
			document.body.classList.toggle('overflow-hidden');
			logo.classList.toggle('opacity-0');
		});
	}

	function body_scroll() {
		window.addEventListener(
			'scroll',
			() => {
				window.scrollY > 1
					? document.body.classList.add('scrolled')
					: document.body.classList.remove('scrolled');
			},
			1
		);
	}

	return {
		init: init,
	};
})();
