<?php

function getMenu($absAddress, $activeItem, $linkParam){

	$menuParams = json_decode(file_get_contents($absAddress.'/tpl/blocks/menu/menu.json'),true);
	$menuLength = count($menuParams);

	echo "<nav class='control-panel_menu menu'><!-- Меню сайта -->";
	echo "<ul class = 'menu_list'>";
	for ($i = 0; $i < $menuLength; $i++) {

		$cssClassActive = ($menuParams[$i]['id'] == $activeItem) ? " _active" : "";
		$cssClassEnd = ($menuParams[$i]['id'] == $menuLength) ? " _end" : "";

		echo "<li class = 'menu_item" . $cssClassEnd ."''>";
		echo "<a class = 'menu_link" . $cssClassActive . "' href = '" . $absAddress . $menuParams[$i][$linkParam] . "'>";
		echo $menuParams[$i]['name'];
		echo "</a>";
		echo "</li>";
	}
	echo "</ul>";
	echo "</nav>";
}

getMenu($absAddress, $activeItem, $linkParam);
