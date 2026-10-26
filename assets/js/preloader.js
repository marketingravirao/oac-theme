(() => {
	const preloader = document.querySelector('.site-preloader');
	if (!preloader) {
		return;
	}

	document.documentElement.classList.add('has-preloader-js');

	const startedAt = performance.now();
	const minimumDuration = 240;
	let dismissed = false;
	let fallbackTimer = 0;

	const hide = () => {
		if (dismissed) {
			return;
		}

		dismissed = true;
		preloader.classList.add('is-hidden');
		window.setTimeout(() => preloader.remove(), 500);
	};

	const dismiss = () => {
		window.clearTimeout(fallbackTimer);
		window.setTimeout(hide, Math.max(0, minimumDuration - (performance.now() - startedAt)));
	};

	fallbackTimer = window.setTimeout(hide, 3000);
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', dismiss, { once: true });
	} else {
		dismiss();
	}
})();
