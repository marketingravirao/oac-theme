(() => {
	const desktopQuery = window.matchMedia('(min-width: 681px)');
	const menus = document.querySelectorAll('.main-nav__list');

	menus.forEach((menu) => {
		const links = Array.from(menu.querySelectorAll(':scope > li:not(.nav-login-item) > a'));
		const activeLink = links.find((link) => link.parentElement.matches(
			'.current-menu-item, .current_page_item, .current-menu-ancestor, .current_page_ancestor'
		));

		if (!links.length) {
			return;
		}

		const movePillTo = (link) => {
			if (!link || !desktopQuery.matches) {
				menu.classList.remove('has-active-pill');
				links.forEach((item) => item.classList.remove('is-pill-current'));
				return;
			}

			const linkRect = link.getBoundingClientRect();
			const menuRect = menu.getBoundingClientRect();
			menu.style.setProperty('--nav-pill-x', `${linkRect.left - menuRect.left}px`);
			menu.style.setProperty('--nav-pill-y', `${linkRect.top - menuRect.top}px`);
			menu.style.setProperty('--nav-pill-width', `${linkRect.width}px`);
			menu.style.setProperty('--nav-pill-height', `${linkRect.height}px`);
			links.forEach((item) => item.classList.toggle('is-pill-current', item === link));
			menu.classList.add('has-active-pill');
		};

		const resetPill = () => movePillTo(activeLink);

		menu.addEventListener('pointerover', (event) => {
			const link = event.target.closest('a');
			if (links.includes(link)) {
				movePillTo(link);
			}
		});
		menu.addEventListener('pointerleave', resetPill);
		menu.addEventListener('focusin', (event) => {
			const link = event.target.closest('a');
			if (links.includes(link)) {
				movePillTo(link);
			}
		});
		menu.addEventListener('focusout', (event) => {
			if (!menu.contains(event.relatedTarget)) {
				resetPill();
			}
		});
		window.addEventListener('resize', () => {
			const currentLink = links.find((link) => link.classList.contains('is-pill-current')) || activeLink;
			movePillTo(currentLink);
		});
		desktopQuery.addEventListener('change', resetPill);

		if (activeLink) {
			movePillTo(activeLink);
		}
	});
})();
