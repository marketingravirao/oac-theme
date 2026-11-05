/*
 * Temporary hero slider implementation (disabled).
 *
(() => {
	const slider = document.querySelector('[data-home-hero-slider]');
	if (!slider) {
		return;
	}

	const hero = slider.closest('.hero');
	const slides = Array.from(slider.querySelectorAll('[data-hero-slide]'));
	const numbers = Array.from(hero.querySelectorAll('[data-hero-dot]'));
	if (slides.length < 2) {
		return;
	}

	let activeIndex = 0;
	let timer = 0;
	let paused = false;
	let transitioning = false;
	const interval = 6000;
	const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	const setActiveNumber = (index) => {
		numbers.forEach((number, numberIndex) => {
			const active = numberIndex === index;
			number.classList.toggle('is-active', active);
			number.setAttribute('aria-current', active ? 'true' : 'false');
		});
	};

	slides.forEach((slide, index) => {
		slide.classList.toggle('is-active', index === activeIndex);
	});

	if (!reducedMotion && slides[activeIndex]) {
		slides[activeIndex].classList.add('is-entering');
		window.setTimeout(() => {
			slides[activeIndex].classList.remove('is-entering');
		}, 1000);
	}

	const showSlide = (nextIndex) => {
		nextIndex = (nextIndex + slides.length) % slides.length;
		if (nextIndex === activeIndex || transitioning) {
			return;
		}
		transitioning = true;

		const current = slides[activeIndex];
		const next = slides[nextIndex];
		current.setAttribute('aria-hidden', 'true');
		next.removeAttribute('aria-hidden');
		current.classList.remove('is-active');
		current.classList.remove('is-entering');
		next.classList.add('is-active');
		if (!reducedMotion) {
			next.classList.add('is-entering');
		}

		activeIndex = nextIndex;
		setActiveNumber(activeIndex);
		window.setTimeout(() => {
			transitioning = false;
		}, reducedMotion ? 0 : 650);
		if (!reducedMotion) {
			window.setTimeout(() => {
				next.classList.remove('is-entering');
			}, 1000);
		}
	};

	const restartTimer = () => {
		window.clearInterval(timer);
		if (!reducedMotion && !paused && !document.hidden) {
			timer = window.setInterval(() => showSlide(activeIndex + 1), interval);
		}
	};

	numbers.forEach((number) => {
		number.addEventListener('click', () => {
			showSlide(Number(number.dataset.heroDot) || 0);
			restartTimer();
		});
	});

	let touchStartX = 0;
	let touchStartY = 0;
	let touchStarted = false;
	const swipeThreshold = 50;

	slider.addEventListener('touchstart', (event) => {
		const touch = event.changedTouches[0];
		touchStartX = touch.clientX;
		touchStartY = touch.clientY;
		touchStarted = true;
	}, { passive: true });

	slider.addEventListener('touchend', (event) => {
		if (!touchStarted) {
			return;
		}
		touchStarted = false;

		const touch = event.changedTouches[0];
		const deltaX = touch.clientX - touchStartX;
		const deltaY = touch.clientY - touchStartY;

		if (Math.abs(deltaX) < swipeThreshold || Math.abs(deltaX) <= Math.abs(deltaY)) {
			return;
		}

		showSlide(deltaX < 0 ? activeIndex + 1 : activeIndex - 1);
		restartTimer();
	}, { passive: true });

	slider.addEventListener('touchcancel', () => {
		touchStarted = false;
	}, { passive: true });

	hero.addEventListener('mouseenter', () => {
		paused = true;
		window.clearInterval(timer);
	});
	hero.addEventListener('mouseleave', () => {
		paused = false;
		restartTimer();
	});
	hero.addEventListener('focusin', () => {
		paused = true;
		window.clearInterval(timer);
	});
	hero.addEventListener('focusout', (event) => {
		if (!hero.contains(event.relatedTarget)) {
			paused = false;
			restartTimer();
		}
	});
	document.addEventListener('visibilitychange', restartTimer);

	restartTimer();
})();
*/
