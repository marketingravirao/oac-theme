(() => {
	const accordions = document.querySelectorAll('[data-curriculum-accordion]');

	accordions.forEach((accordion) => {
		if (accordion.dataset.curriculumEnhanced === 'true') {
			return;
		}

		const items = Array.from(accordion.querySelectorAll('[data-curriculum-item]'));

		const setOpen = (item, isOpen) => {
			const trigger = item.querySelector('.course-curriculum__trigger');
			const panel = item.querySelector('.course-curriculum__panel');

			item.classList.toggle('is-open', isOpen);
			trigger.setAttribute('aria-expanded', String(isOpen));
			if (panel) {
				panel.setAttribute('aria-hidden', String(!isOpen));
				if (isOpen) {
					panel.removeAttribute('inert');
				} else {
					panel.setAttribute('inert', '');
				}
			}
		};

		items.forEach((item) => {
			setOpen(item, item.classList.contains('is-open'));
		});
		accordion.dataset.curriculumEnhanced = 'true';

		accordion.addEventListener('click', (event) => {
			const trigger = event.target.closest('.course-curriculum__trigger');
			if (!trigger || !accordion.contains(trigger)) {
				return;
			}

			const item = trigger.closest('[data-curriculum-item]');
			const shouldOpen = trigger.getAttribute('aria-expanded') !== 'true';
			items.forEach((candidate) => setOpen(candidate, candidate === item && shouldOpen));
		});

		accordion.addEventListener('keydown', (event) => {
			if (event.key !== 'Escape') {
				return;
			}
			const openItem = items.find((item) => item.classList.contains('is-open'));
			if (!openItem) {
				return;
			}
			setOpen(openItem, false);
			openItem.querySelector('.course-curriculum__trigger').focus();
		});
	});
})();