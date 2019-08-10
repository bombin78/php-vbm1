<section class="main">
	<h2 class="main__content-title content-title">Главная</h2>

	<p class="main__text">
		Компания ООО "ВИБРОБУРМАШ" рада приветствовать Вас на своем официальном сайте!
		Здесь Вы можете ознакомиться с нашей продукцией, а также узнать наши контакты и реквизиты.
		Если у Вас возникли вопросы, звоните, мы проконсультируем и вместе подберем оптимальное решение.
	</p>

	<!-- слайдер на главной -->
	<?php include_once "tpl/pages/main/slider/slider.php" ?>
	<!-- /слайдер на главной -->

</section>
<script src="<?php echo $absAddress; ?>vendors/nivo-slider/jquery.nivo.slider.js"></script>
<script>
	$(window).load(function () {
		$('#slider').nivoSlider({controlNav: false});
	});
</script>
