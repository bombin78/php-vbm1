// 1. Модуль главного меню
;(function() {
	var scrolledY = 0,
		topMenu = $('.header__block').offset().top;

	toggleFixedMenu();
	scrollX('.header__block');

	$(window).on('scroll', function () {
		toggleFixedMenu();
		scrollX('.header__block');
	});

	function toggleFixedMenu() {
		scrolledY = $(window).scrollTop();

		if (scrolledY >= topMenu && !$('.header__block').hasClass('_fixed')) {
			$('.header__block').addClass('_fixed');
		}
		else if (scrolledY < topMenu && $('.header__block').hasClass('_fixed')) {
			$('.header__block').removeClass('_fixed');
		}
	}
}());
// ----------------------------

// 2. Модуль боковой панели
(function() {
	var scrolledY = 0,
		heightMenu = $('.header__block').outerHeight(true),
		heightSidebar = $('.sidebar').outerHeight(),
		topSidebar = $('.sidebar ').offset().top,
		minTopSidebar = topSidebar - heightMenu - 10,
		maxTopSidebar = 0,
		marginTopSidebar = 0;

	$(window).on('load', function () {
		scrolledY = $(window).scrollTop();
		maxTopSidebar = $('.content-container__block > section').height() - heightMenu;

		toggleFixedSidebar();
		scrollX('.sidebar');
	});

	$(window).on('scroll', function () {
		toggleFixedSidebar();
		scrollX('.sidebar');
	});

	function toggleFixedSidebar() {
		scrolledY = $(window).scrollTop();

		if (scrolledY >= minTopSidebar) {
			if (scrolledY < maxTopSidebar) {
				marginTopSidebar = scrolledY - topSidebar + heightMenu + 10;
				$('.sidebar-container').css('margin-top', marginTopSidebar);
				$('.sidebar').addClass('_fixed').css('top', heightMenu + 10);
				scrollX('.sidebar');
			}
			else {
				$('.sidebar-container').css('margin-top', maxTopSidebar - heightSidebar + heightMenu + 30);
				$('.sidebar').removeClass('_fixed').css('top', 0);
			}
		}
		else {
			$('.sidebar-container').css('margin-top', 10);
			$('.sidebar').removeClass('_fixed').css('top', 0);
		}
	}
}());
// ----------------------------

// 3. Общая функция
function scrollX(classBlock) {
	var scrolledX = $(window).scrollLeft();

	if (scrolledX && $(classBlock).hasClass('_fixed')) {
		$(classBlock).css('left', - scrolledX);
	}
	else {
		$(classBlock).css('left', 'auto');
	}
}
