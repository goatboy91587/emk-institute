import Cookies from 'js-cookie';

export const Helpers = (() => {
	'use strict';

	function init() {
		links();
		mobile_menu();
		body_scroll();

		cookie_banner();
		check_cookie();
	}
	
	function check_cookie() {
		let myCookie = Cookies.get('acceptedCookiePrompt');

		if (!myCookie) {
			$('.cookie-banner').css('display', 'flex');
		}
	}

	function cookie_banner() {
		let banner = document.querySelector('.cookie-banner');

		if (!banner) return;

		$('.cookie_btn').on('click', function (e) {
			e.preventDefault();
			var acceptance = this.classList.contains('accept');
			Cookies.set('acceptedCookiePrompt', acceptance);
			if (acceptance) {
				window.gaCall();
			}
			$('.cookie-banner').hide();
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
			if (anchorTag.href.indexOf('#') === 0 && !document.getElementById(anchorTag.href.replace('#', '')))
				window.scrollTo({ top: 0, behavior: 'smooth' });
		});
	}

	function mobile_menu() {
		const mobileTrigger = document.querySelector('.site-header__mobile-trigger');
		if (!mobileTrigger) return;

		mobileTrigger.addEventListener('click', () => {
			mobileTrigger.classList.toggle('open');
			document.body.classList.toggle('mobile-nav-open');

		});
	}

	function body_scroll() {
		window.addEventListener('scroll', () => {
				window.scrollY > 1 ? document.body.classList.add('scrolled') : document.body.classList.remove('scrolled');
			}, 1);
	}

	return {
		init: init,
	};
})();
