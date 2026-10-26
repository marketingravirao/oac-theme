(() => {
	const accordions = document.querySelectorAll('[data-faq-accordion]');

	accordions.forEach((accordion) => {
		if (accordion.dataset.faqEnhanced === 'true') {
			return;
		}

		const items = Array.from(accordion.querySelectorAll('[data-faq-item]'));
		const setOpen = (item, isOpen) => {
			const trigger = item.querySelector('.faq-item__trigger');
			const panel = item.querySelector('.faq-item__panel');
			item.classList.toggle('is-open', isOpen);
			trigger.setAttribute('aria-expanded', String(isOpen));
			panel.setAttribute('aria-hidden', String(!isOpen));
			if (isOpen) {
				panel.removeAttribute('inert');
			} else {
				panel.setAttribute('inert', '');
			}
		};

		items.forEach((item) => setOpen(item, false));
		accordion.dataset.faqEnhanced = 'true';

		accordion.addEventListener('click', (event) => {
			const trigger = event.target.closest('.faq-item__trigger');
			if (!trigger || !accordion.contains(trigger)) {
				return;
			}

			const selectedItem = trigger.closest('[data-faq-item]');
			const shouldOpen = trigger.getAttribute('aria-expanded') !== 'true';
			items.forEach((item) => setOpen(item, item === selectedItem && shouldOpen));
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
			openItem.querySelector('.faq-item__trigger').focus();
		});
	});
})();