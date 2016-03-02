<?php
require_once("inc/config.php");

if($barc_dev_mode) {
    error_reporting(E_ALL);
}

$barc_args = explode("/", $_GET["barc_query"]);

//i18n
$barc_lang = $barc_args[0];
$barc_selectlang = false;
array_shift($barc_args); //Remove first element (language)
if(empty($barc_lang)) {
    $barc_selectlang = true;
} elseif(!in_array($barc_lang, $barc_available_langs)) {
    header("HTTP/1.0 404 Not Found");
    header("Location: " . BASE_URL );
    die;
}

define("URL", BASE_URL . "/" . $barc_lang);

if(isset($barc_args[0])) {
    $barc_page = $barc_args[0];
} else {
    $barc_page = "";
}
array_shift($barc_args); //Remove first element (page)

if($barc_selectlang) {
    $barc_page = "selectlang";
} elseif(empty($barc_page)) { //Homepage
    $barc_page = "home";
} elseif(!in_array($barc_page, $barc_available_pages)) {
    header("HTTP/1.0 404 Not Found");
    header("Location: " . URL . "/404");
    die;
}

require_once("inc/barc.functions.php");

$barc_translation = array();
if(!$barc_selectlang) {    
    barc_load_translation("everypage");
    barc_load_translation("page." . $barc_page);
}

require_once("inc/template.php");
require_once("inc/functions.php");

ob_start("ob_gzhandler"); //Compression
session_start();

include("pages/" . $barc_page . ".php"); //CMS is real

ob_end_flush();

?>