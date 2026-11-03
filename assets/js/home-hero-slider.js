(() => {
	if (!window.gsap) {
		return;
	}

	const slider = document.querySelector('[data-home-hero-slider]');
	if (!slider) {
		return;
	}

	const hero = slider.closest('.hero');
	const slides = Array.from(slider.querySelectorAll('[data-hero-slide]'));
	const dots = Array.from(hero.querySelectorAll('[data-hero-dot]'));
	if (slides.length < 2) {
		return;
	}

	let activeIndex = 0;
	let timer = 0;
	let paused = false;
	let transitioning = false;
	const interval = 6000;
	const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	const setActiveDot = (index) => {
		dots.forEach((dot, dotIndex) => {
			const active = dotIndex === index;
			dot.classList.toggle('is-active', active);
			dot.setAttribute('aria-current', active ? 'true' : 'false');
		});
	};

	if (!reducedMotion) {
		const firstContent = slides[activeIndex].querySelector('.hero__content');
		const firstItems = firstContent.querySelectorAll('.eyebrow, h1, .hero__intro, .hero__actions');

		window.gsap.timeline({ defaults: { ease: 'power3.out' } })
			.fromTo(slides[activeIndex].querySelector('.hero__media img'), {
				scale: 1.06,
				filter: 'brightness(.88)',
			}, {
				scale: 1,
				filter: 'brightness(1)',
				duration: 1.4,
				ease: 'power2.out',
			}, 0)
			.fromTo(firstItems, {
				y: 34,
				autoAlpha: 0,
			}, {
				y: 0,
				autoAlpha: 1,
				duration: 0.75,
				stagger: 0.09,
				ease: 'power3.out',
				clearProps: 'transform,opacity,visibility',
			}, 0.2);
	}

	const showSlide = (nextIndex) => {
		nextIndex = (nextIndex + slides.length) % slides.length;
		if (nextIndex === activeIndex || transitioning) {
			return;
		}
		transitioning = true;

		const current = slides[activeIndex];
		const next = slides[nextIndex];
		const direction = nextIndex > activeIndex ? 1 : -1;
		current.setAttribute('aria-hidden', 'true');
		next.removeAttribute('aria-hidden');
		next.style.visibility = 'visible';

		if (reducedMotion) {
			window.gsap.set(current, { autoAlpha: 0 });
			window.gsap.set(next, { autoAlpha: 1 });
			window.gsap.set(current.querySelector('.hero__content'), { clearProps: 'transform,opacity,visibility' });
			window.gsap.set(next.querySelector('.hero__content'), { clearProps: 'transform,opacity,visibility' });
			window.gsap.set(current.querySelectorAll('.eyebrow, h1, .hero__intro, .hero__actions'), {
				x: 0,
				y: 0,
				autoAlpha: 1,
				clearProps: 'transform,opacity,visibility',
			});
			window.gsap.set(next.querySelectorAll('.eyebrow, h1, .hero__intro, .hero__actions'), {
				x: 0,
				y: 0,
				autoAlpha: 1,
				clearProps: 'transform,opacity,visibility',
			});
			transitioning = false;
		} else {
			const currentContent = current.querySelector('.hero__content');
			const nextContent = next.querySelector('.hero__content');
			const nextItems = nextContent.querySelectorAll('.eyebrow, h1, .hero__intro, .hero__actions');
			const currentItems = currentContent.querySelectorAll('.eyebrow, h1, .hero__intro, .hero__actions');

			window.gsap.timeline({
				defaults: { ease: 'power3.out' },
				onComplete: () => {
					window.gsap.set(current, { visibility: 'hidden', xPercent: 0 });
					window.gsap.set(currentItems, { x: 0, y: 0, autoAlpha: 1, clearProps: 'transform,opacity,visibility' });
					window.gsap.set(currentContent, { x: 0, y: 0, clearProps: 'transform,opacity,visibility' });
					window.gsap.set(next, { xPercent: 0, visibility: 'visible' });
					window.gsap.set(nextItems, { x: 0, y: 0, autoAlpha: 1, clearProps: 'transform,opacity,visibility' });
					window.gsap.set(next.querySelector('.hero__media img'), { scale: 1, filter: 'brightness(1)', clearProps: 'transform,filter' });
					transitioning = false;
				},
			})
				.fromTo(next.querySelector('.hero__media img'), { scale: 1.07, filter: 'brightness(.82)' }, {
					scale: 1,
					filter: 'brightness(1)',
					duration: 1.3,
					ease: 'power2.out',
				}, 0.15)
				.set(next, { xPercent: direction * 100, autoAlpha: 1 }, 0)
				.to(current, { xPercent: direction * -100, autoAlpha: 1, duration: 1.05 }, 0)
				.to(next, { xPercent: 0, autoAlpha: 1, duration: 1.05 }, 0)
				.to(currentItems, {
					x: direction * -24,
					autoAlpha: 0,
					duration: 0.45,
					stagger: 0.035,
					ease: 'power2.in',
				}, 0)
				.fromTo(nextItems, { y: 38, autoAlpha: 0 }, {
					y: 0,
					autoAlpha: 1,
					duration: 0.75,
					stagger: 0.09,
					ease: 'power3.out',
					clearProps: 'transform,opacity,visibility',
				}, 0.36);
		}

		activeIndex = nextIndex;
		setActiveDot(activeIndex);
	};

	const restartTimer = () => {
		window.clearInterval(timer);
		if (!reducedMotion && !paused && !document.hidden) {
			timer = window.setInterval(() => showSlide(activeIndex + 1), interval);
		}
	};

	dots.forEach((dot) => {
		dot.addEventListener('click', () => {
			showSlide(Number(dot.dataset.heroDot) || 0);
			restartTimer();
		});
	});

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
