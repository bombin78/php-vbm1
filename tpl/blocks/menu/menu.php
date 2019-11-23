<?php

function getMenu($path, $activeItem, $linkParam){

	$menuParams = json_decode(file_get_contents($path.'/tpl/blocks/menu/menu.json'),true);
	$menuLength = count($menuParams);

	echo "<nav class='control-panel__menu menu'><!-- Меню сайта -->";
	echo "<ul class = 'menu__list'>";
	for ($i = 0; $i < $menuLength; $i++) {

		$cssClassActive = ($menuParams[$i]['id'] == $activeItem) ? " _active" : "";
		$cssClassEnd = ($menuParams[$i]['id'] == $menuLength) ? " _end" : "";

		echo "<li class = 'menu__item" . $cssClassEnd ."''>";
		echo "<a class = 'menu__link" . $cssClassActive . "' href = '/" . $menuParams[$i][$linkParam] . "'>";
		echo $menuParams[$i]['name'];
		echo "</a>";
		echo "</li>";
	}
	echo "</ul>";
	echo "</nav>";
}

getMenu($path, $activeItem, $linkParam);
