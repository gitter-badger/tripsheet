<?php

//Development/Debug mode - SHOULD BE false IN PRODUCTION ENVIRONMENT!
// - displays all errors and warnings
// - echos verification links so that you can test the user system without email support
$barc_dev_mode = false;

//The base URL of you site, i.e. where the index.php is located
define("BASE_URL", "http://localhost/src");

//The laguages you want to support
//Coresponds to the names of /locale subdirectories
$barc_available_langs = array("en", "de");

//Pages that should be accessible as <base_url>/<page_name>
//Each page must have a /pages/<pagename>.php file
$barc_available_pages = array(
    "404"
);

?>