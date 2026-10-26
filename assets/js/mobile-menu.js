(() => {
	const header = document.querySelector('.site-header');
	const toggle = header?.querySelector('.mobile-menu-toggle');
	const panel = header?.querySelector('#primary-menu-panel');
	if (!header || !toggle || !panel) {
		return;
	}

	const mobileQuery = window.matchMedia('(max-width: 680px)');

	const setOpen = (open) => {
		const isOpen = mobileQuery.matches && open;
		header.classList.toggle('is-menu-open', isOpen);
		toggle.setAttribute('aria-expanded', String(isOpen));
		toggle.setAttribute('aria-label', isOpen ? 'Close main menu' : 'Open main menu');
		panel.setAttribute('aria-hidden', String(mobileQuery.matches && !isOpen));
		if (mobileQuery.matches && !isOpen) {
			panel.setAttribute('inert', '');
		} else {
			panel.removeAttribute('inert');
		}
	};

	header.classList.add('has-mobile-menu');
	setOpen(false);

	toggle.addEventListener('click', () => {
		setOpen(toggle.getAttribute('aria-expanded') !== 'true');
	});

	panel.addEventListener('click', (event) => {
		if (event.target.closest('a')) {
			setOpen(false);
		}
	});

	document.addEventListener('click', (event) => {
		if (mobileQuery.matches && toggle.getAttribute('aria-expanded') === 'true' && !header.contains(event.target)) {
			setOpen(false);
		}
	});

	document.addEventListener('keydown', (event) => {
		if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
			setOpen(false);
			toggle.focus();
		}
	});

	mobileQuery.addEventListener('change', () => setOpen(false));
})();