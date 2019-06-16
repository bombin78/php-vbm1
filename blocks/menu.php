<?php
$query_m = "SELECT * FROM ser_menu";
$result_m = mysqli_query($db_server, $query_m);
$rows_m = mysqli_num_rows($result_m);

echo "<nav class='control-panel_menu menu'><!-- Меню сайта -->";
echo "<ul class = 'menu_list'>";
for ($i = 1; $i <= $rows_m; $i++) {
	
	$row_m = mysqli_fetch_row($result_m);
	$faa = (($i == $active_item)) ? " _active" : "";
	$fae = (($i == $rows_m)) ? " _end" : "";

	echo "<li class = 'menu_item" . $fae . "''>";
	echo "<a class = 'menu_link" . $faa . "' href = '" . $abs_address . $row_m[2] . "'>";
	echo $row_m[1];
	echo "</a>";
	echo "</li>";
}
echo "</ul>";
echo "</nav>";