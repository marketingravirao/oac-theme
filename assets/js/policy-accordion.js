(() => {
	const accordions = document.querySelectorAll('.legal-policy__list');

	accordions.forEach((accordion) => {
		if (accordion.dataset.policyEnhanced === 'true') {
			return;
		}

		const setOpen = (item, isOpen) => {
			const trigger = item.querySelector('.legal-policy__trigger');
			const panel = item.querySelector('.legal-policy__panel');

			item.classList.toggle('is-open', isOpen);
			trigger.setAttribute('aria-expanded', String(isOpen));
			panel.setAttribute('aria-hidden', String(!isOpen));

			if (isOpen) {
				panel.removeAttribute('inert');
			} else {
				panel.setAttribute('inert', '');
			}
		};

		accordion.classList.add('is-enhanced');
		accordion.querySelectorAll('[data-policy-item]').forEach((item) => {
			setOpen(item, item.classList.contains('is-open'));
		});
		accordion.dataset.policyEnhanced = 'true';

		accordion.addEventListener('click', (event) => {
			const trigger = event.target.closest('.legal-policy__trigger');
			if (!trigger || !accordion.contains(trigger)) {
				return;
			}

			const item = trigger.closest('[data-policy-item]');
			setOpen(item, trigger.getAttribute('aria-expanded') !== 'true');
		});

		accordion.addEventListener('keydown', (event) => {
			if (event.key !== 'Escape') {
				return;
			}

			const openItem = event.target.closest('[data-policy-item].is-open');
			if (!openItem || !accordion.contains(openItem)) {
				return;
			}

			setOpen(openItem, false);
			openItem.querySelector('.legal-policy__trigger').focus();
		});
	});
})();
