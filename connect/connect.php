<?php

include_once("config/config.php");//подключение файла конфигурации
include_once("lib/fun_db_connect.php");//подключения файла библиотеки
$db_server = dbConnect($db_hostname, $db_username, $db_password, $db_database);//подкллючение к базе данных
include_once("lib/fun_db_close.php");//подключения файла библиотеки
//-------------------------------

//------ Блок подключения файлов к index.php ------
if (isset ($_GET['page'])) $page = $_GET['page'];
else $page = 1;

switch ($page) {
	case "1":
		$connect = "blocks/main.php";
		$activeItem = 1;
		$title = "Главная";
		$style = "main.css";
		break;

	case "2":
		$connect = "blocks/about-company.php";
		$activeItem = 2;
		$title = "О компании";
		$style = "about-company.css";
		break;

	case "3":
		$connect = "blocks/documents.php";
		$activeItem = 3;
		$title = "Документы";
		$style = "documents.css";
		break;

	case "4":
		$connect = "blocks/contacts.php";
		$activeItem = 4;
		$title = "Контакты";
		$style = "contacts.css";
		break;



	case "10":
		$connect = "blocks/repair-ssps.php";
		$activeItem = 10;
		$title = "Ремонт автомотрис и мотовозов АДМ, МПТ, ДГКУ";
		$style = "repair-ssps.css";
		break;

	case "11":
		$connect = "blocks/repair-railwaycrane.php";
		$activeItem = 11;
		$title = "Ремонт ж.д.кранов КЖ, КЖС, КЖДЭ";
		$style = "repair-railwaycrane.css";
		break;

	case "12":
		$connect = "blocks/repair-units.php";
		$activeItem = 12;
		$title = "Ремонт агрегатов для вибопогружения фундаментов АВФ, МС";
		$style = "repair-units.css";
		break;

	case "13":
		$connect = "blocks/repair-engines.php";
		$activeItem = 13;
		$title = "Ремонт двигателей ЯМЗ и их модификаций";
		$style = "repair-engines.css";
		break;

	case "14":
		$connect = "blocks/repair-transmission.php";
		$activeItem = 14;
		$title = "Ремонт гидропередач УГП, ГМПМ, ГП и их модификаций";
		$style = "repair-transmission.css";
		break;

	case "15":
		$connect = "blocks/sale-equipment.php";
		$activeItem = 15;
		$title = "Продажа б/у железнодорожной техники";
		$style = "sale-equipment.css";
		break;

	default:
		$connect = "blocks/main.php";
		$activeItem = 1;
		$title = "Главная";
		$style = "main.css";
		break;
}
//-------------------------------------------------
