(() => {
	const header = document.querySelector('.site-header');
	const toggle = header?.querySelector('.menu-toggle');
	const panel = header?.querySelector('#main-menu');
	const backdrop = header?.querySelector('.mobile-menu__backdrop');
	if (!header || !toggle || !panel || !backdrop) {
		return;
	}

	const mobileQuery = window.matchMedia('(max-width: 680px)');
	const submenuParents = panel.querySelectorAll('.menu-item-has-children');
	const submenuAnimations = new WeakMap();

	const toggleSubmenu = (item) => {
		if (!mobileQuery.matches) {
			return;
		}

		const submenu = item.querySelector(':scope > .sub-menu');
		const submenuToggle = item.querySelector(':scope > .submenu-toggle');
		const submenuLink = item.querySelector(':scope > a');
		if (!submenu || !submenuToggle) {
			return;
		}

		const isExpanded = submenuToggle.getAttribute('aria-expanded') === 'true';
		const shouldExpand = !isExpanded;
		const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

		const animateSubmenu = (submenuElement, open) => {
			submenuAnimations.get(submenuElement)?.cancel();

			const currentHeight = submenuElement.getBoundingClientRect().height;
			const targetHeight = open ? submenuElement.scrollHeight : 0;
			submenuElement.style.height = `${currentHeight}px`;
			submenuElement.style.overflow = 'hidden';

			if (reduceMotion) {
				submenuElement.style.height = open ? `${targetHeight}px` : '0px';
				return;
			}

			const animation = submenuElement.animate(
				[
					{ height: `${currentHeight}px`, opacity: open ? 0 : 1 },
					{ height: `${targetHeight}px`, opacity: open ? 1 : 0 }
				],
				{ duration: 400, easing: 'cubic-bezier(.4, 0, .2, 1)' }
			);
			submenuAnimations.set(submenuElement, animation);
			animation.finished.then(() => {
				if (open) {
					submenuElement.style.height = 'auto';
				} else {
					submenuElement.style.height = '0px';
					submenuElement.setAttribute('inert', '');
				}
				submenuAnimations.delete(submenuElement);
			}).catch(() => {});
		};

		if (shouldExpand) {
			submenuParents.forEach((otherItem) => {
				if (otherItem === item) {
					return;
				}

				const otherSubmenu = otherItem.querySelector(':scope > .sub-menu');
				const otherToggle = otherItem.querySelector(':scope > .submenu-toggle');
				if (!otherSubmenu || !otherToggle) {
					return;
				}

				otherItem.classList.remove('submenu-open', 'is-submenu-open');
				otherToggle.setAttribute('aria-expanded', 'false');
				otherItem.querySelector(':scope > a')?.setAttribute('aria-expanded', 'false');
				animateSubmenu(otherSubmenu, false);
			});
		}

		submenuToggle.setAttribute('aria-expanded', String(shouldExpand));
		submenuLink?.setAttribute('aria-expanded', String(shouldExpand));
		if (shouldExpand) {
			submenu.removeAttribute('inert');
			item.classList.add('submenu-open', 'is-submenu-open');
			submenu.style.height = '0px';
			submenu.offsetHeight;
			animateSubmenu(submenu, true);
		} else {
			item.classList.remove('submenu-open', 'is-submenu-open');
			animateSubmenu(submenu, false);
		}
	};

	submenuParents.forEach((item, index) => {
		const link = item.querySelector(':scope > a');
		const submenu = item.querySelector(':scope > .sub-menu');
		if (!link || !submenu) {
			return;
		}

		if (!submenu.id) {
			submenu.id = `primary-submenu-${index + 1}`;
		}

		link.setAttribute('aria-haspopup', 'true');
		link.setAttribute('aria-expanded', 'false');
		link.setAttribute('aria-controls', submenu.id);

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
			submenu.style.height = '0px';
			submenu.setAttribute('inert', '');
		}

		submenuToggle.addEventListener('click', () => {
			toggleSubmenu(item);
		});

	});

	const resetSubmenus = () => {
		submenuParents.forEach((item) => {
			const submenu = item.querySelector(':scope > .sub-menu');
			const submenuToggle = item.querySelector(':scope > .submenu-toggle');
			item.classList.remove('submenu-open', 'is-submenu-open');
			submenuAnimations.get(submenu)?.cancel();
			if (submenuToggle) {
				submenuToggle.setAttribute('aria-expanded', 'false');
			}
			item.querySelector(':scope > a')?.setAttribute('aria-expanded', 'false');
			if (submenu) {
				if (mobileQuery.matches) {
					submenu.style.height = '0px';
					submenu.setAttribute('inert', '');
				} else {
					submenu.style.removeProperty('height');
					submenu.removeAttribute('inert');
				}
			}
		});
	};

	const setOpen = (open) => {
		const isOpen = mobileQuery.matches && open;
		header.classList.toggle('is-menu-open', isOpen);
		header.classList.toggle('mobile-menu-is-open', isOpen);
		document.body.classList.toggle('has-mobile-menu-open', isOpen);
		document.body.classList.toggle('mobile-menu-is-open', isOpen);
		toggle.setAttribute('aria-expanded', String(isOpen));
		toggle.setAttribute('aria-label', isOpen ? 'Close main menu' : 'Open main menu');
		panel.setAttribute('aria-hidden', String(mobileQuery.matches && !isOpen));
		backdrop.setAttribute('aria-hidden', String(!isOpen));
		backdrop.tabIndex = isOpen ? 0 : -1;
		if (isOpen) {
			panel.removeAttribute('inert');
			backdrop.removeAttribute('inert');
		} else {
			resetSubmenus();
			if (mobileQuery.matches) {
				panel.setAttribute('inert', '');
				backdrop.setAttribute('inert', '');
			} else {
				panel.removeAttribute('inert');
				backdrop.removeAttribute('inert');
			}
		}
	};

	header.classList.add('has-mobile-menu');
	setOpen(false);

	toggle.addEventListener('click', () => {
		setOpen(toggle.getAttribute('aria-expanded') !== 'true');
	});
	backdrop.addEventListener('click', () => setOpen(false));

	panel.addEventListener('click', (event) => {
		const link = event.target.closest('a');
		if (!link) {
			return;
		}

		const parentItem = link.closest('.menu-item-has-children');
		if (mobileQuery.matches && parentItem && link.parentElement === parentItem) {
			event.preventDefault();
			toggleSubmenu(parentItem);
			return;
		}

		setOpen(false);
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

			item.classList.remove('submenu-open', 'is-submenu-open');
			submenuToggle.setAttribute('aria-expanded', 'false');
			if (mobileQuery.matches) {
				submenu.style.height = '0px';
				submenu.setAttribute('inert', '');
			} else {
				submenu.style.removeProperty('height');
				submenu.removeAttribute('inert');
			}
		});
	});
})();