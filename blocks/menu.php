<?php
$topMenu = json_decode(file_get_contents($abs_address.'/config/menu-top.json'),true);
$menuLength = count($topMenu);

echo "<nav class='control-panel_menu menu'><!-- Меню сайта -->";
echo "<ul class = 'menu_list'>";
for ($i = 0; $i < $menuLength; $i++) {

	$countItem = $i + 1;
	$cssClassActive = ($countItem == $activeItem) ? " _active" : "";
	$cssClassEnd = ($countItem == $menuLength) ? " _end" : "";

	echo "<li class = 'menu_item" . $cssClassEnd ."''>";
	echo "<a class = 'menu_link" . $cssClassActive . "' href = '" . $abs_address . $topMenu[$i][$linkParam] . "'>";
	echo $topMenu[$i]['name'];
	echo "</a>";
	echo "</li>";
}
echo "</ul>";
echo "</nav>";
