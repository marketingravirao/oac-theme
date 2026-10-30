(() => {
	if (!window.gsap || window.oacAnimationsInitialized) {
		return;
	}

	const { gsap, ScrollTrigger, SplitText } = window;
	if (!ScrollTrigger || !SplitText) {
		return;
	}

	window.oacAnimationsInitialized = true;
	gsap.registerPlugin(ScrollTrigger, SplitText);

	const clamp = (value, min, max, fallback) => {
		const number = typeof value === 'string' && value.trim() !== '' ? Number(value) : NaN;
		return Number.isFinite(number) ? Math.min(max, Math.max(min, number)) : fallback;
	};
	const media = gsap.matchMedia();

	media.add('(prefers-reduced-motion: no-preference)', () => {
		const splits = [];
		const context = gsap.context(() => {
			const groupedItems = new Set();
			document.querySelectorAll('[data-animate-group]').forEach((group) => {
				const items = Array.from(group.querySelectorAll(':scope > [data-animate-item]'));
				if (!items.length) {
					return;
				}

				items.forEach((item) => groupedItems.add(item));
				const distance = clamp(group.dataset.distance, 0, 120, 36);
				const duration = clamp(group.dataset.duration, 0.4, 1.4, 0.8);
				const delay = clamp(group.dataset.delay, 0, 2, 0);
				const stagger = clamp(group.dataset.stagger, 0, 0.4, 0.08);
				const type = group.dataset.animateGroup;
				const from = type === 'fade-down' ? { y: -distance } : { y: distance };

				gsap.fromTo(
					items,
					{ autoAlpha: 0, ...from },
					{
						autoAlpha: 1,
						x: 0,
						y: 0,
						duration,
						delay,
						stagger,
						ease: 'power3.out',
						clearProps: 'transform,opacity,visibility',
						scrollTrigger: { trigger: group, start: 'top 85%', once: group.dataset.repeat !== 'true' },
					}
				);
			});

			document.querySelectorAll('[data-animate]').forEach((element) => {
				if (groupedItems.has(element)) {
					return;
				}

				const type = element.dataset.animate;
				const duration = clamp(element.dataset.duration, 0.4, 1.4, 0.8);
				const delay = clamp(element.dataset.delay, 0, 2, 0);
				const trigger = element.dataset.trigger;
				const useScroll = trigger !== 'load';
				const scrollTrigger = useScroll ? { trigger: element, start: 'top 85%', once: element.dataset.repeat !== 'true' } : undefined;

				if (type === 'words') {
					const split = new SplitText(element, { type: 'words', wordsClass: 'oac-anim-word', aria: 'auto' });
					splits.push(split);
					gsap.fromTo(
						split.words,
						{ yPercent: 85, autoAlpha: 0 },
						{
							yPercent: 0,
							autoAlpha: 1,
							duration,
							delay,
							stagger: clamp(element.dataset.stagger, 0, 0.3, 0.055),
							ease: 'power3.out',
							clearProps: 'transform,opacity,visibility',
							scrollTrigger,
						}
					);
					return;
				}

				const distance = clamp(element.dataset.distance, 0, 120, 48);
				const offsets = {
					'fade-up': { y: distance },
					'fade-down': { y: -distance },
					'fade-left': { x: -distance },
					'fade-right': { x: distance },
					'scale-up': { scale: 0.92 },
					'fade-scale': { scale: 0.96 },
				};
				if (!offsets[type]) {
					return;
				}
				const compactViewport = window.matchMedia('(max-width: 1024px)').matches;
				const initialOffset = compactViewport && (type === 'fade-left' || type === 'fade-right')
					? { y: Math.min(distance, 32) }
					: offsets[type];

				gsap.fromTo(
					element,
					{ autoAlpha: 0, ...initialOffset },
					{
						autoAlpha: 1,
						x: 0,
						y: 0,
						scale: 1,
						duration,
						delay,
						ease: 'power3.out',
						clearProps: 'transform,opacity,visibility',
						scrollTrigger,
					}
				);
			});

			document.querySelectorAll('[data-scroll-effect="scale"]').forEach((element) => {
				const scale = clamp(element.dataset.scale, 0.9, 1, 0.94);
				gsap.fromTo(element, { scale }, {
					scale: 1,
					ease: 'none',
					scrollTrigger: { trigger: element, start: 'top 90%', end: 'bottom 10%', scrub: 0.5 },
				});
			});

		});

		return () => {
			context.revert();
			splits.forEach((split) => split.revert());
		};
	});
})();