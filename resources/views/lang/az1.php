<?php

$fav_icon = 'nhmt';
$lang["search"] = 'Axtarılan sözü daxil edin';
$lang["toggle1"] = '<a href="/backend/selectLanguage.php?lang=en">EN</a>';
$lang["identity"] = 'NEFTÇİLƏRİN HÜQUQLARINI MÜDAFİƏ TƏŞKİLATI';
$lang["home"] = 'Ana səhifə';
$lang["about"] = 'Haqqımızda';
$lang["archive"] = 'Arxiv';
$lang["projects"] = 'Layihələr';
$lang["human-rights"] = 'İnsan hüquqları müdafiəsi';
$lang["oil-income"] = 'Neft gəlirləri';
$lang["bmq"] = 'BMQ fəaliyyətinin monitorinqi';
$lang["corruption"] = 'Korrupsiya ilə mübarizə';
$lang["finished-projects"] = 'Bitmiş layihələr';
$lang["legal-documents"] = 'Hüquqi sənədlər';
$lang["aze-legal-documents"] = 'Azərbaycan';
$lang["int-legal-documents"] = 'Beynəlxalq';
$lang["contact"] = 'Əlaqə';
$thank = 'Bizimlə əlaqə yaratdığınız üçün təşəkkür edirik!';
$lang["video"] = 'VİDEO';
$lang["actual"] = 'AKTUAL MÖVZULAR';
$lang["fb"] = 'Facebookda Bəyən';
$lang["recent"] = 'Ən son mövzular';
$lang["popular"] = 'Populyar mövzular';

$days = array(
    'Bazar ertəsi',
    'Çərşənbə axşamı',
    'Çərşənbə',
    'Cümə axşamı',
    'Cümə',
    'Şənbə',
    'Bazar'
);
 
$months = array(
    'Yanvar',
    'Fevral',
    'Mart',
    'Aprel',
    'May',
    'İyun',
    'İyul',
    'Avqust',
    'Sentyabr',
    'Oktyabr',
    'Noyabr',
    'Dekabr'
);

date_default_timezone_set("Asia/Baku");
$today = '<strong>Bu gün: </strong>';
$month = $months[date('m') - 1];
$day = $days[date('N') - 1];

include ($selected_lang_search . ".php");

if (isset($row)) {
	$lang['contents-inner-title'] = $row -> pageTitleAz;
	$lang['contents-inner-author'] = $row -> authrA;
	$lang['contents-inner-date'] = $row -> dateA;
	$lang['contents-inner-image'] = $row -> image_name;
	$lang['contents-inner-article'] = $row -> pageContAz;
	$lang['video-inner-title'] = $row -> title_az;
	$lang['video-inner-upload-date'] = $row -> upload_date_az;
}

if (isset($r)) {
	$lang['contents-inner-question-id'] = $r -> pageID;
	$lang['contents-inner-question'] = '<p class="question-title">' . $r -> questionAz . '</p>';
	$lang['contents-inner-answer'] = $r -> answerAz;
	$question_share_title = $r -> questionAz;
}

include '/laravel/blog/resources/views/header/head-az.blade.php';

?>