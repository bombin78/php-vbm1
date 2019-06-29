<?php
//-------- Подключение файла конфигурации ---------
include_once("config/config.php");
//-------------------------------------------------


//------ Блок подключения файлов к index.php ------
if (isset ($_GET['page'])) $page = $_GET['page'];
else $page = 1;

switch ($page) {

	// Страницы подключаемые через основное меню
	case "1":
		$connect = "tpl/pages/main/main.php";
		$activeItem = 1;
		$title = "Главная";
		break;

	case "2":
		$connect = "tpl/pages/about-company.php";
		$activeItem = 2;
		$title = "О компании";
		break;

	case "3":
		$connect = "tpl/pages/documents.php";
		$activeItem = 3;
		$title = "Документы";
		break;

	case "4":
		$connect = "tpl/pages/contacts.php";
		$activeItem = 4;
		$title = "Контакты";
		break;

	// Страницы подключаемые через боковое меню
	case "10":
		$connect = "tpl/pages/repair-ssps.php";
		$activeItem = 10;
		$title = "Ремонт автомотрис и мотовозов АДМ, МПТ, ДГКУ";
		break;

	case "11":
		$connect = "tpl/pages/repair-railwaycrane.php";
		$activeItem = 11;
		$title = "Ремонт ж.д.кранов КЖ, КЖС, КЖДЭ";
		break;

	case "12":
		$connect = "tpl/pages/repair-units.php";
		$activeItem = 12;
		$title = "Ремонт агрегатов для вибопогружения фундаментов АВФ, МС";
		break;

	case "13":
		$connect = "tpl/pages/repair-engines.php";
		$activeItem = 13;
		$title = "Ремонт двигателей ЯМЗ и их модификаций";
		break;

	case "14":
		$connect = "tpl/pages/repair-transmission.php";
		$activeItem = 14;
		$title = "Ремонт гидропередач УГП, ГМПМ, ГП и их модификаций";
		break;

	case "15":
		$connect = "tpl/pages/sale-equipment.php";
		$activeItem = 15;
		$title = "Продажа б/у железнодорожной техники";
		break;

	default:
		$connect = "tpl/pages/main.php";
		$activeItem = 1;
		$title = "Главная";
		break;
}
//-------------------------------------------------
