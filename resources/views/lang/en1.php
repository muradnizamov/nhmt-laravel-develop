<?php

$fav_icon = 'owrpo';
$lang["search"] = 'Enter search word';
$lang["toggle1"] = '<a href="/backend/selectLanguage.php?lang=az">AZ</a>';
$lang["identity"] = 'OIL WORKERS’ RIGHTS PROTECTION ORGANIZATION';
$lang["home"] = 'Home';
$lang["nhmt"] = 'OWRPO';
$lang["about"] = 'About us';
$lang["archive"] = 'Archive';
$lang["projects"] = 'Projects';
$lang["human-rights"] = 'Protection of Human Rights';
$lang["oil-income"] = 'Oil income';
$lang["bmq"] = 'Monitoring of IFI activities';
$lang["corruption"] = 'Combating corruption';
$lang["finished-projects"] = 'Finished projects';
$lang["legal-documents"] = 'Legal documents';
$lang["aze-legal-documents"] = 'Azerbaijan';
$lang["int-legal-documents"] = 'International';
$lang["contact"] = 'Contact';
$author = 'POSTED BY:';
$readmore = 'read more';
$lang["email"] = 'Enter your e-mail address';
$lang["subject"] = 'Enter subject';
$lang["message"] = 'Enter your message';
$lang["send"] = 'Send';
$thank = 'Thank you for contacting us!';
$lang["qa"] = 'Questions & Answers';
$lang["video"] = 'VIDEO';
$question = 'QUESTION ';
$lang["actual"] = 'ACTUAL POSTS';
$lang["fb"] = 'LIKE US ON FACEBOOK';
$lang["recent"] = 'Recent Posts';
$lang["popular"] = 'Popular Posts';
$nhmt = 'OWRPO';

$days = array(
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
);
 
$months = array(
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
);

date_default_timezone_set("Asia/Baku");
$today = '<strong>Today: </strong>';
$month = $months[date('m') - 1];
$day = $days[date('N') - 1];

include ($selected_lang_search . ".php");

if (isset($row)) {
	$lang["contents-inner-title"] = $row -> pageTitleEn;
	$lang["contents-inner-author"] = $row -> authrE;
	$lang["contents-inner-date"] = $row -> dateE;
	$lang["contents-inner-article"] = $row -> pageContEn;
	$lang['video-inner-title'] = $row -> title_en;
	$lang['video-inner-upload-date'] = $row -> upload_date_en;
}

if (isset($r)) {
	$lang['contents-inner-question-id'] = $r -> pageID;
	$lang['contents-inner-question'] = '<p class="question-title">' . $r -> questionEn . '</p>';
	$lang['contents-inner-answer'] = $r -> answerEn;
	$question_share_title = $r -> questionEn;
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include '../frontend/header/head-en.php'; ?>


