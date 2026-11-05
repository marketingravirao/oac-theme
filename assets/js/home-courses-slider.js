(() => {
	document.querySelectorAll('[data-home-courses-slider]').forEach((element) => {
		if (!window.Swiper) {
			return;
		}

		const previous = element.querySelector('[data-courses-prev]');
		const next = element.querySelector('[data-courses-next]');
		const pagination = element.querySelector('[data-courses-dots]');

		new window.Swiper(element, {

			slidesPerView: 3,
			spaceBetween: 20,
			slidesPerGroup: 1,
			loop: true,
			speed: 600,
			grabCursor: true,
			autoplay: {
				delay: 1500,
				pauseOnMouseEnter: true,
			},
			watchOverflow: true,
			navigation: {
				prevEl: previous,
				nextEl: next,
			},
			pagination: {
				el: pagination,
				clickable: true,
				bulletClass: 'home-courses__dot',
				bulletActiveClass: 'is-active',
			},
			breakpoints: {
				0: {
					slidesPerView: 1,
					spaceBetween: 16,
				},
				681: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				901: {
					slidesPerView: 3,
					spaceBetween: 20,
				},
			},
		});
	});
})();
