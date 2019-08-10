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
		$description = "Официальный сайт ООО'ВИБРОБУРМАШ' г.Бологое";
		break;

	case "2":
		$connect = "tpl/pages/about-company.php";
		$activeItem = 2;
		$title = "О компании";
		$description = "";
		break;

	case "3":
		$connect = "tpl/pages/documents.php";
		$activeItem = 3;
		$title = "Документы";
		$description = "";
		break;

	case "4":
		$connect = "tpl/pages/contacts.php";
		$activeItem = 4;
		$title = "Контакты";
		$description = "Контактная информация, расположение на карте и реквизиты";
		break;

	// Страницы подключаемые через боковое меню
	case "10":
		$connect = "tpl/pages/make-ms1g2.php";
		$activeItem = 10;
		$title = "Изготовление новых машин МС-1Г.2";
		$description = "Производство железнодорожной техники (МС-1Г.2) для вибропогружения железобетонных свай и фундаментов опор контактной сети";
		break;

	case "11":
		$connect = "tpl/pages/make-hinged.php";
		$activeItem = 11;
		$title = "Изготовление навесного оборудования";
		$description = "Производство навесного оборудования для выпускаемой техники: бурового, пневмоударного и т.д.";
		break;

	case "12":
		$connect = "tpl/pages/make-spare.php";
		$activeItem = 12;
		$title = "Изготовление запасных частей";
		$description = "";
		break;

	case "13":
		$connect = "tpl/pages/repair-railway.php";
		$activeItem = 13;
		$title = "Ремонт ж.д.техники: МС , АВФ, АДМ, ж.д.кранов";
		$description = "Железнодорожная техника прошедшая ремонт на нашем предприятии";
		break;

	case "14":
		$connect = "tpl/pages/rent-railway.php";
		$activeItem = 14;
		$title = "Аренда ж.д.техники с экипажом и без него";
		$description = "";
		break;

	case "15":
		$connect = "tpl/pages/sale-railway.php";
		$activeItem = 15;
		$title = "Продажа б/у железнодорожной техники";
		$description = "";
		break;

	case "404":
		$connect = "tpl/pages/error-404.php";
		$title = "Ошибка 404";
		$description = "Страница ошибки";
		break;

	default:
		$connect = "tpl/pages/main.php";
		$activeItem = 1;
		$title = "Главная";
		break;
}
//-------------------------------------------------
