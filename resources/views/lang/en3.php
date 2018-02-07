<?php

function __autoload($className) {
	include $_SERVER['DOCUMENT_ROOT'] . '/backend/' . $className . '.php';
}

$human_rights = new database_class ();
$human_rights -> data ("", 5, "general_table", "human-rights", "pageTitleEn",  "pageID", 0, 2, 4, 6, 7, 9);

$about = new database_class ();
$about -> data ("", 5, "general_table", "about", "pageTitleEn",  "pageID", 0, 2, 4, 6, 7, 9);

$archive = new database_class ();
$archive -> data ("", 5, "general_table", "archive", "pageTitleEn",  "pageID", 0, 2, 4, 6, 7, 9);

$aze_legal_documents = new database_class ();
$aze_legal_documents -> data ("", 5, "general_table", "aze-legal-documents", "pageTitleEn",  "pageID", 0, 2, 4, 6, 7, 9);

$int_legal_documents = new database_class ();
$int_legal_documents -> data ("", 5, "general_table", "int-legal-documents", "pageTitleEn",  "pageID", 0, 2, 4, 6, 7, 9);

$finished_projects = new database_class ();
$finished_projects -> data ("", 5, "general_table", "finished-projects", "pageTitleEn",  "pageID", 0, 2, 4, 6, 7, 9);

$corruption = new database_class ();
$corruption -> data ("", 5, "general_table", "corruption", "pageTitleEn",  "pageID", 0, 2, 4, 6, 7, 9);

$oil_income = new database_class ();
$oil_income -> data ("", 5, "general_table", "oil-income", "pageTitleEn",  "pageID", 0, 2, 4, 6, 7, 9);

$bmq = new database_class ();
$bmq -> data ("", 5, "general_table", "bmq", "pageTitleEn",  "pageID", 0, 2, 4, 6, 7, 9);

$actual = new database_class ();
$actual -> data ("", 5, "general_table", "actual", "pageTitleEn",  "pageID", 0, 2, 4, 6, 7, 9);

$aktual = new database_class ();
$aktual -> data ("", 1, "general_table", "actual", "pageTitleEn", "pageID", 0, 2, 3, 5, 7, 8);

$qa = new database_class ();
$qa -> data ("", 15, "qa", "qa", "questionEn", "pageID", 0, 6, 2, 4, 10, 8);

$sc = new database_class ();
$sc -> data ("", 1, "qa", "qa", "questionEn", "pageID", 0, 5, 1, 3, 10, 7);

$video = new database_class ();
$video -> data ("", 12, "video", "video", "title_en", "id", 0, 2, "", 4, 7, 5);

$address = "<span>Address: </span>Baku, Azerbaijan, AZ1060K. Balakishiev 15, flat 6<br><br><span>Pho: </span>+994 12 520 34 59<br><br><span>Head of the organization: </span>Mirvari Gahramanli<br><br><span>Lawyer of the organization: </span>Azer Guliev";

?>

<title><?php echo $nhmt ?> - <?= $lang["contents-inner-title"]; ?></title>