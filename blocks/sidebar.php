<?php
$sidebarMenu = json_decode(file_get_contents($abs_address.'/config/menu-sidebar.json'),true);

echo "<aside class='sidebar-container'>";
echo "<div class='sidebar-container_block sidebar'>";
echo "<h2 class = 'sidebar_title'>Разделы</h2>";
echo "<ul class = 'sidebar_sidebar-menu sidebar-menu'>";

for ($i = 0; $i < count($sidebarMenu); $i++) {

	$countItem = $i + 10;
	$cssClassActive = ($countItem == $activeItem) ? " _active" : "";

	echo "<li class = 'sidebar-menu_item'>";
	echo "<div class = 'sidebar-menu_block-link'>";
	echo "<a class='sidebar-menu_link" . $cssClassActive . "' href = '" . $abs_address . $sidebarMenu[$i][$linkParam] . "'>";
	echo $sidebarMenu[$i]['name'];
	echo "</a>";
	echo "</div>";
	echo "</li>";
}
echo "</ul>";
echo "</div>";
echo "</aside>";
