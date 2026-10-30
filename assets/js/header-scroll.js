(() => {
	const header = document.querySelector('[data-scroll-header]');
	if (!header) {
		return;
	}

	let spacer = null;
	let isFixed = false;
	let hideTimer = 0;
	let transitionHandler = null;
	const mobileQuery = window.matchMedia('(max-width: 680px)');
	const threshold = () => window.innerHeight * 0.7;

	const syncSpacer = () => {
		if (!isFixed) {
			return;
		}

		if (!spacer) {
			spacer = document.createElement('div');
			spacer.className = 'site-header-spacer';
			spacer.setAttribute('aria-hidden', 'true');
			header.before(spacer);
		}
		spacer.style.height = `${header.offsetHeight}px`;
	};

	const cancelHide = () => {
		if (hideTimer) {
			window.clearTimeout(hideTimer);
			hideTimer = 0;
		}
		if (transitionHandler) {
			header.removeEventListener('transitionend', transitionHandler);
			transitionHandler = null;
		}
	};

	const showHeader = () => {
		cancelHide();
		if (!isFixed) {
			isFixed = true;
			syncSpacer();
			header.classList.add('is-scroll-fixed', 'is-scroll-preparing');
			header.inert = true;
			requestAnimationFrame(() => {
				if (!isFixed || window.scrollY <= threshold()) {
					return;
				}

				header.classList.remove('is-scroll-preparing');
				header.getBoundingClientRect();
				requestAnimationFrame(() => {
					if (isFixed && window.scrollY > threshold()) {
						header.classList.add('is-scroll-visible');
						header.inert = false;
					}
				});
			});
			return;
		}

		if (header.classList.contains('is-scroll-preparing')) {
			return;
		}

		header.classList.add('is-scroll-visible');
		header.inert = false;
	};

	const releaseHeader = () => {
		if (!isFixed || hideTimer || transitionHandler) {
			return;
		}
		if (mobileQuery.matches && document.body.classList.contains('mobile-menu-is-open')) {
			return;
		}

		const wasVisible = header.classList.contains('is-scroll-visible');
		header.inert = true;
		header.classList.remove('is-scroll-visible');

		const finish = () => {
			if (window.scrollY > threshold()) {
				showHeader();
				return;
			}

			cancelHide();
			header.classList.remove('is-scroll-fixed', 'is-scroll-preparing', 'is-scroll-visible');
			header.inert = false;
			if (spacer) {
				spacer.remove();
				spacer = null;
			}
			isFixed = false;
		};

		if (!wasVisible || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
			finish();
			return;
		}

		const releaseDuration = mobileQuery.matches ? 180 : 500;
		transitionHandler = (event) => {
			if (event.target === header && event.propertyName === 'transform') {
				finish();
			}
		};
		header.addEventListener('transitionend', transitionHandler);
		hideTimer = window.setTimeout(finish, releaseDuration);
	};

	const updateHeader = () => {
		if (isFixed) {
			syncSpacer();
		}
		if (window.scrollY > threshold()) {
			showHeader();
		} else {
			releaseHeader();
		}
	};

	window.addEventListener('scroll', updateHeader, { passive: true });
	window.addEventListener('resize', updateHeader, { passive: true });
	mobileQuery.addEventListener('change', updateHeader);
	updateHeader();
})();