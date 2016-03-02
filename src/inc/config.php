<?php

//Development/Debug mode - SHOULD BE false IN PRODUCTION ENVIRONMENT!
// - displays all errors and warnings
// - echos verification links so that you can test the user system without email support
$barc_dev_mode = true;

//The base URL of you site, i.e. where the index.php is located
define("BASE_URL", "http://localhost/barc");

//The laguages you want to support
//Coresponds to the names of /locale subdirectories
$barc_available_langs = array("en");

//Pages that should be accessible as <base_url>/<page_name>
//Each page must have a /pages/<pagename>.php file
$barc_available_pages = array(
    "404", 
    "login", 
    "register",
    "verify-email",
    "logout",
    "account",
    "reset-password"
);


//Table prefix used to access all database tables
define("DB_PRE", "barc_");

$barc_db_settings = array(
    //Host of your database server, normally "localhost"
    "host" => "localhost",
    //Username with which to access the database server
    "user" => "root",
    //Password for the database user specified above
    "password" => "",
    //Name of the database that should be used
    "database" => "barc"
);


//How long (number of seconds) e-mail addresses can be activated before they get deleted from the DB
$barc_activation_expires = 60*60*24*7; //7 days

//How long (number of seconds) password reset links can be used before they get deleted from the DB
$barc_password_reset_expires = 60*60*24*7; //7 days

//Specifies what e-mail address is declared as sender when barc sends e-mails
$barc_email_from = "Example <noreply@example.com>";

?>