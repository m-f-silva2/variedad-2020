<?php namespace Inc;
require_once("config.php");

if(DEBUG == "true"){
    ini_set('display_errors',1);
}else{
    ini_set('display_errors',0);
}

require_once("Tools.php");
?>