(() => {
	const header = document.querySelector('.site-header');
	const toggle = header?.querySelector('.mobile-menu-toggle');
	const panel = header?.querySelector('#primary-menu-panel');
	const backdrop = header?.querySelector('.mobile-menu-backdrop');
	if (!header || !toggle || !panel || !backdrop) {
		return;
	}

	const mobileQuery = window.matchMedia('(max-width: 680px)');
	const submenuParents = panel.querySelectorAll('.menu-item-has-children');

	submenuParents.forEach((item, index) => {
		const link = item.querySelector(':scope > a');
		const submenu = item.querySelector(':scope > .sub-menu');
		if (!link || !submenu) {
			return;
		}

		if (!submenu.id) {
			submenu.id = `primary-submenu-${index + 1}`;
		}

		const submenuToggle = document.createElement('button');
		submenuToggle.className = 'submenu-toggle';
		submenuToggle.type = 'button';
		submenuToggle.setAttribute('aria-expanded', 'false');
		submenuToggle.setAttribute('aria-controls', submenu.id);
		submenuToggle.setAttribute('aria-label', `Toggle ${link.textContent.trim()} submenu`);
		submenuToggle.innerHTML = '<span aria-hidden="true"></span>';
		item.classList.add('has-submenu-toggle');
		item.insertBefore(submenuToggle, submenu);
		if (mobileQuery.matches) {
			submenu.style.maxHeight = '0px';
			submenu.setAttribute('inert', '');
		}

		submenuToggle.addEventListener('click', () => {
			const isExpanded = submenuToggle.getAttribute('aria-expanded') === 'true';
			const shouldExpand = !isExpanded;
			submenuToggle.setAttribute('aria-expanded', String(shouldExpand));
			if (shouldExpand) {
				submenu.removeAttribute('inert');
				submenu.style.maxHeight = '0px';
				item.classList.add('submenu-open');
				submenu.offsetHeight;
				requestAnimationFrame(() => {
					submenu.style.maxHeight = `${submenu.scrollHeight}px`;
				});
			} else {
				submenu.setAttribute('inert', '');
				submenu.style.maxHeight = `${submenu.scrollHeight}px`;
				submenu.offsetHeight;
				item.classList.remove('submenu-open');
				requestAnimationFrame(() => {
					submenu.style.maxHeight = '0px';
				});
			}
		});

		submenu.addEventListener('transitionend', (event) => {
			if (event.target !== submenu || event.propertyName !== 'max-height') {
				return;
			}
			if (item.classList.contains('submenu-open')) {
				submenu.style.maxHeight = 'none';
			} else {
				submenu.setAttribute('inert', '');
			}
		});
	});

	const setOpen = (open) => {
		const isOpen = mobileQuery.matches && open;
		header.classList.toggle('is-menu-open', isOpen);
		toggle.setAttribute('aria-expanded', String(isOpen));
		toggle.setAttribute('aria-label', isOpen ? 'Close main menu' : 'Open main menu');
		panel.setAttribute('aria-hidden', String(mobileQuery.matches && !isOpen));
		backdrop.setAttribute('aria-hidden', String(!isOpen));
		backdrop.tabIndex = isOpen ? 0 : -1;
		document.body.classList.toggle('has-mobile-menu-open', isOpen);
		if (mobileQuery.matches && !isOpen) {
			panel.setAttribute('inert', '');
			backdrop.setAttribute('inert', '');
		} else {
			panel.removeAttribute('inert');
			backdrop.removeAttribute('inert');
		}
	};

	header.classList.add('has-mobile-menu');
	setOpen(false);

	toggle.addEventListener('click', () => {
		setOpen(toggle.getAttribute('aria-expanded') !== 'true');
	});
	backdrop.addEventListener('click', () => setOpen(false));

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

	mobileQuery.addEventListener('change', () => {
		setOpen(false);
		submenuParents.forEach((item) => {
			const submenu = item.querySelector(':scope > .sub-menu');
			const submenuToggle = item.querySelector(':scope > .submenu-toggle');
			if (!submenu || !submenuToggle) {
				return;
			}

			item.classList.remove('submenu-open');
			submenuToggle.setAttribute('aria-expanded', 'false');
			if (mobileQuery.matches) {
				submenu.style.maxHeight = '0px';
				submenu.setAttribute('inert', '');
			} else {
				submenu.style.removeProperty('max-height');
				submenu.removeAttribute('inert');
			}
		});
	});
})();