<?php

if(!isset($_SESSION)){
    session_start();
}

if (isset($_SESSION["lang1"], $_SESSION["lang2"], $_SESSION["lang3"], $_SESSION["lang_search"])) {
	$selected_lang_1 = $_SESSION["lang1"];
	$selected_lang_2 = $_SESSION["lang2"];
	$selected_lang_3 = $_SESSION["lang3"];
	$selected_lang_search = $_SESSION["lang_search"];
}

if (empty($selected_lang_1))
{
    $selected_lang_1 = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
    if (!file_exists("lang/" . $selected_lang_1 . ".php"))
    {
        $selected_lang_1 = 'az1';
        $selected_lang_2 = 'az2';
        $selected_lang_3 = 'az3';
        $selected_lang_search = 'az-search';
    }
}
$_SESSION["lang1"] = $selected_lang_1;
$_SESSION["lang2"] = $selected_lang_2;
$_SESSION["lang3"] = $selected_lang_3;
$_SESSION["lang_search"] = $selected_lang_search;
include ("lang/" . $selected_lang_1 . ".php");
$file_path = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$_SESSION['file_path'] = $file_path;

?>