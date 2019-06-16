// 1. Модуль главного меню
;(function() {
	var scrolledY = 0,
		topMenu = $('.header_block').offset().top;

	toggleFixedMenu();
	scrollX('.header_block');

	$(window).on('scroll', function () {
		toggleFixedMenu();
		scrollX('.header_block');
	});

	function toggleFixedMenu() {
		scrolledY = $(window).scrollTop();

		if (scrolledY >= topMenu && !$('.header_block').hasClass('_fixed')) {
			$('.header_block').addClass('_fixed');
		}
		else if (scrolledY < topMenu && $('.header_block').hasClass('_fixed')) {
			$('.header_block').removeClass('_fixed');
		}
	}
}());
// ----------------------------

// 2. Модуль боковой панели
(function() {
	var scrolledY = 0,
		heightMenu = $('.header_block').outerHeight(true),
		heightSidebar = $('.sidebar').outerHeight(),
		topSidebar = $('.sidebar ').offset().top,
		minTopSidebar = topSidebar - heightMenu - 10,
		maxTopSidebar = 0,
		marginTopSidebar = 0;

	$(window).on('load', function () {
		scrolledY = $(window).scrollTop();
		maxTopSidebar = $('.content-container_block > section').height() - heightMenu;

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