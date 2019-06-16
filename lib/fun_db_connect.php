<?php

/* 1. --- ФУНКЦИЯ ПОДКЛЮЧЕНИЯ К БД + КОДИРОВКА --- */
function dbConnect($db_hostname, $db_username, $db_password, $db_database)
{
	$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
	mysqli_query($db_server,"SET NAMES utf8");
	
	return $db_server;
}