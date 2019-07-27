<section class="main">
	<h2 class="main__content-title content-title">Главная</h2>
	<!-- слайдер на главной -->
	<?php include_once "tpl/pages/main/slider/slider.php" ?>
	<!-- /слайдер на главной -->
</section>
<script src="<?php echo $absAddress; ?>vendors/nivo-slider/jquery.nivo.slider.js"></script>
<script>
	$(window).load(function () {
		$('#slider').nivoSlider();
	});
</script>
