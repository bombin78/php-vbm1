<?php

function getSliderForMain($absAddress){

	$sliderParams = json_decode(file_get_contents($absAddress.'/tpl/pages/main/slider/slider.json'),true);
	$sliderLength = count($sliderParams);

	echo "<div class = 'main__slider theme-bar'>";
	echo "<div id = 'slider' class='nivo-slider'>";

	for ($i = 0; $i < $sliderLength; $i++) {

		$countItem = $i + 1;

		if ($countItem == 3) {
			$dt_tr = "data-transition = 'slideInLeft'";
		} else {
			$dt_tr = "";
		}

		echo "<img src = '" . $absAddress . $sliderParams[$i]['url'] . "'" .
			"data-thumb='" . $absAddress . $sliderParams[$i]['url'] . "'" .
			$dt_tr .
			" alt = '" . $sliderParams[$i]['title'] . "'" .
			"title = '" . $sliderParamsn[$i]['title'] . "'>";
	}

	echo "</div>";
	echo "</div>";
}

getSliderForMain($absAddress);
