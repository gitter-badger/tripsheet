<?php

//Load a custom translation from locale/<language>/<name>.php
function barc_load_translation($name) {
    global $barc_lang;
    global $barc_translation;
    if(file_exists("locale/".$barc_lang."/".$name.".php")) {
        include_once("locale/".$barc_lang."/".$name.".php");    
    }    
}
       
//i18n method - Returns the translation with the given key
function t($id) {
  global $barc_translation;
  if(isset($barc_translation[$id])) {
    return $barc_translation[$id];
  } else {
    return "[" . $id . "]";
  }
}

?>