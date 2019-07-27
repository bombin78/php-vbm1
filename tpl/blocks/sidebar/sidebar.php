<?php

function getSidebar($absAddress, $activeItem, $linkParam){

	$menuParams = json_decode(file_get_contents($absAddress.'/tpl/blocks/sidebar/sidebar.json'),true);
	$menuLength = count($menuParams);

	echo "<aside class='sidebar-container'>";
	echo "<div class='sidebar-container__block sidebar'>";
	echo "<h2 class = 'sidebar__title'>Разделы</h2>";
	echo "<ul class = 'sidebar__sidebar-menu sidebar-menu'>";

	for ($i = 0; $i < $menuLength; $i++) {

		$cssClassActive = ($menuParams[$i]['id'] == $activeItem) ? " _active" : "";

		echo "<li class = 'sidebar-menu__item'>";
		echo "<div class = 'sidebar-menu__block-link'>";
		echo "<a class='sidebar-menu__link" . $cssClassActive . "' href = '" . $absAddress . $menuParams[$i][$linkParam] . "'>";
		echo $menuParams[$i]['name'];
		echo "</a>";
		echo "</div>";
		echo "</li>";
	}
	echo "</ul>";
	echo "</div>";
	echo "</aside>";
}

getSidebar($absAddress, $activeItem, $linkParam);
