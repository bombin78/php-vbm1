<?php
$query_sb = "SELECT * FROM ser_sidebar";
$result_sb = mysqli_query($db_server, $query_sb);
$rows_sb = mysqli_num_rows($result_sb);
echo "<aside class='sidebar-container'>";
echo "<div class='sidebar-container_block sidebar'>";
echo "<h2 class = 'sidebar_title'>Разделы</h2>";
echo "<ul class = 'sidebar_sidebar-menu sidebar-menu'>";
for ($i = 10; $i < $rows_sb + 10; $i++) {

	$row_sb = mysqli_fetch_row($result_sb);
	$faa = (($i == $active_item)) ? " _active" : "";

	echo "<li class = 'sidebar-menu_item'>";
	echo "<div class = 'sidebar-menu_block-link'>";
	echo "<a class='sidebar-menu_link" . $faa . "' href = '" . $abs_address . $row_sb[2] . "'>" . $row_sb[1] . "</a>";
	echo "</div>";
	echo "</li>";
}
echo "</ul>";
echo "</div>";
echo "</aside>";