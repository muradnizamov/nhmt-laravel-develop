<?php
	function __autoload($className) {
		include $_SERVER['DOCUMENT_ROOT'] . '/backend/' . $className . '.php';
	}

$human_rights = new database_class ();
$human_rights -> data ("", 5, "general_table", "human-rights", "pageTitleAz", "pageID", 0, 1, 3, 5, 7, 8);

$about = new database_class ();
$about -> data ("", 5, "general_table", "about", "pageTitleAz", "pageID", 0, 1, 3, 5, 7, 8);

$archive = new database_class ();
$archive -> data ("", 5, "general_table", "archive", "pageTitleAz", "pageID", 0, 1, 3, 5, 7, 8);

$aze_legal_documents = new database_class ();
$aze_legal_documents -> data ("", 5, "general_table", "aze-legal-documents", "pageTitleAz", "pageID", 0, 1, 3, 5, 7, 8);

$int_legal_documents = new database_class ();
$int_legal_documents -> data ("", 5, "general_table", "int-legal-documents", "pageTitleAz", "pageID", 0, 1, 3, 5, 7, 8);

$finished_projects = new database_class ();
$finished_projects -> data ("", 5, "general_table", "finished-projects", "pageTitleAz", "pageID", 0, 1, 3, 5, 7, 8);

$corruption = new database_class ();
$corruption -> data ("", 5, "general_table", "corruption", "pageTitleAz", "pageID", 0, 1, 3, 5, 7, 8);

$oil_income = new database_class ();
$oil_income -> data ("", 5, "general_table", "oil-income", "pageTitleAz", "pageID", 0, 1, 3, 5, 7, 8);

$bmq = new database_class ();
$bmq -> data ("", 5, "general_table", "bmq", "pageTitleAz", "pageID", 0, 1, 3, 5, 7, 8);

$actual = new database_class ();
$actual -> data ("", 5, "general_table", "actual", "pageTitleAz", "pageID", 0, 1, 3, 5, 7, 8);

$aktual = new database_class ();
$aktual -> data ("", 1, "general_table", "actual", "pageTitleAz", "pageID", 0, 1, 3, 5, 7, 8);

$qa = new database_class ();
$qa -> data ("", 25, "qa", "qa", "questionAz", "pageID", 0, 5, 1, 3, 10, 7);

$sc = new database_class ();
$sc -> data ("", 1, "qa", "qa", "questionAz", "pageID", 0, 5, 1, 3, 10, 7);

$video = new database_class ();
$video -> data ("", 12, "video", "video", "title_az", "id", 0, 1, "", 3, 7, 5);

$address = "<span>Ünvan: </span>Bakı, Azərbaycan, AZ1060K. Balakişiyev 15, mənzil 6<br><br><span>Tel: </span>+994 12 520 34 59<br><br><span>Təşkilatın rəhbəri: </span>Mirvari Qəhramanlı<br><br><span>Təşkilatın hüquqşünası: </span>Azər Quliyev";

?>

<title><?php echo $nhmt ?> - <?= $lang["contents-inner-title"]; ?></title>




