<section class="main">
	<h2 class="main_content-title content-title">Главная</h2>
	<?php
	$query_main = "SELECT * FROM ser_main";
	$result_main = mysqli_query($db_server, $query_main);
	$rows_main = mysqli_num_rows($result_main);

	echo "<div class = 'main_slider theme-bar'>";
	echo "<div id = 'slider' class='nivo-slider'>";
	for ($i = 0; $i < $rows_main; $i++) {
		$j = $i + 1;
		$row_main = mysqli_fetch_row($result_main);
		if ($j == 3) $dt_tr = "data-transition = 'slideInLeft'";
		else $dt_tr = "";

		echo "<img src = '" . $abs_address . $row_main[2] . "' data-thumb='" . $abs_address . $row_main[2] . "'
				 " . $dt_tr . " alt = '" . $row_main[1] . "' title = '" . $row_main[1] . "'>";
	}
	echo "</div>";
	echo "</div>";
	?>
</section>
<script src="<?php echo $abs_address; ?>nivo_slider/jquery.nivo.slider.js"></script>
<script>
	$(window).load(function () {
		$('#slider').nivoSlider();
	});
</script>