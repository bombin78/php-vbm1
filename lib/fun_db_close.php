<?php

/* 1. --- ФУНКЦИЯ ОТКЛЮЧЕНИЯ ОТ БД --- */
function dbClose($db_server)
{
	mysqli_close($db_server);
}